<?php
session_start();


$my=substr($_SESSION['word'],strpos($_SESSION['word'],':')+1,strlen($_SESSION['word']) );


include'bdd.php';

$sql = "SELECT * FROM events where id!=0 ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout || Asbab - eCommerce HTML5 Template</title>
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
    <link rel="stylesheet" href="css/peach.css">
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FullCalendar -->
    <link href='css/fullcalendar.css' rel='stylesheet' />

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />
	   <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="error();">

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
                                     <a href="index.html"><img src="images/logo/4.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.html">Home</a></li>
                                        <li class="drop"><a href="#">women</a>
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
                                        <li class="drop"><a href="#">men</a>
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
                                        <li class="drop"><a href="#">Product</a>
                                            <ul class="dropdown">
                                                <li><a href="product-grid.html">Product Grid</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="blog.html">blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.php">Blog Grid</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="cart.html">Cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="product-grid.html">product grid</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <?php if($_SESSION['word'][0]=="A"){ ?>
                                        <li><a href="gotoFront.html">gotofont</a></li>
                                    <?php } ?>
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
                                        </ul>
                                    </nav>
                                </div>  

                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="#"><i class="icon-user icons"></i></a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">2</span></a>
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

    <!-- Page Content -->
    <div class="container" style="position: top;">

        <div class="row">
            <div class="col-lg-12 text-center">
            
                <div id="calendar" class="col-centered"  >
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		
	
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="participer.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Participer</h4>
			  </div>
			  <div class="modal-body">
				 		
				
 					<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titre</label>
					<div class="col-sm-10">
					  <input type="text" name="title" id="title" readonly="" style="background: rgba(0, 0, 0, 0);border: none;">
					</div>
				  </div> 
				   <div class="form-group">
					<label for="description" class="col-sm-2 control-label">description</label>
					<div class="col-sm-10">
					  <input type="text" name="description" id="description"  readonly="" style="background: rgba(0, 0, 0, 0);border: none;">
					</div>
				  </div> 
				   <div class="form-group">
					<label for="ville" class="col-sm-2 control-label">ville</label>
					<div class="col-sm-10">
					 <input type="text" name="ville" id="ville" readonly="" style="background: rgba(0, 0, 0, 0);border: none;">
					</div>
				  </div> 
				   <div class="form-group">
					<label for="ville" class="col-sm-2 control-label">nombre de place max</label>
					<div class="col-sm-10">
					 <input type="text" name="nombre_part" id="nombre_part" readonly="" style="background: rgba(0, 0, 0, 0);border: none;">
					</div>
				  </div> 
                  <div class="form-group">
                    <label for="ville" class="col-sm-2 control-label">Etat</label>
                    <div class="col-sm-10">
                     <input type="text" name="nb_part" id="nb_part" readonly="" style="background: rgba(0, 0, 0, 0);border: none;">
                    </div>
                </div>
				

				  <input type="hidden" name="id" class="form-control" id="id">
                  <input type="hidden" name="title" class="form-control" id="title">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
              
				<button type="submit" class="btn btn-primary">Participer</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <script type="text/javascript">
        function error(){
            var x=window.location.search;
            if(x=="?error=1"){ alert('vous ne pouvez pas participer plus dune fois');}
                if(x=="?error=2"){ alert('vous devez être un client');}
                    if(x=="?error=3"){alert('Il n y a pas assez de place dans levent');}

             
        }</script>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	
	<script>

	$(document).ready(function() {
		
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; 
		var yyyy = today.getFullYear();
		today = mm+'-'+dd+'-'+yyyy;
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: ''
			},

			defaultDate: today.toString(),
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
				
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);  
					$('#ModalEdit #description').val(event.description);
					$('#ModalEdit #ville').val(event.ville);  
					$('#ModalEdit #nombre_part').val(event.nombre_part);  
                    $('#ModalEdit #nb_part').val(event.nb_part);    
					$('#ModalEdit').modal('show');
				});
			},
		
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
					description: '<?php echo $event['description']; ?>',
					ville: '<?php echo $event['ville']; ?>',
					nombre_part: '<?php echo $event['nombre_part']; ?>',
				    nb_part: '<?php if($event['nombre_part']<= $event['nbr_participent']){ echo "pas de place";}else echo"disponnible"; ?>',
					
				},
			<?php endforeach; ?>
			]
		});
		
	
		
	});

</script>
<br><br>
 <footer id="htc__footer">
            <!-- Start Footer Widget -->
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">ABOUT US</h2>
                                <div class="ft__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">information</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                        <li><a href="#">Terms  & Condition</a></li>
                                        <li><a href="#">Manufactures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">my account</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Our service</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">NEWSLETTER </h2>
                                <div class="ft__inner">
                                    <div class="news__input">
                                        <input type="text" placeholder="Your Mail*">
                                        <div class="send__btn">
                                            <a class="fr__btn" href="#">Send Mail</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
            </div>
            <!-- End Footer Widget -->
            <!-- Start Copyright Area -->
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All right reserved.</p>
                                <a href="#"><img src="images/others/shape/paypol.png" alt="payment images"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
 
</body>

</html>
