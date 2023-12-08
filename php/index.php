<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../CSS/sign-up.css">
</head>
<body>

<div class="container">
    <form action="signup.php" method="post">
        <h2>Sign Up</h2>

        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error: ' . $_GET['error'] . '</p>';
        }
        ?>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Sign Up</button>
    </form>
</div>

</body>
</html>
