<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Test</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <!--------- header section ---------->
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
            <a href="cart.php"><img class="cart" src="images/cart.png"></a>
        </div>
    </div>

    <!------- cart items ------->
    <div class="small-container cart-section">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>Test Product Name</p>
                            <small>Price: P Test Price</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>P Test Price</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>P Test Price</td>
                </tr>
                <tr>
                    <td>Shipping Fee</td>
                    <td>P Test Price</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>P Test Price</td>
                </tr>
            </table>
        </div>

    </div>

    <!------- footer ----->
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
