<?php
include "connection.php";
$a=$_GET['sn'];

$query="DELETE FROM bus  WHERE SN='$a'";
$data=mysqli_query($conn,$query);
echo '<script>alert("Bus details has been removed.");</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <link rel="stylesheet" href="busdelete.css">
</head>
<body>
    <div class="message-container">
        <div class="message">
            <h1>Congratulation!</h1>
            <p>Bus data has been removed.</p>
            <div class="button">
        <a href="busdetail.php"><button>Goto Bus Table</button></a>
</div>
        </div>

    </div>
</body>
</html>
