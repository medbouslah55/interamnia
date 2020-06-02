<?php
include'bdd.php';
$sql = "SELECT * FROM events WHERE  id!=0 ";

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

    <title>Bare - Start Bootstrap Template</title>

<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

<link rel="stylesheet" type="text/css" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css" />

<link rel="stylesheet" type="text/css" href="../../bower_components/datedropper/datedropper.min.css" />

<link rel="stylesheet" type="text/css" href="../../bower_components/spectrum/spectrum.css" />

<link rel="stylesheet" type="text/css" href="../../bower_components/jquery-minicolors/jquery.minicolors.css" />

<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color/color-1.css" id="color" />
<link rel="stylesheet" type="text/css" href="../assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />


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

<body>



<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="index-2.html">
<img class="img-fluid" src="../assets/images/logo.png" alt="Theme-Logo" />
</a>
<a class="mobile-options">
<i class="ti-more"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<div>
<ul class="nav-left">
<li>
<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
</li>
<li>
<a class="main-search morphsearch-search" href="#">

<i class="ti-search"></i>
</a>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>
<li class="mega-menu-top">
<a href="#">
Mega
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification row">
<li class="col-sm-3">
<h6 class="mega-menu-title">Popular Links</h6>
<ul class="mega-menu-links">
<li><a href="form-elements-component.html">Form Elements</a></li>
<li><a href="button.html">Buttons</a></li>
<li><a href="map-google.html">Maps</a></li>
<li><a href="user-card.html">Contact Cards</a></li>
<li><a href="user-profile.html">User Information</a></li>
<li><a href="auth-lock-screen.html">Lock Screen</a></li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Mailbox</h6>
<ul class="mega-mailbox">
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-folder"></i>
</div>
<div class="media-body">
<h5>Data Backup</h5>
<small class="text-muted">Store your data</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-headphone-alt"></i>
</div>
<div class="media-body">
<h5>Support</h5>
<small class="text-muted">24-hour support</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-dropbox"></i>
</div>
<div class="media-body">
<h5>Drop-box</h5>
<small class="text-muted">Store large amount of data in one-box only
</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-location-pin"></i>
</div>
<div class="media-body">
<h5>Location</h5>
<small class="text-muted">Find Your Location with ease of use</small>
</div>
</a>
</li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Gallery</h6>
<div class="row m-b-20">
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="../assets/images/mega-menu/01.jpg" alt="Gallery-1">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="../assets/images/mega-menu/02.jpg" alt="Gallery-2">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="../assets/images/mega-menu/03.jpg" alt="Gallery-3">
</div>
</div>
<div class="row m-b-20">
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="../assets/images/mega-menu/04.jpg" alt="Gallery-4">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="../assets/images/mega-menu/05.jpg" alt="Gallery-5">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="../assets/images/mega-menu/06.jpg" alt="Gallery-6">
</div>
</div>
<button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Contact Us</h6>
<div class="mega-menu-contact">
<div class="form-group row">
<label for="example-text-input" class="col-3 col-form-label">Name</label>
<div class="col-9">
<input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Email</label>
<div class="col-9">
<input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Contact</label>
<div class="col-9">
<input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="exampleTextarea" class="col-3 col-form-label">Message</label>
<div class="col-9">
<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>
</div>
</div>
</li>
</ul>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification lng-dropdown">
<a href="#" id="dropdown-active-item">
<i class="flag-icon flag-icon-gb m-r-5"></i> English
 </a>
<ul class="show-notification">
<li>
<a href="#" data-lng="en">
<i class="flag-icon flag-icon-gb m-r-5"></i> English
</a>
</li>
<li>
<a href="#" data-lng="es">
<i class="flag-icon flag-icon-es m-r-5"></i> Spanish
</a>
</li>
<li>
<a href="#" data-lng="pt">
<i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
</a>
</li>
<li>
<a href="#" data-lng="fr">
<i class="flag-icon flag-icon-fr m-r-5"></i> French
</a>
</li>
</ul>
</li>
<li class="header-notification">
<a href="#!">
<i class="ti-bell"></i>
<span class="badge">5</span>
</a>
<ul class="show-notification">

<li>

<?php 
    include_once('connection.php');
    $sql = "SELECT * FROM notif";
    //use for MySQLi-OOP
    $query = $conn->query($sql);
    while($row = $query->fetch_assoc()){ ?>

<div class="media">
<img class="d-flex align-self-center" src="../assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user"><?php echo $row['message']; ?></h5>
<p class="notification-msg"><?php echo $row['dates']; ?></p>
</div>
</div>
<?php } ?>
</li>


</ul>
</li>
<li class="header-notification">
<a href="#!" class="displayChatbox">
<i class="ti-comments"></i>
<span class="badge">9</span>
</a>
</li>
<li class="user-profile header-notification">
<a href="#!">
<img src="../assets/images/user.png" alt="User-Profile-Image">
<span>John Doe</span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">
<li>
<a href="#!">
<i class="ti-settings"></i> Settings
</a>
</li>
<li>
<a href="user-profile.html">
<i class="ti-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="ti-email"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="ti-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="#!">
<i class="ti-layout-sidebar-left"></i> Logout
</a>
</li>
</ul>
</li>
</ul>

<div id="morphsearch" class="morphsearch">
<form class="morphsearch-form">
<input class="morphsearch-input" type="search" placeholder="Search..." />
<button class="morphsearch-submit" type="submit">Search</button>
</form>
<div class="morphsearch-content">
<div class="dummy-column">
<h2>People</h2>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
<h3>Sara Soueidan</h3>
</a>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
<h3>Shaun Dona</h3>
</a>
</div>
<div class="dummy-column">
<h2>Popular</h2>
<a class="dummy-media-object" href="#!">
<img src="../assets/images/avatar-1.png" alt="PagePreloadingEffect" />
<h3>Page Preloading Effect</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="../assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
<h3>Draggable Dual-View Slideshow</h3>
</a>
</div>
<div class="dummy-column">
<h2>Recent</h2>
<a class="dummy-media-object" href="#!">
<img src="../assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
<h3>Tooltip Styles Inspiration</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="../assets/images/avatar-1.png" alt="NotificationStyles" />
<h3>Notification Styles Inspiration</h3>
</a>
</div>
</div>

<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
</div>

</div>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/task/task-u2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-5.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="../assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
<div class="form-icon">
<i class="icofont icofont-paper-plane"></i>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar" pcoded-header-position="relative">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="">
<div class="main-menu-header">
<img class="img-40" src="../assets/images/user.png" alt="User-Profile-Image">
<div class="user-details">
<span>John Doe</span>
<span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
</div>
</div>
<div class="main-menu-content">
<ul>
<li class="more-details">
<a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
<a href="#!"><i class="ti-settings"></i>Settings</a>
<a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
</li>
</ul>
</div>
</div>
<ul class="pcoded-item pcoded-left-item">




<div class="pcoded-navigatio-lavel" data-i18n="nav.category.support" menu-title-theme="theme5">Support</div>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-home"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="../blog_back/index.php">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.default">Gestion Blog</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="../../../frontend/asbab/blog.php">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Affichage blog front</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="index.php">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.crm">Gestion Event</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="./statistique.php">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.crm">Statistique Event</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
</ul>
</li>


</div>
</nav>
  

    <!-- Page Content -->
    <div class="container" style="position: top;">

        <div class="row">
            <div class="col-lg-12 text-center">
            
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" onsubmit="return number();" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title" required="">
                      <center><h6 id="titre" style="color: red;"></h6></center>
					</div>
				  </div>

				    <div class="form-group">
					<label for="ville" class="col-sm-2 control-label">ville</label>
					<div class="col-sm-10">
					  	  <select name="ville" class="form-control" id="ville" required="">
						  <option  value="">Choose</option>
						  <option  value="Tunis">Tunis</option>
						  <option  value="Gabes">Gabes</option>
						  <option  value="Kasserine">Kasserine</option>	
						  </select>					  
					</div>
				  </div>

				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color" required="">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">End date</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="description" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-10">
					  <textarea type="text" name="description" class="form-control" id="description" required=""></textarea>
					</div>
				  </div>
				   <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">nombre de places</label>
					<div class="col-sm-10">
					  <input type="number" name="nombre" class="form-control" id="nombre" required="">
                      <center><h6 id="numbre" style="color: red;"></h6></center>
					</div>
				  </div>
				 
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		<script type="text/javascript">
      
function number(){
    var nb = document.getElementById("nombre").value;
       if ( nb.length>4 || isNaN(nb) || nb<=0)
       {
        document.getElementById("number").innerHTML = 'le nombre doit être entre 0 et 999' ;
            return false;  
       }
}
    function majuscule() {
  var x = document.getElementById("title").value;
  if(x[0]!=x[0].toUpperCase())
  {
     document.getElementById("titre").innerHTML = "Le titre doit commencer par une majuscule ";
     return false;
        
}
function error()
{
   var bool1=number();
   var bool2=majuscule();
   if(bool1==false || bool2==false)
    {
        return false;
    }
}     
        </script>
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->
    <script type="text/javascript"></script>

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
				right: 'month,basicWeek,basicDay'
			},

			defaultDate: today.toString(),
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

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
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});

</script>

</body>

 

<script type="text/javascript" src="../../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../../bower_components/classie/classie.js"></script>


<script type="text/javascript" src="../assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="../../bower_components/datedropper/datedropper.min.js"></script>

<script type="text/javascript" src="../../bower_components/spectrum/spectrum.js"></script>
<script type="text/javascript" src="../../bower_components/jscolor/jscolor.js"></script>



<script type="text/javascript" src="../../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>



<script type="text/javascript" src="../assets/js/script.js"></script>
<script type="text/javascript" src="../assets/pages/advance-elements/custom-picker.js"></script>
<script src="../assets/js/pcoded.min.js"></script>
<script src="../assets/js/demo-12.js"></script>
>


</html>

