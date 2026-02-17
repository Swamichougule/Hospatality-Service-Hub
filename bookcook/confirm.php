<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Your Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        h2 {
            color: #333;
            font-size: 1.8em;
            margin-bottom: 15px;
        }

        p {
            color: #666;
            line-height: 1.6;
            font-size: 1em;
            margin: 10px 0;
        }

        .booking-info {
            text-align: left;
            margin-top: 20px;
            line-height: 1.6;
        }

        .booking-info span {
            font-weight: bold;
        }

        .pay-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background-color: #28a745;
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pay-button:hover {
            background-color: #218838;
        }

        .no-booking {
            color: #e74c3c;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
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
            echo "<div class='booking-info'>";
            echo "<p><span>Tasker Name:</span> " . htmlspecialchars($row['tasker_name']) . "</p>";
            echo "<p><span>Your Name:</span> " . htmlspecialchars($row['user_name']) . "</p>";
            echo "<p><span>Email:</span> " . htmlspecialchars($row['user_email']) . "</p>";
            echo "<p><span>Phone Number:</span> " . htmlspecialchars($row['user_phone']) . "</p>";
            echo "<p><span>Service Date:</span> " . htmlspecialchars($row['service_date']) . "</p>";
            echo "<p><span>Service Time:</span> " . htmlspecialchars($row['service_time']) . "</p>";
            echo "<p><span>Price:</span> ₹" . htmlspecialchars($row['price']) . "</p>";
            echo "</div>";
            echo "<a class='pay-button' href='https://razorpay.me/@jineshshaileshjain' target='_blank'>Confirm & Proceed to Payment</a>";
        } else {
            echo "<p class='no-booking'>No booking found!</p>";
        }
        ?>
    </div>
</body>
</html>
