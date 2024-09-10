<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking System</title>
    <link rel="stylesheet" href="seat.css?v=<?php echo time(); ?>">
    
</head>
<body>
    <div class="container">
        <h1>Seat Booking System</h1>
        <form action="payment.php" method="post">
            <div class="seats">
                <div class="row">
                    <div class="seat" id="A1">1</div>
                    <div class="seat" id="A2">2</div>
                    <div class="seat" id="A3">5</div>
                    <div class="seat" id="A4">6</div>
                    <div class="seat" id="A5">9</div>
                    <div class="seat" id="A6">10</div>
                    <div class="seat" id="A7">13</div>
                    <div class="seat" id="A8">14</div>
                    <div class="seat" id="A9">17</div>
                    <div class="seat" id="A10">18</div>
                    <div class="seat" id="A11">21</div>
                    <div class="seat" id="A12">22</div>
                    <div class="seat" id="A13">25</div>
                    <div class="seat" id="A14">26</div>
                    <div class="seat" id="A15">29</div>
                    <div class="seat" id="A16">30</div>
                    <div class="seat" id="A17">33</div>
                    <div class="seat" id="A18">34</div>
                </div>

                <div class="row">
                    <div class="seat" id="C">35</div>
                 </div>

                <div class="row">
                    <div class="seat" id="B1">3</div>
                    <div class="seat" id="B2">4</div>
                    <div class="seat" id="B3">7</div>
                    <div class="seat" id="B4">8</div>
                    <div class="seat" id="B5">11</div>
                    <div class="seat" id="B6">12</div>
                    <div class="seat" id="B7">15</div>
                    <div class="seat" id="B8">16</div>
                    <div class="seat" id="B9">19</div>
                    <div class="seat" id="B10">20</div>
                    <div class="seat" id="B11">23</div>
                    <div class="seat" id="B13">24</div>
                    <div class="seat" id="B13">27</div>
                    <div class="seat" id="B14">28</div>
                    <div class="seat" id="B15">31</div>
                    <div class="seat" id="B16">32</div>
                    <div class="seat" id="B17">36</div>
                    <div class="seat" id="B18">37</div>
                </div>  
            </div>
            <input type="hidden" name="seat" id="seatinput">
            <button type="submit">Book Seat</button>
        </form>
    </div>
    <script src="seat.js"></script>
</body>
</html>