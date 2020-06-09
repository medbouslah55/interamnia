<section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Nouvelles Arrivées</h2>
                            <p>Les meilleures produits de ARTISAN®. Tous les jours, nouvelles produits à consulter chaque jour.</p>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
                            <!-- Start Single Category -->
                            <?php
							$get_product=get_product($con,8);
							foreach($get_product as $list){
							?>
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                    <a href="product-details.php?id=<?php echo $list['id_produit']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['photo_produit']?>" alt="product images" height="385" width="290">
                                        </a>
                                    </div>
                                    <input type="hidden" value="1" id="qty">
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a id="add__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id_produit']?>','add')"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.php?id=<?php echo $list['id_produit']?>"><?php echo $list['nom_produit']?></a></h4>
                                        <ul class="fr__pro__prize">
                                        <li class="old__prize">$<?php echo $list['prix_produit']?></li>
                                            <li>$<?php echo $list['prix_produit']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </section>