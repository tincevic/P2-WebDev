<?php
    include "includes/db.php";
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $products = $pdo->query("SELECT * FROM products")->fetchAll();
    $product = $stmt->fetch();
    if (!$product) {
        header("Location: index.php");
        exit;
    }
    $title = $product['name'] . " | The Wrecka Stow";
    $dir = "";
    include "includes/header.php";
?>
            <div class="row">
                <div class="detail-view">
                    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name'] ?>">
                    <div class="detail-info">
                        <h2><?php echo $product['name'] ?></h2>
                        <p class="price">&euro; <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                        <p class="description"><?php echo $product['description'] ?></p>
                        <strong>Track Listing</strong>
                        <div class="tracklist-container">
                            <?php echo $product['tracklist'] ?>
                        </div>
                        <a href="purchase.php" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="other-products-box">
                <h3 class="center">Other Products</h3>
                <div class="row"><!--this row contains all the products-->
                    <?php foreach ($products as $product) { ?>
                        <div class="product">
                            <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            <h3><?php echo $product['name'] ?></h3>
                            <div class="product-footer">
                                <p class="price">&euro; <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                                <a href="detail.php?id=<?php echo $product['id']; ?>" class="view-btn">View</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
<?php include "includes/footer.php"; ?>