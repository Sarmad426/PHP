<?php

$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'ecommerce';

$query = mysqli_connect($server,$username,$pass,$dbname);

// if($query){
//     echo "Connection Successful";
// }else{
//     echo "Connection Error";
// }

echo "<br>";

$search = "SELECT * FROM `products`";

$result = mysqli_query($query,$search);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | E-commerce </title>
    <link rel='stylesheet' href='page.css'/>
</head>
<body>
   <?php
   echo '<div class="card-parent">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="card">';
  echo '<img src="'.$row['image'].'" alt="' . $row['title'] . '">';
  echo '<h3>' . $row['title'] . '</h3>';
  echo '<p class="price">$' . $row['price'] . '</p>';
  echo '</div>';
}
echo '</div>';

mysqli_close($query);
?>
</body>
</html>