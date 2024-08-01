<?php
require_once '../config/config.php';
require_once '../inc/header.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$products = getProducts();
$product = null;

foreach ($products as $prod) {
    if ($prod['id'] == $id) {
        $product = $prod;
        break;
    }
}

if ($product === null) {
    echo "Produit non trouvé.";
    exit;
}

?>

<div class="product-detail">
    <h1><?php echo $product['designation']; ?></h1>
    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['designation']; ?>" class="img-fluid">
    <p>Catégorie: <?php echo $product['categorie']; ?></p>
    <p>Modèle: <?php echo $product['modele']; ?></p>
    <p>Prix: $<?php echo $product['prix']; ?></p>
    <p>Promotion: <?php echo $product['promotion'] ? 'Oui' : 'Non'; ?></p>
    <a href="home.php" class="btn btn-primary">Retour à l'accueil</a>
</div>