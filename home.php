<?php
//Fetch the4 most recently added products from the database
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

    <div class="row">
        <div class="col-2">
            <h1>Give Yourself A Treat!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quo blanditiis nisi sapiente sint, itaque quos,<br>
                error labore consequuntur dicta cupiditate quaerat commodi ut delectus! Excepturi corporis asperiores expedita explicabo?</p>
            <a href="index.php?page=products" class="btn">Explore Now &#8594</a>
        </div>
        <div class="col-2">
            <img src="images/image1.jpg">
        </div>
        </div>
    </div>

    <!--------- featured categories --------->
    <div class="featured-section">
        <div class="categories">
            <figure>
                <img src="images/banner1.webp">
                <img src="images/banner2.png">
                <img src="images/banner3.webp">
                <img src="images/banner4.jpg">
            </figure>
        </div>
    </div>

    <!------- featured products ------->
    <div class="featured-prod-section">
        <h2 class="title">Featured Products</h2>
        <div class="row">
        <?php foreach ($recently_added_products as $product): ?>
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

    <!--------- brands ------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>

    <?=template_footer()?>