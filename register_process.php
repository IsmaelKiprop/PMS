<?php
// Include your database connection code here
include("includes/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $role = $_POST["role"];

    // Insert data into the database
    $insert_query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    if ($conn->query($insert_query) === TRUE) {
        // Registration successful, set a success message
        session_start();
        $_SESSION["registration_success"] = "User registered successfully!";
        
        // Redirect to login page
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

