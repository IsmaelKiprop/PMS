<!-- egg_production_report.php -->

<?php
// Include your database connection code here
include("includes/db.php");

// Fetch egg production data from the database
$sql = "SELECT date, SUM(quantity) AS total_quantity FROM eggs GROUP BY date";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egg Production Report</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Include your CSS file for styling -->
    <style>
        /* Reset some default styles */
        body, h1, h2, p, table {
            margin: 0;
            padding: 0;
        }

        /* Set a background color and font styles for the entire page */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Style the container that holds the report content */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style headings */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Style the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Egg Production Report</h1>
        <a href="previous_page.php" class="back-button">Back</a>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Total Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display egg production report data in a table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['total_quantity'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/script.js"></script> <!-- Include your JavaScript file for interactivity -->
</body>
</html>

