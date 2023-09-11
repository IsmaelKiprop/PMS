<?php
// Include your database connection code here
include("includes/db.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $feed_type = $_POST["feed_type"];
    $quantity = $_POST["quantity"];

    // Insert data into the database
    $insert_query = "INSERT INTO feed_consumption (date, feed_type, quantity) VALUES ('$date', '$feed_type', '$quantity')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Feed consumption data tracked successfully!";
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
    <title>Poultry Management System - Feed Consumption Tracking</title>
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

        input[type="submit"] {
            background-color: #009688;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #007b6b;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <h1>Feed Consumption Tracking</h1>
        <a class="back-button" href="index.php">Back</a>
        <form action="track_feed.php" method="POST">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
            
            <label for="feed_type">Feed Type:</label>
            <input type="text" name="feed_type" id="feed_type" required>
            
            <label for="quantity">Quantity (in kilograms):</label>
            <input type="number" name="quantity" id="quantity" step="0.01" required>
            
            <input type="submit" value="Track Feed Consumption">
        </form>
    </div>
</body>
</html>
