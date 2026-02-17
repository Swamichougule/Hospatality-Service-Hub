<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Task Details</h2>
    <form action="process_task.php" method="POST">
        <!-- Display selected electrician -->
        <div class="mb-3">
            <label for="tasker_name" class="form-label">Selected Electrician</label>
            <input type="text" class="form-control" id="tasker_name" name="tasker_name" value="<?php echo isset($_POST['tasker_name']) ? $_POST['tasker_name'] : ''; ?>" readonly>
        </div>
        
        <!-- Task Date -->
        <div class="mb-3">
            <label for="task_date" class="form-label">Task Date</label>
            <input type="date" class="form-control" id="task_date" name="task_date" required>
        </div>
        
        <!-- Task Time -->
        <div class="mb-3">
            <label for="task_time" class="form-label">Task Time</label>
            <input type="time" class="form-control" id="task_time" name="task_time" required>
        </div>
        
        <!-- Task Location -->
        <div class="mb-3">
            <label for="task_location" class="form-label">Task Location</label>
            <input type="text" class="form-control" id="task_location" name="task_location" placeholder="Enter location" required>
        </div>
        
        <!-- Task Details -->
        <div class="mb-3">
            <label for="task_details" class="form-label">Task Details</label>
            <textarea class="form-control" id="task_details" name="task_details" rows="3" placeholder="Describe the task" required></textarea>
        </div>
        
        <!-- User Name -->
        <div class="mb-3">
            <label for="user_name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
        </div>
        
        <!-- User Phone Number -->
        <div class="mb-3">
            <label for="user_phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="user_phone" name="user_phone" placeholder="Enter phone number" required>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
