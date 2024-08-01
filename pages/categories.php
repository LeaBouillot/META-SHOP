<?php
require_once '../config/config.php';
require_once '../inc/header.php';
?>

<div class="container">
    <h2>Catégories de Produits</h2>
    <?php
    $produits = getProducts();
    $categories = [];

    // Regrouper les produits par catégorie
    foreach ($produits as $produit) {
        $categorie = $produit['categorie'];
        if (!isset($categories[$categorie])) {
            $categories[$categorie] = [];
        }
        $categories[$categorie][] = $produit;
    }

    // Afficher les catégories et les produits
    foreach ($categories as $categorie => $produitsParCategorie) {
        echo "<h3>$categorie</h3>";
        echo "<div class='product-grid'>";
        foreach ($produitsParCategorie as $produit) { ?>
            <div class="product-item">
                <a href="index.php?page=product&id=<?php echo $produit['id']; ?>">
                    <img src="<?php echo $produit['image']; ?>" alt="<?php echo $produit['designation']; ?>" class="img-fluid">
                </a>
                <h5><?php echo $produit['designation']; ?></h5>
                <p>$<?php echo $produit['prix']; ?></p>
            </div>
    <?php }
        echo "</div>";
    }
    ?>
</div>