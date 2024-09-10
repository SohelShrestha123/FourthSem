<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $payment_method = $_POST['pay'];

    // Process the payment method (this is a placeholder for actual payment processing logic)
    switch ($payment_method) {
        case 'Esewa':
            echo '<script>alert("You selected Esewa.");</script>';
            // Add your payment processing logic here
            break;
        case 'Khalti':
            echo '<script>alert("You selected Khalti.");</script>';
            // Add your payment processing logic here
            break;
        case 'IME Pay':
            echo '<script>alert("You selected IME Pay.");</script>';
            // Add your payment processing logic here
            break;
        default:
            echo "Invalid payment method selected.";
    }
} else {
    echo "Invalid request.";
}
?>