# PHP
PHP Full stack development.


## Instructions

- Start XAMP Control Panel.
- Start MYSQL and Apache.
- Open browser at **localhost** to test application state.
- open **xamp** folder where it is installed.
- find `htdocs` folder.
- Create a folder inside and open in code editor.
- Create a `php` file.
- open browser and go to `http://localhost/foldername/filename.php` .


## Database

- Create a Database in `localhost/phpmyadmin`
- Create a Database
- Create Table

## Database Connection

```php
<?php

$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'ecommerce'; // name of the database

$query = mysqli_connect($server,$username,$pass,$dbname);

if($query){
    echo "Connection Successful";
}else{
    echo "Connection Error";
}

echo "<br>";

$search = "SELECT * FROM `products`"; // name of the table

$result = mysqli_query($query,$search);
?>
```

## Fetch and Display data

> For this example we are displaying a card


```php
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="card-parent">';
  echo '<div class="card">';
  echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
  echo '<h3>' . $row['title'] . '</h3>';
  echo '<p class="price">$' . $row['price'] . '</p>';
  echo '</div>';
  echo '</div>';
}

mysqli_close($query); // Close Database
```
