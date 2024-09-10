<?php
include "connection.php";
$a=$_GET['sn'];

$query="DELETE FROM passenger WHERE SN='$a'";
$data=mysqli_query($conn,$query);
echo '<script>confirm("do you want to delete record")</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <link rel="stylesheet" href="delete.css?v=<?php echo time(); ?>">
</head>
<body>

    <div class="message-container">
        <div class="message">
            <h1>Success!</h1>
            <p>Data has been removed successfully.</p>
        </div>

        <div class="button">
        <a href="result.php"><button>Goto Table</button></a>
</div>
    </div>

    </body>
</html>