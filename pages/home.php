        <!-- Réaliser une boucle PHP pour afficher les image -->
        <?php
        $products = getProducts();
        ?>

       
<?php // boucler sur le tableau multidimmensionnel 
        foreach ($products as $product) : ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <div class="product-item">
                        <a href="product.php?id=<?php echo $product['id']; ?>">
                            <img src="../img/<?php $product['image']; ?>" alt="<?php echo $product['designation']; ?>" class="img-fluid">
                        </a>
                        <h5><?php echo $product['designation']; ?></h5>
                        <p><?php echo $product['prix']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- row -->
            <div class="row tm-mb-90">
                <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                    <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                    <div class="tm-paging d-flex">
                        <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                        <a href="javascript:void(0);" class="tm-paging-link">2</a>
                        <a href="javascript:void(0);" class="tm-paging-link">3</a>
                        <a href="javascript:void(0);" class="tm-paging-link">4</a>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
                </div>
            </div>