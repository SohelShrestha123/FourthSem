<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <link rel="stylesheet" href="driverregister.css">
</head>
<body>

    <div class="message-container">
        <div class="message">
            <h1>Success!</h1>
            <p>You have been registered successfully.</p>
        </div>

        <div class="button">
        <a href="login.php"><button>Goto Login</button></a>
</div>
    </div>


<?php
include "connection.php";
$first=$_POST["fname"];
$last=$_POST["lname"];
$userName=$_POST["uname"];
$place=$_POST["add"];
$email=$_POST["email"];
$phone=$_POST["contact"];
$new=$_POST["npassword"];
$cpass=$_POST["cpassword"];
$gender=$_POST["gen"];





$ans=mysqli_query($conn,"INSERT INTO driver(Firstname,Lastname,Username,Address,Email,Phone_No,New_Password,Password,Gender) VALUES('$first','$last','$userName','$place','$email','$phone',md5('$new'),md5('$cpass'),'$gender')") 
or die(mysqli_error($conn));
echo '<script>alert("You are registerd.")</script>';
?>

</body>
</html>

<?php
include "connection.php";
function createUser($email)
{
     $sql = "SELECT * FROM driver WHERE email='$email'" ;

     $result = mysql_query( $sql ) ;

     if( mysql_num_rows( $result ) > 0 )
     {
 die( "There is already a user with that email!" ) ;
     }
    }
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
    echo '<script>alert("It is invalid");</script>';
}

?>