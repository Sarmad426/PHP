<?php
// Connect to MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $author = $_POST["author"];
    $published_year = $_POST["published_year"];

    // Insert data into Books table
    $sql = "INSERT INTO Books (name, author, published_year) VALUES ('$name', '$author', $published_year)";

    if ($conn->query($sql) === TRUE) {
        echo "Book $name added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
