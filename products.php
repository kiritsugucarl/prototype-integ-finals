<?php
//The amount of products to show on each page
$num_of_products_on_each_page = 16;
//Pagination system
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int) $_GET['p'] : 1;
//Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');

//bindValue allows us to use int in SqlStatement
$stmt->bindValue(1, ($current_page - 1) * $num_of_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_of_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();

//Fetch the products from database, and return as Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>

<?=template_header("All Products | Kaimono")?>

    <!------- featured products ------->
    <div class="featured-prod-section">
        <div class="row row-2">
            <h2>All Products</h2>
        </div>
        <?php foreach (array_chunk($products, 16, true) as $product): ?>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-4">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="<?=$product['img']?>">
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
                <?php endforeach?>
        <?php endforeach?>
        </div>
        <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page - 1?>">Prev</a>
        <?php endif;?>
        <?php if ($total_products > ($current_page * $num_of_products_on_each_page) - $num_of_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page + 1?>">Next</a>
        <?php endif;?>
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
