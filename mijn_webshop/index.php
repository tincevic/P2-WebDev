<?php
    $title = "The Wrecka Stow";
    $dir = "";

    include "includes/db.php";

    $products = $pdo->query("SELECT * FROM products")->fetchAll();

    include "includes/header.php";
?>
            <div class="row"> <!--this row contains all the products-->
                <?php foreach ($products as $product) { ?>
                    <div class="product">
                        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h3><?php echo $product['name'] ?></h3>
                        <p class="price">&euro; <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                        <a href="detail.php?id=<?php echo $product['id']; ?>" class="view-btn">View</a>
                    </div>
                <?php } ?>
            </div>
<?php include "includes/footer.php"; ?>