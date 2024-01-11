<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="books-table.css">
    <title>Book List</title>
</head>
<body>

    <?php
        // Connect to the database
        $conn = new mysqli("localhost", "root", "", "ecommerce");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch books data
        $query = "SELECT id, name, author, published_year FROM books";
        $result = $conn->query($query);

        // Check if there are rows in the result
        echo "<h1>Books</h1>";

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Author</th><th>Published Year</th></tr>";
            // Loop through each row and display the data
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['author']}</td><td>{$row['published_year']}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No books found in the database.";
        }

        // Close the database connection
        $conn->close();
    ?>

</body>
</html>
