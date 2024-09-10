

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method Selection</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container">
        <h1>Select Payment Method</h1>
        <form action="process_payment.php" method="post">
            <div class="payment-methods">
                <div class="payment-method">
                    <input type="radio" id="esewa" name="pay" value="Esewa">
                    <label>Esewa</label>
                </div>
                <div class="payment-method">
                    <input type="radio" id="khalti" name="pay" value="Khalti">
                    <label>Khalti</label>
                </div>
                <div class="payment-method">
                    <input type="radio" id="ime" name="pay" value="IME Pay">
                    <label>IME Pay</label>
                </div>
            </div>
            <button type="submit">Proceed to Pay</button>
        </form>
    </div>
</body>
</html>