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
    $bookId = $_POST["bookId"];

    // Check if the book exists
    $checkSql = "SELECT * FROM Books WHERE id = $bookId";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Fetch book details before deletion
        $bookDetails = $result->fetch_assoc();

        // Perform deletion
        $deleteSql = "DELETE FROM Books WHERE id = $bookId";

        if ($conn->query($deleteSql) === TRUE) {
            echo "Book '{$bookDetails['name']}' by '{$bookDetails['author']}' deleted successfully";
        } else {
            echo "Error deleting book: " . $conn->error;
        }
    } else {
        // Book not found
        echo "Error: Book not found";
    }
}

// Close the database connection
$conn->close();
?>
