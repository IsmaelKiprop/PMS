<!-- sales_report.php -->

<?php
// Include your database connection code here
include("includes/db.php");
// Fetch sales data from the database
$sql = "SELECT product_name, SUM(quantity) AS total_quantity, SUM(total_sales) AS total_sales FROM sales GROUP BY product_name";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #009688;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Sales Report</h1>
        <a href="index.php" class="back-button">Back</a>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Total Quantity</th>
                    <th>Total Sales ($)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display sales report data in a table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['total_quantity'] . "</td>";
                    echo "<td>$" . $row['total_sales'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
