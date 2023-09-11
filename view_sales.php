<!-- view_sales.php -->

<?php
// Include your database connection code here
include("includes/db.php");
// Fetch sales data from the database
$sql = "SELECT * FROM sales";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Records</title>
    <link rel="stylesheet" href="assets/css/international.css"> <!-- Include international CSS file -->
    <link rel="stylesheet" href="assets/css/classic.css"> <!-- Include classic CSS file -->
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

        /* Style the container that holds the sales records content */
        .container {
            max-width: 1200px;
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

        /* Style the sales table */
        .sales-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .sales-table th, .sales-table td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .sales-table th {
            background-color: #f0f0f0;
        }

        /* Style links within the table */
        .sales-table a {
            color: #007BFF;
            text-decoration: none;
        }

        .sales-table a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Sales Records</h1>
        <a href="index.php" class="back-button">Back</a>
        <table class="sales-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Total Sales</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display sales records in a table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['quantity'] . "</td>";
                    echo "<td>$" . $row['total_sales'] . "</td>";
                    echo "<td>" . $row['sale_date'] . "</td>";
                    echo '<td><a href="edit_sale.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_sale.php?id=' . $row['id'] . '">Delete</a></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>

