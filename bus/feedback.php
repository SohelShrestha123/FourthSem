<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body>
    <section>
    <nav class="navigation">
            <img class="logo" src="logo.jpg">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a class="active"  href="#">Feedback</a></li>
            </ul>
         </nav>
</section>
    <div class="container">
        <form>
            <h1>Give Your Feedback</h1>
            <div class="id">
                <input type="text" placeholder="Full name">
                <i class="far fa-user"></i>
            </div>
            <div class="id">
                <input type="email" placeholder="Email address">
                <i class="far fa-envelope"></i>
            </div>
            <textarea cols="15" rows="5" placeholder="Enter your opinions here..."></textarea>
            <button>Send</button>
        </form>
    </div>
</body>
</html>