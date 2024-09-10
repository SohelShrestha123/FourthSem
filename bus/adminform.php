<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin Account</title>
    <link rel="stylesheet" type="text/css" href="adminform.css?v=<?php echo time(); ?>">
    <link rel="script" type="text/javascript" href="form.js">
</head>
<body>
<nav class="navigation">
    <h1>Subhayatra</h1>
    <ul>
    <li><a class="active" href="home.php">Back</a></li>
</ul>
</nav>
    
    <div class="copy">
        <h2>Register for admin</h2>

        <form action="adminregister.php" method="post">
            <div class="data">
            <label for="fname">Firstname:</label>
            <input type="text" id ="fname" name="fname" placeholder="First Name" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="lname">Lastname:</label>
            <input type="text"  id="lname" name="lname" placeholder="Last Name" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" placeholder="User Name" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="uname">Address:</label>
            <input type="text" id="add" name="add" placeholder="Address" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="contact">Phone_No:</label>
            <input type="text" id="contact" name="contact" placeholder="Mobile No" autocomplete="off" required><br>
            </div>

            <div class="data">
            <label for="npassword">New Password:</label>
            <input type="password" name="npassword" placeholder="New Password" required><br>
            </div>

            <div class="data">
            <label for="cpassword">Confirm Password:</label>
            <input type="password"  name="cpassword" placeholder="Confirm Password" required><br>
            </div>

            <div class="data">
            <label for="gender">Gender:</label>
            <select name="gen" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            </div>


            <div class="data">
            <button type="submit" onclick="validation()">Register</button>
            <button type="reset">Cancel</button>
            </div>

        </form>
    </div>
</body>
</html>