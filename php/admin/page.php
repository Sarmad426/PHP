<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>Your E-Commerce Store</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
          <img src="../images/MM.png" alt="Logo">
        </div>
        <ul class="nav-links">
          <li><a href="#">Products</a></li>
            <li><a href="signup.html">Sign Up</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="./admin/users.php">Dashboard</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Your E-Commerce Store</h1>
            <p>Discover amazing products and great deals.</p>
            <a href="#" class="btn-shop-now">Shop Now</a>
        </div>
    </div>

    <!-- Product Cards Section -->
    <div class="product-cards-section" id='products'>
   <?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "ecommerce");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch products data (assuming 'image' is the column for the image)
$query = "SELECT id, title, price, image FROM products";
$result = $conn->query($query);

// Check if the query was successful
if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Loop through each row and display the product card
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product-card'>";
        echo "<img src='{$row['image']}' alt='Product Image'>";
        echo "<h3>{$row['title']}</h3>";
        echo "<p>Price: {$row['price']}</p>";
        echo "<a href='#' class='btn-view-details'>View Details</a>";
        echo "</div>";
    }
} else {
    echo "No products found in the database.";
}

// Close the database connection
$conn->close();
?>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your E-Commerce Store. All rights reserved.</p>
    </footer>

</body>
</html>
