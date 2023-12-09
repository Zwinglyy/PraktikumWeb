<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simulate a database (in-memory array)
    $registeredUsers = isset($_SESSION['registeredUsers']) ? $_SESSION['registeredUsers'] : [];

    // Check if the username and password match
    if ($username==='chris' && $password === '123') {
        // Redirect to main.html on successful login
        header("Location: main.html");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
