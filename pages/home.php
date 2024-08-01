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
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            margin: 20px;
        }

        .product-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
        }

        .product-item a {
            text-decoration: none;
            color: #000;
        }
    </style>
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