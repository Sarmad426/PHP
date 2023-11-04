# PHP

## Instructions To get started using php locally

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

$search = "SELECT * FROM `products`"; // Query the data using SQL from products table

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

## PHP (Hypertext Preprocessor)

PHP is a widely used server-side scripting language designed for web development. It's particularly well-suited for creating dynamic web applications and websites. PHP code is executed on the server, and its output is typically HTML, which is then sent to the client's web browser for rendering. PHP is known for its flexibility and compatibility with various databases, making it a popular choice for web development.

### Key Features of PHP

- Open-source: PHP is free to use and has a vast online community.
- Cross-platform: It can run on various operating systems.
- Server-side scripting: PHP is executed on the webserver, generating dynamic content.
- Database support: It can interact with various databases, such as MySQL and PostgreSQL.
- Integration: Easily integrates with HTML and other web technologies.

## Using a CMS like WordPress with PHP

[WordPress](https://wordpress.org/) is a popular content management system (CMS) that uses PHP as its primary scripting language. It allows you to create and manage websites, blogs, and other web content without extensive coding. Here's how you can use WordPress, documented in Markdown:

### Installing WordPress

1. **Download WordPress**: Visit the [WordPress.org website](https://wordpress.org/download/) and download the latest version of WordPress.

2. **Create a Database**: You need a database to store WordPress data. Use a tool like phpMyAdmin to create a new database and a user with the necessary privileges.

3. **Configure WordPress**: Edit the `wp-config.php` file to specify your database details. You can find this file in the WordPress installation directory.

4. **Upload WordPress Files**: Upload all the WordPress files to your web server using FTP or a hosting control panel.

5. **Run the Installation**: Access your website's URL in a browser. WordPress will guide you through the installation process, where you set up your site's title, admin credentials, and other details.

### Creating and Managing Content

Once WordPress is installed, you can start creating and managing content:

- **Dashboard**: Log in as an administrator to access the WordPress dashboard, where you can create and manage posts, pages, and media.

- **Themes**: Choose from a variety of pre-designed themes, or create a custom theme using PHP, HTML, and CSS.

- **Plugins**: Extend WordPress functionality by installing plugins. Many plugins are coded in PHP and provide various features like SEO optimization, e-commerce, and social sharing.

- **Customization**: You can customize the appearance and functionality of your site by modifying PHP templates, style sheets, and adding PHP code snippets to your theme's `functions.php` file.

- **Widgets and Menus**: Easily configure widgets and menus to control the layout and navigation of your site.

### Extending Functionality

You can enhance your WordPress website by coding custom plugins and themes in PHP:

- **Themes**: Create custom themes with PHP templates to control the look and feel of your site.

- **Plugins**: Develop custom plugins to add new features and functionality to your site, such as contact forms, e-commerce, or SEO enhancements.

WordPress leverages PHP's flexibility to allow developers to tailor websites to their specific needs.

In summary, PHP is a versatile server-side scripting language, and WordPress, built with PHP, provides a user-friendly platform for creating and managing websites and web content without extensive coding. You can use pre-designed themes and plugins or develop custom solutions in PHP to meet your specific web development requirements.
