<!DOCTYPE html>
<html>
<head>
    <title>Poultry Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #009688;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .menu li {
            margin-right: 20px;
        }

        .menu li:last-child {
            margin-right: 0;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .menu a:hover {
            color: #007b6b;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        /* Add more styles for other sections as needed */

    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="add_bird.php">Add Bird Data</a></li>
                <li><a href="track_feed.php">Track Feed Consumption</a></li>
                <li><a href="egg_production_chart.php">Egg Production Chart</a></li>
                <li><a href="record_sales.php">Record Sales</a></li>
                <li><a href="view_sales.php">View Sales</a></li>
                <li><a href="add_egg.php">Add Egg Data</a></li>
                <li><a href="reports.php">Reports</a></li>
                <!-- Add more navigation links here -->
            </ul>
        </nav>
    </header>
    <!-- Include any necessary JavaScript files -->
    <script src="assets/js/script.js"></script>
</body>
</html>



