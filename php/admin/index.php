<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Table</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    $userIdToDelete = $_POST['user_id_to_delete'];

    // Use appropriate validation and sanitation before executing the delete query
    $deleteSql = "DELETE FROM users WHERE user_id = $userIdToDelete";
    if ($conn->query($deleteSql) === TRUE) {
        // User deleted successfully
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

// Handle user search
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$searchSql = "SELECT user_id, name, email, password FROM users WHERE name LIKE '%$searchTerm%'";
$searchResult = $conn->query($searchSql);

// Check for errors
if (!$searchResult) {
    die("Search query failed: " . $conn->error);
}

// Display users in the HTML table with a generated ID and a Delete button
?>
<div>
  <form method="get">
    <label for="search">Search User:</label>
    <input type="text" id="search" name="search" value="<?php echo $searchTerm; ?>">
    <button type="submit">Search</button>
  </form>
</div>

<table id="userTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $id = 1; // Initialize a counter for ID
    if ($searchResult->num_rows > 0) {
        while ($row = $searchResult->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td>
                    <form method='post'>
                        <input type='hidden' name='user_id_to_delete' value='{$row['user_id']}'>
                        <button type='submit' name='delete_user'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
            $id++; // Increment the ID counter
        }
    } else {
        echo "<tr><td colspan='5'>No users found</td></tr>";
    }
    ?>
  </tbody>
</table>

<?php
// Close the database connection
$conn->close();
?>

</body>
</html>
