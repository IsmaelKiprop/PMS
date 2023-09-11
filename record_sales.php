<?php
// Include your database connection code here
include("includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $quantity = $_POST["quantity"];
    $total_sales = $_POST["total_sales"];
    $sale_date = $_POST["sale_date"];

    // Insert data into the 'sales' table
    $insert_query = "INSERT INTO sales (product_name, quantity, total_sales, sale_date) VALUES ('$product_name', '$quantity', '$total_sales', '$sale_date')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Sales record added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Poultry Management System - Sales Record Keeping</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #009688;
        }

        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #009688;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
        }

        button[type="submit"]:hover {
            background-color: #007b6b;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <h1>Sales Record Keeping</h1>
        <a class="back-button" href="index.php">Back</a>
        <form method="POST" action="record_sales.php">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>

            <label for="total_sales">Total Sales:</label>
            <input type="number" id="total_sales" name="total_sales" required>

            <label for="sale_date">Sale Date:</label>
            <input type="date" id="sale_date" name="sale_date" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
