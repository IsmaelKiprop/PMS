<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry Management System - Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Include your CSS file for styling -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include necessary libraries for data visualization -->
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <a href="logout.php">Logout</a>
        <h1>Welcome to the Poultry Management System Dashboard</h1>
        
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
            <!-- Add more quick links as needed -->
        </div>

        <!-- Graphical Data Visualization Section -->
        <div class="data-visualization">
            <h2>Data Visualization</h2>
            <!-- Include a canvas element for the chart -->
            <canvas id="eggProductionChart" width="400" height="200"></canvas>
            
            <!-- Add a button to update the chart -->
            <button id="updateChartButton">Update Chart</button>
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
        <div class="notifications">
            <h2>Notifications</h2>
            <ul>
                <li>Low feed levels. Consider restocking.</li>
                <li>Employee salary payments due in 3 days.</li>
                <!-- Add more notifications here -->
            </ul>
        </div>
    </div>

    <script src="assets/js/script.js"></script> <!-- Include your JavaScript file for interactivity -->
</body>
</html>
