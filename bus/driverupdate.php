<?php
include "connection.php";
$a=$_GET['sn'];
$query="SELECT * FROM driver where DriverId='$a'";
$ans=mysqli_query($conn,$query);
$number=mysqli_num_rows($ans);
$tab=mysqli_fetch_assoc($ans);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info</title>
    <link rel="stylesheet" type="text/css" href="driverupdate.css?v=<?php echo time(); ?>">
    <link rel="script" type="text/javascript" href="validate.js">
</head>
<body>
<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="result.php">Back</a></li>
</ul>
</nav>

    <div class="copy">
        <h1>Update Your Details</h1>

        <form action="#" method="post">
            <div class="data">
            <label for="fname">Firstname:</label>
            <input type="text" value="<?php echo $tab['Firstname'];?>" id ="fname" name="fname" placeholder="First Name" required><br>
            </div>

            <div class="data">
            <label for="lname">Lastname:</label>
            <input type="text" value="<?php echo $tab['Lastname'];?>" id="lname" name="lname" placeholder="Last Name" required><br>
            </div>

            <div class="data">
            <label for="uname">Username:</label>
            <input type="text" value="<?php echo $tab['Username'];?>" id="uname" name="uname" placeholder="User Name" required><br>
            </div>

            <div class="data">
            <label for="uname">Address:</label>
            <input type="text" value="<?php echo $tab['Address'];?>" id="add" name="add" placeholder="Address" required><br>
            </div>

            <div class="data">
            <label for="email">Email:</label>
            <input type="email" value="<?php echo $tab['Email'];?>" id="email" name="email" placeholder="Email" required><br>
            </div>

            <div class="data">
            <label for="contact">Phone_No:</label>
            <input type="text" value="<?php echo $tab['Phone_No'];?>" id="contact" name="contact" placeholder="Mobile No" required><br>
            </div>

            <div class="data">
            <label for="gender">Gender:</label>
            <select  name="gen" required>
                <option value="">Select</option>

                <option value="Male" <?php 
                if($tab['Gender']=='Male')
                {
                    echo "Selected";
                }
                ?>
                >
                    Male</option>

                <option value="Female"<?php 
                if($tab['Gender']=='Female')
                {
                    echo "Selected";
                }
                ?>
                >
                    Female</option>
            </select>
            <br>
            </div>

            <div class="data">
            <button type="submit" name="replace" onclick="validation()">Change</button>
            <button type="reset">Cancel</button>
            </div>

        </form>
    </div>
    
</body>
</html>



<?php
error_reporting(E_ERROR|E_PARSE);

if(isset($_POST['replace'])){
$first=$_POST['fname'];
$last=$_POST['lname'];
$userName=$_POST['uname'];
$place=$_POST['add'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$new=$_POST['npassword'];
$cpass=$_POST['cpassword'];
$gender=$_POST['gen'];

$ans=mysqli_query($conn,"UPDATE driver SET Firstname='$first' ,Lastname='$last',Username='$userName',Address='$place',Email='$email',
Phone_No='$phone',New_Password=md5('$new'),Password=md5('$cpass'),Gender='$gender' WHERE DriverId='$a'");
echo '<script>alert("Data has been updated");</script>';
}
?>

