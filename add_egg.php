<?php
// Include your database connection code here
include("includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST["quantity"];
    $date = $_POST["date"];

    // Insert data into the database
    $insert_query = "INSERT INTO eggs (quantity, date) VALUES ('$quantity', '$date')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Egg data added successfully!";
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
    <title>Poultry Management System - Add Egg Data</title>
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

        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #009688;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
        }

        input[type="submit"]:hover {
            background-color: #007b6b;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Egg Data</h1>
        <a class="back-button" href="index.php">Back</a>
        <form action="add_egg.php" method="POST">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
            
            <input type="submit" value="Add Egg Data">
        </form>
    </div>
</body>
</html>
