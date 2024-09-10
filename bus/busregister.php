<?php
include "connection.php";
error_reporting(E_ERROR|E_PARSE);
$bus=$_POST["bname"];
$num=$_POST["busno"];
$seat=$_POST["seat"];
$price=$_POST["cost"];

$ans=mysqli_query($conn,"INSERT INTO bus(Busname,BusNo,Seat,Price) VALUES('$bus','$num','$seat','$price')") 
or die(mysqli_error($conn));
echo '<script>alert("You are registerd.");</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <link rel="stylesheet" href="busregister.css">
</head>
<body>
    <div class="message-container">
        <div class="message">
            <h1>Congratulation!</h1>
            <p>Bus details has been registered.</p>
        </div>
        <div class="button">
        <a href="busdetail.php"><button>Goto Bus Table</button></a>
</div>
    </div>
</body>
</html>