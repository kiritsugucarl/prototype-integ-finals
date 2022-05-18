<?php
//Check to make sure the id param is specified in the URL
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);

    $product = $stmt->fetch(PDO::FETCH_ASSOC);
}

$stmt2 = $pdo->prepare('SELECT * FROM products ORDER BY RAND() DESC LIMIT 4');
$stmt2->execute();
$related_products = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header("Product Details | Kaimono")?>

    <!------- product details ------->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="<?=$product['img']?>" width="100%">
            </div>
            <div class="col-2">
                <h1><?=$product['name']?></h1>
                <h4>P<?=$product['rrp']?></h4>
                <form action="index.php?page=cart" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$product['id']?>">
                    <input type="submit" name="add_to_cart" class="btn" value="Add to Cart">
                </form>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p><?=$product['desc']?></p>
            </div>
        </div>

        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p><a href="products.php">View more</a></p>
            </div>
        </div>


        <div class="row">
            <?php foreach ($related_products as $product): ?>
                <div class="col-4">
                    <a href="index.php?page=product&id=<?=$product['id']?>">
                        <img src="<?=$product['img']?>" alt="<?=$product['name']?>">
                    </a>
                    <a href="index.php?page=product&id=<?=$product['id']?>">
                        <h4><?=$product['name']?></h4>
                    </a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>P<?=$product['rrp']?></p>
                </div>
            <?php endforeach;?>
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
