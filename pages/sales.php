<?php
require_once '../config/config.php';
require_once '../inc/header.php';
?>
 <link rel="stylesheet" href="../css/style.css">
<div class="container">
    <h2>Produits en Promotion</h2>
    <div class="product-grid">
        <?php
        // Récupérer les produits en promotion
        $promotions = getPromotions();

        // Vérifier si des produits en promotion existent
        if (!empty($promotions)) {
            foreach ($promotions as $produit) { ?>
                <div class="product-item">
                    <a href="index.php?page=product&id=<?php echo $produit['id']; ?>">
                        <img src="<?php echo $produit['image']; ?>" alt="<?php echo $produit['designation']; ?>" class="img-fluid">
                    </a>
                    <h5><?php echo $produit['designation']; ?></h5>
                    <p>$<?php echo $produit['prix']; ?></p>
                </div>
        <?php }
        } else {
            echo "<p>Aucun produit en promotion pour le moment.</p>";
        }
        ?>
    </div>
</div>