<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Include your CSS file for styling -->
    <style>
        /* Add your custom styles here */
        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <a href="logout.php">Logout</a>
        <h1>Welcome, Employee!</h1>
        <p>This is your employee dashboard. You can access and manage various tasks related to your role.</p>

        <h2>Employee Actions</h2>
        <ul>
            <li><a href="view_sales.php">View Sales Records</a></li>
            <li><a href="record_sales.php">Record Sales</a></li>
            <li><a href="add_egg.php">Add Egg Data</a></li>
            <!-- Add more employee-specific actions here -->
        </ul>

        <!-- Add more content and features as needed -->
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>

