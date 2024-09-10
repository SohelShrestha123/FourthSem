<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Manage</title>
    <link rel="stylesheet" type="text/css" href="busdetail.css?v=<?php echo time(); ?>">
</head>
<body>
<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="admin.php">Go To AdminPanel</a></li>
</ul>
</nav>
    <div class="list">
        <?php
          include "connection.php";
          $query="SELECT * FROM bus";
          $ans=mysqli_query($conn,$query);
          
          $number=mysqli_num_rows($ans);
          if($number!=0){  
          ?>
           <h2 align="center">Bus Management</h2>
           <center>
            <table border="2px" cellspacing="6" width="73%">
                <tr>
                    <th width="7%">SN</th>
                    <th width="22%">Bus Name</th>
                    <th width="12%">Bus No</th>
                    <th width="8%">Seat</th>
                    <th width="10%">Price</th>
                    <th width="14%">Bus Manage</th>
          </tr>
                <?php
                while($tab=mysqli_fetch_assoc($ans)) 
                {
                  echo "<tr>
                  <td>".$tab['SN']."</td>
                  <td>".$tab['Busname']."</td>
                  <td>".$tab['BusNo']."</td>
                  <td>".$tab['Seat']."</td>
                  <td>".$tab['Price']."</td>
 <td><a href='busupdate.php?sn=$tab[SN]' ><button class='update'>Edit</button></a>
    <a href='busdelete.php?sn=$tab[SN]' ><button class='delete' onclick='return remove()'>Remove</button></a></td>
                
              </tr>";
                }
            } 
            
            else {
                echo '<p>No buses available</p>';
            }
            ?>
            </table>
        </center>
</div>
</body>
<script>
  function remove(){
   return confirm('Are you sure you want to delete this record?');
  }
  </script>
</html>



