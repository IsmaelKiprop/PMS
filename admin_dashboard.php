<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
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
        <h1>Welcome, Admin!</h1>
        <p>This is the admin dashboard. You can manage various aspects of the system here.</p>

        <h2>Admin Actions</h2>
        <ul>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="view_sales.php">View Sales Records</a></li>
            <!-- Add more admin-specific actions here -->
        </ul>

        <!-- Add more content and features as needed -->
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
