<?php
// Include your database connection code here
include("includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST["quantity"];
    $species = $_POST["species"];
    $mortality = $_POST["mortality"];

    // Insert data into the database
    $insert_query = "INSERT INTO birds (quantity, species, mortality) VALUES ('$quantity', '$species', '$mortality')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Bird data added successfully!";
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
    <title>Poultry Management System - Add Bird Data</title>
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
        input[type="number"] {
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
        <h1>Add Bird Data</h1>
        <a class="back-button" href="index.php">Back</a>
        <form action="add_bird.php" method="POST">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            
            <label for="species">Species:</label>
            <input type="text" name="species" id="species" required>
            
            <label for="mortality">Mortality:</label>
            <input type="number" name="mortality" id="mortality" required>
            
            <input type="submit" value="Add Bird Data">
        </form>
    </div>
</body>
</html>

