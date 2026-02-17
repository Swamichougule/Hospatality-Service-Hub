<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "decorator_booking";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $location = $_POST['location'];
    $task_size = $_POST['task_size'];
    $additional_details = $_POST['additional_details'];
    $tasker_name = $_POST['tasker_name'];
    $price = $_POST['price'];

    // Insert the data into the tasks table
    $sql = "INSERT INTO tasks (user_name, location, task_size, additional_details, tasker_name, price)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssd", $user_name, $location, $task_size, $additional_details, $tasker_name, $price);

    if ($stmt->execute()) {
        echo "Task details saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "decorator_booking";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $location = $_POST['location'];
    $task_size = $_POST['task_size'];
    $additional_details = $_POST['additional_details'];
    $tasker_name = $_POST['tasker_name'];
    $price = $_POST['price'];

    // Insert the data into the tasks table
    $sql = "INSERT INTO tasks (user_name, location, task_size, additional_details, tasker_name, price)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssd", $user_name, $location, $task_size, $additional_details, $tasker_name, $price);

    if ($stmt->execute()) {
        echo "Task details saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
