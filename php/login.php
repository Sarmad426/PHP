<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user inputs from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to check if the user exists with the provided email and password
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    // Check if a matching user is found
    if ($result->num_rows > 0) {
        // Successful login
        $user = $result->fetch_assoc();
        echo "Hello, " . $user["name"] . "! Welcome back!";
    } else {
        // Invalid login
        echo "Invalid email or password";
    }

    // Close the database connection
    $conn->close();
}
?>
