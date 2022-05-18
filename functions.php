<?php
function pdo_connect_mysql()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'kaimono-shop';

    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        //If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database');
    }
}

function template_header($title)
{
    echo <<< EOT
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
            <!--------- add font --------->
        </head>
        <body>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png">
                    </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="products.php">Mall</a></li>
                        <li><a href="">Flash Sales</a></li>
                    </ul>
                </nav>
                <a href="index.php?page=cart"><img class="cart" src="images/cart.png"></a>
            </div>
        </div>
        EOT;
}

function template_footer()
{
    $year = date('Y');
    echo <<< EOT
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Patreon</li>
                        <li>Lazada</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Patreon</li>
                        <li>Lazada</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Greil's Programmers </p>
        </div>
    </div>
    </body>
</html>
EOT;
}
