<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Driver</title>
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
        .form-control, .form-select {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Your Driver</h1>
        <form action="confirm_booking.php" method="POST">
            <div class="mb-3">
                <label for="driverName" class="form-label">Selected Driver:</label>
                <input type="text" id="driverName" class="form-control" name="driver_name" value="<?php echo htmlspecialchars($_POST['tasker_name']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="driverPrice" class="form-label">Price (₹/hr):</label>
                <input type="text" id="driverPrice" class="form-control" name="driver_price" value="<?php echo htmlspecialchars($_POST['price']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="userName" class="form-label">Your Name:</label>
                <input type="text" id="userName" class="form-control" name="user_name" required>
            </div>
            <div class="mb-3">
                <label for="taskDate" class="form-label">Booking Date:</label>
                <input type="date" id="taskDate" class="form-control" name="booking_date" required>
            </div>
            <div class="mb-3">
                <label for="taskTime" class="form-label">Booking Time:</label>
                <input type="time" id="taskTime" class="form-control" name="booking_time" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" id="address" class="form-control" name="address" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration:</label>
                <select id="duration" class="form-select" name="duration" required>
                    <option value="1 hour">1 Hour</option>
                    <option value="2-3 hours">2-3 Hours</option>
                    <option value="4 hours">4 Hours</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Confirm Booking</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
