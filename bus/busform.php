<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Register</title>
    <link rel="stylesheet" type="text/css" href="busform.css?v=<?php echo time(); ?>">
</head>
<body>
<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="driver.php">Back</a></li>
</ul>
</nav>

    <div class="copy">
        <h1>Bus Details</h1>

        <form action="busregister.php" method="post">

            

            <div class="data">
            <label for="fname">Bus name:</label>
            <input type="text" id ="bname" name="bname" placeholder="Bus Name" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="lname">Bus no:</label>
            <input type="text"  id="busno" name="busno" placeholder="Bus No"  autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="uname">Seat:</label>
            <input type="text" id="seat" name="seat" placeholder="Seat"  autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="uname">Price:</label>
            <input type="text" id="cost" name="cost" placeholder="Price" autocomplete="off" required><br>
            </div>

            <div class="data">
            <button type="submit">Register</button>
            <button type="reset">Cancel</button>
            </div>

        </form>
    </div>
</body>
</html>

