<?php
$produits =  getDetail();
?>

<h1>PRODUCTS</h1>

<?php
foreach ($produits as $produit) : ?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
        <figure class="effect-ming tm-video-item">
            <div class="product-item">
                <a href="product.php?id=<?php echo $product['id']; ?>">
                    <img src="../img/<?php $product['image']; ?>" alt="<?php echo $product['designation']; ?>" class="img-fluid">
                </a>
                <h5><?php echo $product['designation']; ?></h5>
                <p><?php echo $product['modele']; ?></p>
                <p><?php echo $product['categorie']; ?></p>
                <p><?php echo $product['promotion'] ? 'true' : 'false'; ?></p>
                <p><?php echo $product['prix']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>