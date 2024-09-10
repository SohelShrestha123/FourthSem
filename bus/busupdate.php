<?php
include "connection.php";
$a=$_GET['sn'];
$query="SELECT * FROM bus where Busno='$a'";
$ans=mysqli_query($conn,$query);
$number=mysqli_num_rows($ans);
$tab=mysqli_fetch_assoc($ans);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bus Info</title>
    <link rel="stylesheet" type="text/css" href="busupdate.css?v=<?php echo time(); ?>">
</head>
<body>
<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="busdetail.php">Goto Bus Table</a></li>
</ul>
</nav>
    
    <div class="copy">
        <h1>Update Bus Details</h1>

        <form action="#" method="post">
        <div class="data">
            <label for="fname">Bus name:</label>
            <input type="text" value="<?php echo $tab['Busname']?>" id ="bname" name="bname" placeholder="Bus Name" required><br>
            </div>

            <div class="data">
            <label for="lname">Bus no:</label>
            <input type="text" value="<?php echo $tab['Busno']?>" id="busno" name="busno" placeholder="Bus No" required><br>
            </div>

            <div class="data">
            <label for="uname">Seat:</label>
            <input type="text" value="<?php echo $tab['Seat']?>" id="seat" name="seat" placeholder="Seat" required><br>
            </div>

            <div class="data">
            <label for="uname">Price:</label>
            <input type="text" value="<?php echo $tab['Price']?>" id="cost" name="cost" placeholder="Price" required><br>
            </div>

            
            <div class="data">
            <button type="submit" name="change">Change</button>
            <button type="reset">Cancel</button>
            </div>

        </form>
    </div>
    
</body>
</html>



<?php
if(isset($_POST['change'])){
    $busno=$_POST['busno'];
    $bname=$_POST['bname'];
    $seat=$_POST['seat'];
    $cost=$_POST['cost'];

    $ans=mysqli_query($conn,"UPDATE bus SET BusNo='$busno',Busname='$bname',Seat='$seat',Price='$cost' WHERE SN='$a'");
    echo '<script>alert("Bus details has been updated.");</script>';
}
?>