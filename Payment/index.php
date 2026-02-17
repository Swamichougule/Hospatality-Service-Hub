<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Payment Page</title>
</head>
<body>
    <div class="container">
        <h1>Make a Payment</h1>
        
        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "service_bookings";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get the booking ID (you can get this from a form, query parameter, session, etc.)
        $bookingId = 1; // Replace this with the actual booking ID you need

        // Query to get the price based on booking ID
        $sql = "SELECT price FROM bookings WHERE id = $bookingId";
        $result = $conn->query($sql);

        // Display the price if the booking exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $price = $row['price'];
            echo "<p>The amount to pay: <strong>₹" . htmlspecialchars($price) . "</strong></p>";
        } else {
            echo "<p>No booking found for this ID.</p>";
        }

        $conn->close();
        ?>

        <p>Once you are ready, click the button below to proceed with your payment.</p>
        <a id="pay-button" href="https://razorpay.me/@jineshshaileshjain" target="_blank">
            <button>Pay Now</button>
        </a>
    </div>
</body>
</html>
