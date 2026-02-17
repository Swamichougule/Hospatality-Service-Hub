<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="styles2.css"> <!-- Linking the CSS file -->
</head>
<body>
    <div class="booking-container">
        <h2>Book Your Service</h2>
        <?php
        // Capture the tasker name and price from the POST request
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tasker_name = $_POST['tasker_name'];  // Tasker name from previous page
            $price = $_POST['price'];  // Price from previous page

            // Show the form with the captured tasker name and price
            echo '
            <form method="POST" action="book.php" class="booking-form">
                <label>Tasker Name:</label>
                <input type="text" name="tasker_name" value="' . $tasker_name . '" readonly>

                <label>Your Name:</label>
                <input type="text" name="user_name" required>

                <label>Email:</label>
                <input type="email" name="user_email" required>

                <label>Phone Number:</label>
                <input type="text" name="user_phone" required>

                <label>Date:</label>
                <input type="date" name="service_date" required>

                <label>Time:</label>
                <input type="time" name="service_time" required>

                <label>Price:</label>
                <input type="text" name="price" value="' . $price . '" readonly>

                <button type="submit">Proceed</button>
            </form>
            ';
        }
        // If the form is submitted, handle the booking and redirect to confirm.php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_name'])) {
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_phone = $_POST['user_phone'];
            $service_date = $_POST['service_date'];
            $service_time = $_POST['service_time'];

            $sql = "INSERT INTO bookings (tasker_name, user_name, user_email, user_phone, service_date, service_time, price)
                    VALUES ('$tasker_name', '$user_name', '$user_email', '$user_phone', '$service_date', '$service_time', '$price')";

            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                header("Location: confirm.php?id=$last_id");
                exit();
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
