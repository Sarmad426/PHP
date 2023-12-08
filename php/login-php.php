<?php

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            header("Location: welcome.php");
            exit();
        } else {
            header("Location: index.php?error=" . urlencode("Invalid password"));
            exit();
        }
    } else {
        header("Location: index.php?error=" . urlencode("Username not found"));
        exit();
    }
}

$conn->close();
?>
