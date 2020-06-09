<?php require('header.php')?>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <?php if(count($_SESSION['cart'])>0){ ?>
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(isset($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $key=>$val){
                                        $productArr=get_product($con,'','',$key);
                                        $pid=$productArr[0]['id_produit'];
                                        $pname=$productArr[0]['nom_produit'];
                                        $mrp=$productArr[0]['prix_produit'];
                                        $price=$productArr[0]['prix_produit'];
                                        $image=$productArr[0]['photo_produit'];
                                        $qty=$val['qty'];
                                    ?>
											<tr>
												<td class="product-thumbnail"><a href="product-details.php?id=<?php echo $pid?>"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>"  /></a></td>
												<td class="product-name"><a href="product-details.php?id=<?php echo $pid?>"><?php echo $pname?></a>
													<ul  class="pro__prize">
														<li class="old__prize">$<?php echo $mrp?></li>
														<li>$<?php echo $price?></li>
													</ul>
												</td>
												<td class="product-price"><span class="amount">$<?php echo $price?></span></td>
                                                <td class="product-quantity"><input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>" />
                                                    <br><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a>
                                                </td>
												<td class="product-subtotal"><?php echo $qty*$price?></td>
												<td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a></td>
                                            </tr>
                                            <?php } } ?>
                                            <tr>
                                            <th class="product-thumbnail">Total price:<br> $<?php  echo $totalPrice; ?></th>
                                            <!-- <td class="product-name">$<?php  echo $totalPrice; ?></td> -->
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="<?php echo SITE_PATH?>">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="#">update</a>
                                            <a href="<?php echo SITE_PATH?>checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="ht__coupon__code">
                                        <span>enter your discount code</span>
                                        <div class="coupon__box">
                                            <input type="text" placeholder="">
                                            <div class="ht__cp__btn">
                                                <a href="#">enter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
         <?php }else{ ?> 
                            <div class="cart-main-area ptb--100 bg__white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">              
                                            <div class="table-content table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">products</th>
                                                            <th class="product-name">name of products</th>
                                                            <th class="product-price">Price</th>
                                                            <th class="product-quantity">Quantity</th>
                                                            <th class="product-subtotal">Total</th>
                                                            <th class="product-remove">Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <tr>
                                                                <td class="product-thumbnail"><a href="#">****</a></td>
                                                                <td class="product-name"><a href="#">****</a></td>
                                                                <td class="product-price"><span class="amount">****</span></td>
                                                                <td class="product-quantity"><input type="number" value="0" />
                                                                <br/><a href="#">update</a>
                                                                </td>
                                                                <td class="product-subtotal">****</td>
                                                                <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="buttons-cart--inner">
                                                        <h3>Votre panier est actuellement vide.</h3>
                                                        <div class="buttons-cart">
                                                            <a href="<?php echo SITE_PATH?>">Continue Shopping</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
        <!-- cart-main-area end -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
            </ul>
        </div>
        <!-- End Banner Area -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
        <?php require('footer.php')?>