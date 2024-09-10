<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>
    <link rel="stylesheet" type="text/css" href="book.css?v=<?php echo time(); ?>">
    <link rel="script" type="text/javascript" href="validate.js">
</head>
<body>
    
    <div class="copy">
        <h2>Booking</h2>

        <form action="selectbus.php" method="post" id="books">
            

            <div class="data">
            <label for="lname">Departure Location:</label>
            <select name="start" id="start" required>
               <option value="">Select a place</option>
               <option value="Kathmandu">Kathmandu</option>
               <option value="Pokhara">Pokhara</option>
               <option value="Jhapa">Jhapa</option>
               <option value="Biratnagar">Biratnagar</option>
               <option value="Chitwan">Chitwan</option>
               <option value="Butwal">Butwal</option>
               <option value="Kakarvita">Kakarvita</option>
               <option value="Kailali">Kailali</option>
            </select>
            </div>

            <div class="data">
            <label for="uname">Arrival Location:</label>
            <select name="destination" id="destination" required>
               <option value="">Select destination</option>
               <option value="Kathmandu">Kathmandu</option>
               <option value="Pokahar">Pokhara</option>
               <option value="Jhapa">Jhapa</option>
               <option value="Biratnagar">Biratnagar</option>
               <option value="Chitwan">Chitwan</option>
               <option value="Butwal">Butwal</option>
               <option value="Kakarvita">Kakarvita</option>
               <option value="Kailali">Kailali</option>
            </select>
         </div>

         <div class="data">
            <label for="fname">Departing Date:</label>
            <input type="date" id ="cal" name="cal" required><br>
            </div>

            <div class="data">
            <button type="submit">Search Bus</button>
            </div>
        </form>
    </div>
</body>
</html>