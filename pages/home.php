<?php
require_once '../config/config.php';
require_once '../inc/header.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>Bienvenue sur notre site Meta Shop</h1>
        <div class="product-grid">
            <?php
            $produits = getProducts();
            foreach ($produits as $produit) : ?>
                <div class="product-item">
                    <a href="products.php?page=product&id=<?php echo $produit['id']; ?>">
                        <img src="<?php echo $produit['image']; ?>" alt="<?php echo $produit['designation']; ?>" class="img-fluid">
                    </a>
                    <h5><?php echo $produit['designation']; ?></h5>
                    <p>$<?php echo $produit['prix']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>