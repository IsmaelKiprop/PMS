<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["username"])) {
    // User is already logged in, no need to authenticate again
    return;
}

// Define your list of valid users and their passwords (You should use a database for this in a real application)
$validUsers = [
    "user1" => "password1",
    "user2" => "password2",
    // Add more users and their passwords as needed
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted (e.g., login form)

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the provided username exists in the list of valid users and the password matches
    if (array_key_exists($username, $validUsers) && $validUsers[$username] === $password) {
        // Authentication successful
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "user"; // You can set roles for users as needed (e.g., "admin")

        // Redirect to the dashboard or another protected page
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed, show an error message or redirect to a login page with an error message
        header("Location: login.php?error=1"); // Redirect to login page with an error code
        exit();
    }
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
