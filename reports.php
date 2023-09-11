<!-- reports.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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

        a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #009688;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #007366;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Reports</h1>
        <div>
            <!-- Add links to various reports -->
            <a href="sales_report.php">Sales Report</a>
            <a href="egg_production_report.php">Egg Production Report</a>
            <a href="feed_consumption_report.php">Feed Consumption Report</a>
            <a href="employee_salary_report.php">Employee Salary Report</a>
            <!-- Add more report links as needed -->
        </div>
        <a href="index.php" class="back-button">Back</a>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>

