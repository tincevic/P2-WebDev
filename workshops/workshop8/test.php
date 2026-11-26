<?php
include "includes/db.php";
$products = $pdo->query("SELECT * FROM products")->fetchAll();
echo "There are " . count($products) . " products in the database.";
?>
<strong> hi</strong>