<?php
require_once '../config/config.php';
require_once '../inc/header.php';
?>

<div class="container">
    <h2>Produits en Promotion</h2>
    <div class="product-grid">
        <?php
        $promotions = getpromotions();

        if ($promotions['promotion']) {
            foreach ($promotions as $product) { ?>
                <div class="product-item">
                    <a href="index.php?page=product&id=<?php echo $product['id']; ?>">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['designation']; ?>" class="img-fluid">
                    </a>
                    <h5><?php echo $product['designation']; ?></h5>
                    <p>$<?php echo $product['prix']; ?></p>
                </div>
        <?php }
        } else {
            echo "<p>Aucun produit en promotion pour le moment.</p>";
        }
        ?>
    </div>
</div>