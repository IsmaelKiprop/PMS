<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Report</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Include your CSS file for styling -->
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

        /* Style the container that holds the employee salary report content */
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

        /* Style the employee salary table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Employee Salary Report</h1>
        <a href="index.php" class="back-button">Back</a>
        <table>
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Salary</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include your database connection code here
                include("includes/db.php");

                // SQL query to retrieve employee salary records
                $sql = "SELECT employee_name, salary, role FROM employees";

                // Execute the query
                $result = $conn->query($sql);

                // Loop through the query result and display data
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['employee_name'] . "</td>";
                    echo "<td>$" . $row['salary'] . "</td>";
                    echo "<td>" . $row['role'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>



