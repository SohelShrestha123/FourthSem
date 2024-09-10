<!DOCTYPE html>
<html>
<head>
<title>Bus List</title>
<link rel="stylesheet" type="text/css" href="selectbus.css?v=<?php echo time(); ?>">
</head>
<body>
   <h1>Bus Selection</h1>
    <div class="list">
        <?php
          include "connection.php";
          error_reporting(E_ERROR|E_PARSE);

          $query="SELECT * FROM bus";
          $ans=mysqli_query($conn,$query);
          
          $number=mysqli_num_rows($ans);
          if($number!=0){  
          ?>
           <h2 align="center">Select a bus</h2>
           <center>
            <table border="1px"  width="52%">
                <tr>
                <th width="9%">Bus No</th>
                <th width="14%">Bus Name</th>
                    <th width="7%">Seat</th>
                    <th width="7%">Price</th>
                    <th width="8%">Seat Selection</th>
                    <th width="7%">Status</th>
          </tr>
                <?php
                while($tab=mysqli_fetch_assoc($ans)) 
                {
                  echo "<tr>
                 <td>".$tab['Busno']."</td>
                  <td>".$tab['Busname']."</td>
                  <td>".$tab['Seat']."</td>
                  <td>".$tab['Price']."</td>
                  <td><a href='seat.php?sn==$tab[SN]'><button>Select Seat</button></a></td>
                  <td>".$tab['Status']."</td>

                
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
</html>

<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $from=$_POST['start'];
    $to=$_POST['destination'];
    $time=$_POST['cal'];
    $ans=mysqli_query($conn,"INSERT INTO ticket(DepartureLocation,ArrivalLocation,DepartTime) VALUES('$from','$to','$time')") 
    or die(mysqli_error($conn));
}
?>
