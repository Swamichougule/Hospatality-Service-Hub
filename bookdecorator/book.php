<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        .form-control, .form-select {
            background-color: #333;
            color: #ffffff;
            border: 1px solid #444;
        }
        .form-control:focus, .form-select:focus {
            background-color: #444;
        }
        label {
            margin-top: 15px;
        }
        .btn-submit {
            background-color: #28a745;
            border: none;
            margin-top: 20px;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Task Details</h2>
        
        <!-- Fetch the tasker name and price using PHP -->
        <?php
            $tasker_name = isset($_POST['tasker_name']) ? $_POST['tasker_name'] : 'Unknown';
            $price = isset($_POST['price']) ? $_POST['price'] : '0.00';
        ?>
        
        <form action="confirm.php" method="POST">
            <!-- Hidden fields for tasker details from previous page -->
            <input type="hidden" name="tasker_name" value="<?php echo htmlspecialchars($tasker_name); ?>">
            <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">

            <div class="mb-3">
                <label for="user_name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Task Location Address</label>
                <textarea class="form-control" id="location" name="location" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="task_size" class="form-label">Task Size</label>
                <select class="form-select" id="task_size" name="task_size" required>
                    <option value="" disabled selected>Select Task Size</option>
                    <option value="small">Small - 1 hour</option>
                    <option value="medium">Medium - 2-3 hours</option>
                    <option value="large">Large - 4 hours</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="additional_details" class="form-label">Additional Details</label>
                <textarea class="form-control" id="additional_details" name="additional_details" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-submit w-100">Submit & Confirm</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
