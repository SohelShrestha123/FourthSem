<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css?v=<?php echo time(); ?>">
</head>
<body>

<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="home.php">Back</a></li>
</ul>
</nav>
    
    <div class="inbox">
        <img src="Picture/Avatar.jpg" class="person">
        <h1>Login Here</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" name="submit" value="Login"><br>
            <a href="#">Lost your password?</a><br>
            <a href="form.php">Don't have an account?</a>

        </form>
    </div>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit'])){
$user=$_POST['username'];
$pass=$_POST['password'];

$passenger=mysqli_query($conn,"SELECT * FROM passenger WHERE Username='$user' AND Password=md5('$pass')");
$admin=mysqli_query($conn,"SELECT * FROM chief WHERE Username='$user' AND Password=md5('$pass')");
$driver=mysqli_query($conn,"SELECT * FROM driver WHERE Username='$user' AND Password=md5('$pass')");

$passengerAcc=mysqli_fetch_assoc($passenger);
$adminAcc=mysqli_fetch_assoc($admin);
$driverAcc=mysqli_fetch_assoc($driver);

if(is_array($passengerAcc) && !empty($passengerAcc)){
$_SESSION['valid']=$passengerAcc['username'];
$_SESSION['sn']=$passengerAcc['SN'];
header("Location:user.php");
}

else if(is_array($adminAcc) && !empty($adminAcc)){
    $_SESSION['valid']=$adminAcc['username'];
    $_SESSION['sn']=$adminAcc['Admin Id'];
    header("Location:admin.php");
    }


else if(is_array($driverAcc) && !empty($driverAcc)){
    $_SESSION['valid']=$driverAcc['username'];
    $_SESSION['sn']=$driverAcc['Admin Id'];
    header("Location:driver.php");
    }

else{
    echo'<script>alert("It is invalid");</script>';
}
    
}
?>

