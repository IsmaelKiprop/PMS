<?php
// Include your database connection code here
include("includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $select_query = "SELECT id, username, password, role FROM users WHERE username = '$username'";
    $result = $conn->query($select_query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row["password"])) {
            // Authentication successful
            session_start();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"] = $row["role"];

            // Redirect users based on their roles
            if ($row["role"] === 'admin') {
                header("Location: admin_dashboard.php"); // Redirect to the admin dashboard
            } elseif ($row["role"] === 'employee') {
                header("Location: employee_dashboard.php"); // Redirect to the employee dashboard
            } else {
                // Handle other roles or scenarios as needed
                echo "Unknown role!";
            }
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }

    // Close the database connection
    $conn->close();
}
?>


