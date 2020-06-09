<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$cat_res=mysqli_query($con,"select * from categorie where status=1 order by code_categorie asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}


$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
$total=0;
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Asbab - eCommerce HTML5 Templatee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.php"><img src="images/logo/4.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop">
                                            <a href="index.html">NOUVEAUTÉS</a>
                                            <!-- <svg>
                                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                              </svg> -->
                                        </li>
                                        <li class="drop"><a href="product-grid.php">ART DE TABLE</a>
                                            <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">CATÉGORIES</p>
                                                    <ul class="mega__item">
                                                    <li><a href="/collections/la-cuisine-2017">TOUT VOIR</a></li>
                      
                                                    <li><a href="/collections/la-cuisine-2017/TASSE-VERRE-MUG">TASSES, VERRES ET MUGS</a></li>
                                                    
                                                    <li><a href="/collections/la-cuisine-2017/SUCRIER-ET-BEURRIER">SUCRIERS ET BEURRIERS</a></li>
                                                    
                                                    <li><a href="/collections/la-cuisine-2017/BOLS-ET-SALADIERS">BOLS ET SALADIERS</a></li>
                                                    
                                                    <li><a href="/collections/la-cuisine-2017/PLATEAUX-ET-ASSIETTES">PLATEAUX ET ASSIETTES</a></li>
                                                    
                                                    <li><a href="/collections/tajines">TAJINES</a></li>
                                                    
                                                    <li><a href="/collections/coupes-a-fruits">COUPE À FRUITS </a></li>
                                                    
                                                    <li><a href="/collections/theieres-et-carafes">THÉIÈRES ET CARAFES</a></li>
                                                    
                                                    <li><a href="/collections/ustensiles">USTENSILES</a></li>
                                                    
                                                    <li><a href="/collections/plateaux-et-planches">PLATEAUX ET PLANCHES</a></li>
                                                    
                                                    <li><a href="/collections/sous-verres-sets-de-table-et-caches-verres">SOUS VERRES, SETS DE TABLE ET CACHES VERRES</a></li>
                                                    
                                                    <li><a href="/collections/pots-et-vases">POTS ET VASES</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <li>
                                                    <hr>
                                                </li>
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">COLOR STORY</p>
                                                    <ul class="mega__item">
                                                    <li><a href="/collections/black-and-white">BLACK AND WHITE STORY</a></li>
                      
                                                    <li><a href="/collections/white-story">WHITE AND GOLD STORY</a></li>
                                                    
                                                    <li><a href="/collections/color-story-terracotta/COLOR-STORY-TERRACOTTA">TERRACOTTA STORY</a></li>
                                                    
                                                    <li><a href="/collections/green-story/COLOR-STORY-GREEN">GREEN STORY</a></li>
                                                    
                                                    <li><a href="/collections/color-story-blue/COLOR-STORY-BLEU">BLUE STORY</a></li>
                                                    
                                                    <li><a href="/collections/color-story-pink">PINK STORY</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <li>
                                                    <hr>
                                                </li>
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">COLLECTIONS</p>
                                                    <ul class="mega__item">
                                                    <li><a href="/collections/la-ceramique-zwak-et-raye-gold-12k">ZWAK ET RAYE GOLD</a></li>
                      
                                                    <li><a href="/collections/black-and-white-with-gold-12k">EMPREINTES BLANC GOLD </a></li>
                                                    
                                                    <li><a href="/collections/collection-nour">NOUR</a></li>
                                                    
                                                    <li><a href="/collections/collection-ourika-gold-1">HOURA OURIKA GOLD</a></li>
                                                    
                                                    <li><a href="/collections/collection-bogolan">BOGOLAN</a></li>
                                                    
                                                    <li><a href="/collections/tourbillon-gold">TOURBILLON GOLD</a></li>
                                                    
                                                    <li><a href="/collections/granito">GRANITO</a></li>
                                                    
                                                    <li><a href="/collections/tamgrout">TAMGROUT</a></li>
                                                    
                                                    <li><a href="/collections/collection-terracotta">TERRACOTTA</a></li>
                                                    
                                                    <li><a href="/collections/le-verre-recycle-transparent-et-decor">VERRE RECYCLÉ</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <li>
                                                    <hr>
                                                </li>
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">MATIÈRE</p>
                                                    <ul class="mega__item">
                                                    <li><a href="/collections/la-cuisine-2017/bois">BOIS HÊTRE, OLIVIER ET NOYER</a></li>
                      
                                                    <li><a href="/collections/la-cuisine-2017/vannerie">VANNERIE</a></li>
                                                    
                                                    <li><a href="/collections/tadelakt-1/TADELAKT">TADELAKT</a></li>
                                                    
                                                    <li><a href="/collections/la-cuisine-2017/m%C3%A9tal">MÉTAL</a></li>
                                                    
                                                    <li><a href="/collections/la-cuisine-2017/verre-recycle">VERRE RECYCLÉ</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li>
                                                    <img src="./images/menu/art_table.webp" alt="art_table">
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">DÉCORATION</a>
                                            <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Shop Pages</a>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.html">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">MOBILIER</a>
                                        <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">Shop Pages</p>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.php">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="blog.html">COSMÉTIQUE</a>
                                        <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">Shop Pages</p>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.php">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">MODE</a>
                                        <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">Shop Pages</p>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.php">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">CADEAUX</a>
                                        <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">Shop Pages</p>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.php">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">INFO</a>
                                        <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><p class="mega__title">Shop Pages</p>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.php">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <?php
											foreach($cat_arr as $list){
												?>
												<li><a href="product-grid.php?id=<?php echo $list['code_categorie']?>"><?php echo $list['nom_categorie']?></a></li>
												<?php
											}
											?>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="cart.html">Cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="product-grid.html">product grid</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                            <?php
											foreach($cat_arr as $list){
												?>
												<li><a href="categories.php?id=<?php echo $list['code_categorie']?>"><?php echo $list['nom_categorie']?></a></li>
												<?php
											}
											?>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons" style="color:#f27437;"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <?php if(isset($_SESSION['USER_LOGIN'])){ ?>
                                            <a href="logout.php"><?php echo $_SESSION["USER_FIRST_NAME"] ?>/logout<i class="icon-user icons" style="color:#f27437;"></i></a>
                                        <?php }else{
											echo '<a href="login.php"><i class="icon-user icons" style="color:#f27437;"></i></a>';
										}
										?>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons" style="color:#f27437;"></i></a>
                                        <a class="cart__menu" href="#"><span class="htc__qua"><?php echo $totalProduct ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart" id='update__cart'>
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <?php
                    if(count($_SESSION['cart'])>0){
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
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="product-details.php?id=<?php echo $pid?>">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.php?id=<?php echo $pid?>"><?php echo $pname?></a></h2>
                                <span class="quantity">QTY: <?php echo $qty?></span>
                                <span class="shp__price">$<?php echo $price?></span>
                            </div>
                            <div class="remove__btn">
                                <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php $total = $total + ($qty*$price); } } ?>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$<?php  echo $totalPrice = $total;?></li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.php">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.php">Checkout</a></li>
                    </ul>
                    <?php }else{ ?> 
                        <div class="shp__pro__details">
                            <h1>Votre panier est actuellement vide.</h1>
                        </div>
                        <?php } ?>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>