<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }
        .tab-content {
            background-color: #333;
            color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Admin Dashboard</h2>
        
        <!-- Tabs for Navigation -->
        <ul class="nav nav-tabs" id="adminTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="task-details-tab" data-bs-toggle="tab" data-bs-target="#task-details" type="button" role="tab" aria-controls="task-details" aria-selected="true">Decorator info</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cook-info-tab" data-bs-toggle="tab" data-bs-target="#cook-info" type="button" role="tab" aria-controls="cook-info" aria-selected="false">Cook Info</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="other-info-tab" data-bs-toggle="tab" data-bs-target="#other-info" type="button" role="tab" aria-controls="other-info" aria-selected="false">Other Info</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="adminTabsContent">
            <!-- Task Details Tab -->
            <div class="tab-pane fade show active" id="task-details" role="tabpanel" aria-labelledby="task-details-tab">
                <h3>Task Details</h3>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Location</th>
                            <th>Task Size</th>
                            <th>Additional Details</th>
                            <th>Tasker Name</th>
                            <th>Price</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection
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

                        // Fetch task details
                        $sql = "SELECT * FROM tasks ORDER BY created_at DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['user_name']}</td>
                                        <td>{$row['location']}</td>
                                        <td>{$row['task_size']}</td>
                                        <td>{$row['additional_details']}</td>
                                        <td>{$row['tasker_name']}</td>
                                        <td>{$row['price']}</td>
                                        <td>{$row['created_at']}</td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No task details found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

<!-- Cook Info Tab -->
<div class="tab-pane fade" id="cook-info" role="tabpanel" aria-labelledby="cook-info-tab">
    <h3>Cook Information</h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Tasker ID</th>
                <th>Tasker Name</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone</th>
                <th>Service Date</th>
                <th>Service Time</th>
                <th>Price</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // New database connection for service_bookings
            $database = "service_bookings";
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch tasker details from the bookings table
            $sql = "SELECT * FROM bookings ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['tasker_name']}</td>
                            <td>{$row['user_name']}</td>
                            <td>{$row['user_email']}</td>
                            <td>{$row['user_phone']}</td>
                            <td>{$row['service_date']}</td>
                            <td>{$row['service_time']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['created_at']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No cook information found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

            <!-- Other Info Tab -->
            <div class="tab-pane fade" id="other-info" role="tabpanel" aria-labelledby="other-info-tab">
                <h3>Other Information</h3>
                <p>This section can be used to add other information as needed.</p>
            </div>
        </div>
    </div>

<div class="tab-pane fade" id="cook-info" role="tabpanel" aria-labelledby="cook-info-tab">
    <h3>Cook Information</h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Tasker ID</th>
                <th>Tasker Name</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone</th>
                <th>Service Date</th>
                <th>Service Time</th>
                <th>Price</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // New database connection for service_bookings
            $database = "service_bookings";
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch tasker details from the bookings table
            $sql = "SELECT * FROM bookings ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['tasker_name']}</td>
                            <td>{$row['user_name']}</td>
                            <td>{$row['user_email']}</td>
                            <td>{$row['user_phone']}</td>
                            <td>{$row['service_date']}</td>
                            <td>{$row['service_time']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['created_at']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No cook information found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

            <!-- Other Info Tab -->
            <div class="tab-pane fade" id="other-info" role="tabpanel" aria-labelledby="other-info-tab">
                <h3>Other Information</h3>
                <p>This section can be used to add other information as needed.</p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
