<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirm Your Payment</title>
</head>
<body>

<?php
// Get the booking ID
$booking_id = $_GET['id'];

// Retrieve booking details from database
$sql = "SELECT * FROM bookings WHERE id = $booking_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the selected row
    $row = $result->fetch_assoc();
    echo "<h2>Confirm Your Payment</h2>";
    echo "Tasker Name: " . $row['tasker_name'] . "<br>";
    echo "Your Name: " . $row['user_name'] . "<br>";
    echo "Email: " . $row['user_email'] . "<br>";
    echo "Phone Number: " . $row['user_phone'] . "<br>";
    echo "Service Date: " . $row['service_date'] . "<br>";
    echo "Service Time: " . $row['service_time'] . "<br>";
    echo "Price: ₹" . $row['price'] . "<br><br>";

    echo "<a href='payment.php?id=$booking_id'>Confirm & Proceed to Payment</a>";
} else {
    echo "No booking found!";
}
?>

</body>
</html>
