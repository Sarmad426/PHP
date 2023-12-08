<!-- delete_user.php -->

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

    // Get user ID from the form
    $userId = $_POST["userId"];

    // SQL query to retrieve user data
    $sql = "SELECT * FROM users WHERE user_id = $userId";
    $result = $conn->query($sql);

    // Check if a user with the provided ID exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo json_encode($user); // Send user data as JSON for JavaScript
    } else {
        echo "User not found";
    }

    // Close the database connection
    $conn->close();
}
?>
