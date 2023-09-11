<?php
// Include your database connection code here
include("includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST["employee_name"];
    $salary = $_POST["salary"];
    $role = $_POST["role"];

    // Insert data into the database
    $insert_query = "INSERT INTO employees (employee_name, salary, role) VALUES ('$employee_name', '$salary', '$role')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Employee record managed successfully!";
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
    <title>Poultry Management System - Manage Employee Records</title>
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
        <h1>Manage Employee Records</h1>
        <a class="back-button" href="index.php">Back</a>
        <form action="manage_employee.php" method="POST">
            <label for="employee_name">Employee Name:</label>
            <input type="text" name="employee_name" id="employee_name" required>
            
            <label for="salary">Salary (per month):</label>
            <input type="number" name="salary" id="salary" required>
            
            <label for="role">Role:</label>
            <input type="text" name="role" id="role" required>
            
            <input type="submit" value="Manage Employee Record">
        </form>
    </div>
</body>
</html>
