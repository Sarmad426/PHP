<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$welcome_message = "Welcome, " . $_SESSION['username'] . "!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../CSS/welcome-page.css">
</head>
<body>

<div class="container">
    <h2><?php echo $welcome_message; ?></h2>
    <p>This is your welcome page. You can add more content here.</p>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
