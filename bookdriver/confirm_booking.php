<?php
// Database connection
$servername = "localhost"; // Usually localhost
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP, usually empty
$dbname = "booking_driver"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $driverName = htmlspecialchars($_POST['driver_name']);
    $driverPrice = htmlspecialchars($_POST['driver_price']);
    $userName = htmlspecialchars($_POST['user_name']);
    $bookingDate = htmlspecialchars($_POST['booking_date']);
    $bookingTime = htmlspecialchars($_POST['booking_time']);
    $address = htmlspecialchars($_POST['address']);
    $duration = htmlspecialchars($_POST['duration']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookings (driver_name, driver_price, user_name, booking_date, booking_time, address, duration) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdsssss", $driverName, $driverPrice, $userName, $bookingDate, $bookingTime, $address, $duration);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booking recorded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1a1a1a;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/myproject/payment/index.html">Booking Confirmation</h1>
        <p><strong>Driver Name:</strong> <?php echo $driverName; ?></p>
        <p><strong>Price:</strong> <?php echo $driverPrice; ?></p>
        <p><strong>Your Name:</strong> <?php echo $userName; ?></p>
        <p><strong>Booking Date:</strong> <?php echo $bookingDate; ?></p>
        <p><strong>Booking Time:</strong> <?php echo $bookingTime; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Duration:</strong> <?php echo $duration; ?></p>
        <button onclick="window.history.back();" class="btn btn-primary">Go Back</button>
    </div>
</body>
</html>
