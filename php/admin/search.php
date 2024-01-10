<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Search Results</title>
</head>
<body>

<?php
// Include the database connection code
include('../db-connection.php');

// Check if the search parameter is set
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);

    // Fetch product data based on the search query
    $result = $conn->query("SELECT id, title, category, price, image FROM products WHERE title LIKE '%$search%'");

    if ($result->num_rows > 0) {
        echo "<table class='product-table'>";
        echo "<thead>";
        echo "<tr><th>ID</th><th>Image</th><th>Title</th><th>Category</th><th>Price</th></tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td><img src='" . $row['image'] . "' alt='" . $row['title'] . "' width='80'></td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>$" . $row['price'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No matching products found.";
    }
} else {
    echo "Invalid search query.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
