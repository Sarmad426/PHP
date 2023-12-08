<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

<div class="container">
    <form action="login-php.php" method="post">
        <h2>Login</h2>

        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error: ' . $_GET['error'] . '</p>';
        }
        ?>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
