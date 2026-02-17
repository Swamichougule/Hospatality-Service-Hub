<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tasker_name = $_POST['tasker_name'];
    $task_date = $_POST['task_date'];
    $task_time = $_POST['task_time'];
    $task_location = $_POST['task_location'];
    $task_details = $_POST['task_details'];
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'electrician_booking');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL Insert Statement
    $sql = "INSERT INTO tasks (tasker_name, task_date, task_time, location, task_detailes, user_name, user_phone) VALUES ('$tasker_name', '$task_date', '$task_time', '$task_location', '$task_details', '$user_name', '$user_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Task booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
