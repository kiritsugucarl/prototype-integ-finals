<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Test Page</title>
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

    <!------- product details ------->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" id="productImg"
                >
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img class="small-img" src="images/gallery-1.jpg" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="images/gallery-2.jpg" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="images/gallery-3.jpg" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="images/gallery-4.jpg" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Test Category title</p>
                <h1>Test Title</h1>
                <h4>P50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit commodi beatae hic possimus iusto assumenda nemo corrupti non laboriosam ea, exercitationem numquam porro corporis dicta aliquid consequuntur natus enim magnam!</p>
            </div>
        </div>

        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p><a href="products.php">View more</a></p>
            </div>
        </div>


        <div class="row">
            <div class="col-4">
                <a href="product-details.php">
                    <img src="images/product-1.jpg">
                </a>
                <a href="product-details.php">
                    <h4>Test Title</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>P50.00</p>
            </div>

            <div class="col-4">
                <a href="product-details.php">
                    <img src="images/product-2.jpg">
                </a>
                <a href="product-details.php">
                    <h4>Test Title</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>P50.00</p>
            </div>

            <div class="col-4">
                <a href="product-details.php">
                    <img src="images/product-3.jpg">
                </a>
                <a href="product-details.php">
                    <h4>Test Title</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>P50.00</p>
            </div>

            <div class="col-4">
                <a href="product-details.php">
                    <img src="images/product-4.jpg">
                </a>
                <a href="product-details.php">
                    <h4>Test Title</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>P50.00</p>
            </div>
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

<!--------- js for gallery ---------->
    <script>
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");

            smallImg[0].onclick = function()
            {
                productImg.src = smallImg[0].src;
            }
            smallImg[1].onclick = function()
            {
                productImg.src = smallImg[1].src;
            }
            smallImg[2].onclick = function()
            {
                productImg.src = smallImg[2].src;
            }
            smallImg[3].onclick = function()
            {
                productImg.src = smallImg[3].src;
            }
    </script>
</body>
</html>
