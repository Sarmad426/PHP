<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product-table.css">
    <title>Product Table</title>
</head>
<body>

<div class="search-container">
    <form action="search.php" method="get">
        <label for="search">Search by Title:</label>
        <input type="text" id="search" name="search" placeholder="Enter product title">
        <button type="submit">Search</button>
    </form>
</div>

<?php
// Include the database connection code
include('../db-connection.php');

// Fetch product data from the database
$result = $conn->query("SELECT id, title, category, price, image FROM products");

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
    echo "No products found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
