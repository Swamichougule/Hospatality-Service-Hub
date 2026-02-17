<?php
session_start();
include("connectmaid.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $size = mysqli_real_escape_string($conn, $_POST['size']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    
    // Insert request into the database
    $sql = "INSERT INTO requests (location, size, details) VALUES ('$location', $size, '$details')";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect to the maids list page
        header("Location: maids_list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
