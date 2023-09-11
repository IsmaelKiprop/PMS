<?php
session_start();

if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page if not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry Management System</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Include any necessary libraries for data visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Welcome to the Poultry Management System</h1>
        
        <!-- Overview Section -->
        <div class="overview">
            <h2>Overview</h2>
            <div class="overview-info">
                <p>Total Birds: 500</p>
                <p>Eggs in Stock: 10,000</p>
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="quick-links">
            <h2>Quick Links</h2>
            <a href="add_bird.php">Add Bird Data</a>
            <a href="track_feed.php">Track Feed Consumption</a>
            <a href="manage_employees.php">Manage Employees</a>
            <a href="record_sales.php">Record Sales</a>
        </div>

        <!-- Graphical Data Visualization Section -->
       <div class="data-visualization">
            <h2>Data Visualization</h2>
            <!-- Include a canvas element for the chart -->
            <canvas id="eggProductionChart" width="400" height="200"></canvas>
            
            <!-- Add a button to update the chart -->
            <button id="updateChartButton">Update Chart</button>
        </div>
    </div>

        <!-- Recent Sales Section -->
        <div class="recent-sales">
            <h2>Recent Sales</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Eggs</td>
                        <td>200</td>
                        <td>$400.00</td>
                    </tr>
                    <!-- Add more sales records here -->
                </tbody>
            </table>
        </div>

        <!-- Notifications Section -->
        <div id="notifications" class="notifications">
            <h2>Notifications</h2>
            <ul id="notification-list">
            <!-- Notifications will be added here dynamically -->
            </ul>
        </div>
    </div>

    <script src="assets/js/notifications.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/chart.js"></script>
</body>
</html>
