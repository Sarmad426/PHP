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
$dbname = 'ecommerce';

$query = mysqli_connect($server,$username,$pass,$dbname);

if($query){
    echo "Connection Successful";
}else{
    echo "Connection Error";
}

echo "<br>";

$search = "SELECT * FROM `products`";

$result = mysqli_query($query,$search);
?>
```
