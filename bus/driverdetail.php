<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="result.css?v=<?php echo time(); ?>">
    <title>Data Table</title>
    
</head>
<body>

<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="admin.php">Go To AdminPanel</a></li>
</ul>
</nav>

<?php
include "connection.php";
$query="SELECT * FROM driver";
$ans=mysqli_query($conn,$query);

$number=mysqli_num_rows($ans);
if($number!=0){
    ?>
    <h2 align="center">Data of Driver</h2>
    <center>
    <table border="2px" cellspacing="6" width="95%">
        <tr>
        <th width="8%">Driver Id</th>
        <th width="10%">First Name</th>
        <th  width="10%">Last Name</th>
        <th  width="10%">User Name</th>
        <th  width="14%">Address</th>
        <th  width="14%">Email</th>
        <th  width="10%">Phone Number</th> 
        <th  width="5%">Gender</th>
        <th  width="14%">Operations</th>

</tr>
    <?php
  while($tab=mysqli_fetch_assoc($ans))
  {
    echo "<tr>
    <td>".$tab['DriverId']."</td>
    <td>".$tab['Firstname']."</td>
    <td>".$tab['Lastname']."</td>
    <td>".$tab['Username']."</td>
    <td>".$tab['Address']."</td>
    <td>".$tab['Email']."</td>
    <td>".$tab['Phone_No']."</td>
    <td>".$tab['Gender']."</td>

    <td><a href='driverupdate.php?id=$tab[DriverId]' ><button class='update'>Edit</button></a>
    <a href='driverdelete.php?id=$tab[DriverId]' ><button class='delete' onclick='return checkdelete()'>Remove</button></a></td>

</tr>";
  }
}

else{
    echo"No records found";
}
?>
</table>
</center>

<script>
  function checkdate(){
   return alert('Are you sure you want to delete this record?');
  }
  </script>
  </body>
</html>



