<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>
<nav class="navigation">
            <img class="logo" src="logo.jpg">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a class="active"  href="#">Contact Us</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
         </nav>
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>Send us a message</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>

                        <div class="form-group">
                            <textarea name="message" placeholder="Your Messege"></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3>Contatct Information</h3>
                    <p><i class="fas fa-phone"></i>+977 98********</p>
                    <p><i class="fas fa-envelope"></i>someone@example.com</p>
                    <p><i class="fas fa-map-marker-alt "></i>123 Street, City, Country</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>