<?php
session_start();
include("connect.php");

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/login/careconnect/user/userlogin/index.php");
    exit();
}

// Fetch user data from the database
$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_array($query);

if (!$user) {
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .nav-buttons {
            margin-bottom: 20px;
            text-align: center;
        }
        .nav-buttons button {
            font-size: 16px;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            transition: background 0.3s;
        }
        .nav-buttons button:hover {
            background: #0056b3;
        }
        .content {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: none;
        }
        .content.active {
            display: block;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        strong {
            font-weight: bold;
        }
    </style>
    <script>
        function showContent(id) {
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }
    </script>
</head>
<body>
    <header class="header">
        <h1>Hospitality & Services Hub</h1>
    </header>
    <div class="container">
        <div class="nav-buttons">
            <button onclick="showContent('profile')">Profile</button>
            <button onclick="showContent('passwords')">Passwords</button>
            <button onclick="showContent('billing')">Billing Info</button>
            <button onclick="showContent('delete')">Delete Account</button>
        </div>
        <div id="profile" class="content active">
            <h1>Profile</h1>
            <p><strong>First Name:</strong> <?php echo htmlspecialchars($user['fname']); ?></p>
            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($user['lname']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>
        <div id="passwords" class="content">
            <h1>Change Password</h1>
            <!-- Content for changing password -->
            <p>Form for changing password goes here.</p>
        </div>
        <div id="billing" class="content">
            <h1>Billing Info</h1>
            <!-- Content for billing information -->
            <p>Billing information goes here.</p>
        </div>
        <div id="delete" class="content">
            <h1>Delete Account</h1>
            <!-- Content for account deletion -->
            <p>Form or instructions for deleting the account go here.</p>
        </div>
    </div>
    
</body>
</html>
