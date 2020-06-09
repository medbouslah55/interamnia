<?php 
require('header.php');
$order_id=get_safe_value($con,$_GET['id']);
$order_status_arr=mysqli_fetch_assoc(mysqli_query($con,"select order_status.name,order_status.id from order_status,`order` where `order`.id='$order_id' and `order`.order_status=order_status.id"));
$order_status=$order_status_arr['id'];
if(isset($_POST['update_order_status'])){
	$update_order_status=$_POST['update_order_status'];
	mysqli_query($con,"update `order` set order_status='$update_order_status' where id='$order_id'");
}
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from flatable.phoenixcoded.net/default/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:43:40 GMT -->
   <head>
      <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Phoenixcoded">
      <meta name="keywords" content="flat ui, admin , Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="Phoenixcoded">
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <link href="../bower_components/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
      <link href="../bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="assets/css/component.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
      <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
      <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="../bower_components/c3/c3.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="assets/pages/data-table/css/buttons.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css">
      <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

        <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css" />

        <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" type="text/css" href="../bower_components/multiselect/css/multi-select.css" />
   </head>
   <body>
      <div class="theme-loader">
         <div class="ball-scale">
            <div></div>
         </div>
      </div>
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
                     <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
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
                                       <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/01.jpg" alt="Gallery-1"></div>
                                       <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/02.jpg" alt="Gallery-2"></div>
                                       <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/03.jpg" alt="Gallery-3"></div>
                                    </div>
                                    <div class="row m-b-20">
                                       <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/04.jpg" alt="Gallery-4"></div>
                                       <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/05.jpg" alt="Gallery-5"></div>
                                       <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/06.jpg" alt="Gallery-6"></div>
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
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                 </li>
                                 <li>
                                    <div class="media">
                                       <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h5 class="notification-user">John Doe</h5>
                                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                          <span class="notification-time">30 minutes ago</span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="media">
                                       <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h5 class="notification-user">Joseph William</h5>
                                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                          <span class="notification-time">30 minutes ago</span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="media">
                                       <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h5 class="notification-user">Sara Soudein</h5>
                                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                          <span class="notification-time">30 minutes ago</span>
                                       </div>
                                    </div>
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
                              <img src="assets/images/user.png" alt="User-Profile-Image">
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
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                    <h3>Page Preloading Effect</h3>
                                 </a>
                                 <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                    <h3>Draggable Dual-View Slideshow</h3>
                                 </a>
                              </div>
                              <div class="dummy-column">
                                 <h2>Recent</h2>
                                 <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                    <h3>Tooltip Styles Inspiration</h3>
                                 </a>
                                 <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
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
                                 <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Josephin Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Lary Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Alice</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Alia</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Suzen</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                 <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Michael Scofield</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Irina Shayk</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                 <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Sara Tancredi</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Samon</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Daizy Mendize</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                 <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Loren Scofield</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Shayk</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Sara</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
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
                  <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
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
                     <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
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
                              <img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
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
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu active pcoded-trigger">
                              <a href="javascript:void(0)">
                              <span class="pcoded-micon"><i class="ti-home"></i></span>
                              <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="index-2.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="active ">
                                    <a href="dashboard-ecommerce.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dashboard-crm.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dashboard-analytics.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>
                                    <span class="pcoded-badge label label-info ">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dashboard-project.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)">
                              <span class="pcoded-micon"><i class="ti-layout"></i></span>
                              <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page layouts</span>
                              <span class="pcoded-badge label label-warning">NEW</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                    <span class="pcoded-mtext">Vertical</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                       <li class=" ">
                                          <a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Static Layout</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="menu-header-fixed.html" data-i18n="nav.page_layout.vertical.header-fixed">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Header Fixed</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="menu-compact.html" data-i18n="nav.page_layout.vertical.compact">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Compact</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="menu-sidebar.html" data-i18n="nav.page_layout.vertical.sidebar-fixed">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Sidebar Fixed</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class=" pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.page_layout.horizontal.main">
                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                    <span class="pcoded-mtext">Horizontal</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                       <li class=" ">
                                          <a href="menu-horizontal-static.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-layout">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Static Layout</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="menu-horizontal-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-layout">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Fixed layout</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="menu-horizontal-icon.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-with-icon">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Static With Icon</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="menu-horizontal-icon-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-with-icon">
                                          <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                          <span class="pcoded-mtext">Fixed With Icon</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class=" ">
                                    <a href="menu-bottom.html" data-i18n="nav.page_layout.bottom-menu">
                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                    <span class="pcoded-mtext">Bottom Menu</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="box-layout.html" target="_blank" data-i18n="nav.page_layout.box-layout">
                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                    <span class="pcoded-mtext">Box Layout</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="menu-rtl.html" target="_blank" data-i18n="nav.page_layout.rtl">
                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                    <span class="pcoded-mtext">RTL</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                              <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
                              <span class="pcoded-mtext">Navigation</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="navbar-light.html" data-i18n="nav.navigate.navbar">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Navbar</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="navbar-dark.html" data-i18n="nav.navigate.navbar-inverse">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Navbar Inverse</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="navbar-elements.html" data-i18n="nav.navigate.navbar-with-elements">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Navbar With Elements</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class=" ">
                              <a href="widget.html" data-i18n="nav.widget.main">
                              <span class="pcoded-micon"><i class="ti-view-grid"></i></span>
                              <span class="pcoded-mtext">Widget</span>
                              <span class="pcoded-badge label label-danger">100+</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element" menu-title-theme="theme5">UI Element</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)">
                              <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                              <span class="pcoded-mtext">Basic Components</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="alert.html" data-i18n="nav.basic-components.alert">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Alert</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="breadcrumb.html" data-i18n="nav.basic-components.breadcrumbs">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Breadcrumbs</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="button.html" data-i18n="nav.basic-components.button">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Button</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="box-shadow.html" data-i18n="nav.basic-components.box-shadow">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Box-Shadow</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="accordion.html" data-i18n="nav.basic-components.collapse–accordion">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Accordion</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="generic-class.html" data-i18n="nav.basic-components.generic-class">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Generic Class</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="tabs.html" data-i18n="nav.basic-components.tabs">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Tabs</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="color.html" data-i18n="nav.basic-components.color">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Color</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="label-badge.html" data-i18n="nav.basic-components.label-badge">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Label Badge</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="progress-bar.html" data-i18n="nav.basic-components.progress-bar">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Progress Bar</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="preloader.html" data-i18n="nav.basic-components.pre-loader">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Pre-Loader</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="list.html" data-i18n="nav.basic-components.list">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">List</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="tooltip.html" data-i18n="nav.basic-components.tooltip-popover">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Tooltip And Popover</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="typography.html" data-i18n="nav.basic-components.typography">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Typography</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="other.html" data-i18n="nav.basic-components.other">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Other</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.advance-components.main">
                              <span class="pcoded-micon"><i class="ti-crown"></i></span>
                              <span class="pcoded-mtext">Advance Components</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="draggable.html" data-i18n="nav.advance-components.draggable">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Draggable</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="bs-grid.html" data-i18n="nav.advance-components.grid-stack">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Grid Stack</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="light-box.html" data-i18n="nav.advance-components.light-box">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Light Box</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="modal.html" data-i18n="nav.advance-components.modal">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Modal</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="modal-form.html" data-i18n="nav.advance-components.modal-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Modal Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="notification.html" data-i18n="nav.advance-components.notifications">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Notifications</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="notify.html" data-i18n="nav.advance-components.pnotify">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">PNOTIFY</span>
                                    <span class="pcoded-badge label label-info">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="rating.html" data-i18n="nav.advance-components.rating">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Rating</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="range-slider.html" data-i18n="nav.advance-components.range-slider">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Range Slider</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="slider.html" data-i18n="nav.advance-components.slider">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Slider</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="syntax-highlighter.html" data-i18n="nav.advance-components.syntax-highlighter">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Syntax Highlighter</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="tour.html" data-i18n="nav.advance-components.tour">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Tour</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="treeview.html" data-i18n="nav.advance-components.tree-view">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Tree View</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="nestable.html" data-i18n="nav.advance-components.nestable">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Nestable</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="toolbar.html" data-i18n="nav.advance-components.toolbar">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Toolbar</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="x-editable.html" data-i18n="nav.advance-components.x-editable">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">X-Editable</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.extra-components.main">
                              <span class="pcoded-micon"><i class="ti-gift"></i></span>
                              <span class="pcoded-mtext">Extra Components</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="session-timeout.html" data-i18n="nav.extra-components.session-timeout">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Session Timeout</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="session-idle-timeout.html" data-i18n="nav.extra-components.session-idle-timeout">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Session Idle Timeout</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="offline.html" data-i18n="nav.extra-components.offline">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Offline</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class=" ">
                              <a href="animation.html" data-i18n="nav.animations.main">
                              <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i></span>
                              <span class="pcoded-mtext">Animations</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class=" ">
                              <a href="sticky.html" data-i18n="nav.sticky-notes.main">
                              <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
                              <span class="pcoded-mtext">Sticky Notes</span>
                              <span class="pcoded-badge label label-danger">HOT</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.icons.main">
                              <span class="pcoded-micon"><i class="ti-star"></i></span>
                              <span class="pcoded-mtext">Icons</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="icon-font-awesome.html" data-i18n="nav.icons.font-awesome">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Font Awesome</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-themify.html" data-i18n="nav.icons.themify">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Themify</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-simple-line.html" data-i18n="nav.icons.simple-line-icon">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Simple Line Icon</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-ion.html" data-i18n="nav.icons.ion-icon">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Ion Icon</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-material-design.html" data-i18n="nav.icons.material-design">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Material Design</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-icofonts.html" data-i18n="nav.icons.ico-fonts">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Ico Fonts</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-weather.html" data-i18n="nav.icons.weather-icon">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Weather Icon</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-typicons.html" data-i18n="nav.icons.typicons">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Typicons</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="icon-flags.html" data-i18n="nav.icons.flags">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Flags</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme5">Forms</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                              <span class="pcoded-micon"><i class="ti-layers"></i></span>
                              <span class="pcoded-mtext">Form Components</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="form-elements-component.html" data-i18n="nav.form-components.form-components">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Form Components</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="form-elements-add-on.html" data-i18n="nav.form-components.form-elements-add-on">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Form-Elements-Advance</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="form-validation.html" data-i18n="nav.form-components.form-validation">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Form Validation</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class=" ">
                              <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                              <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                              <span class="pcoded-mtext">Form Picker</span>
                              <span class="pcoded-badge label label-warning">NEW</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.json-form.main">
                              <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                              <span class="pcoded-mtext">JSON Form</span>
                              <span class="pcoded-badge label label-danger">HOT</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="json-forms/simple-form.html" data-i18n="nav.json-form.simple-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Simple Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/clubs.html" data-i18n="nav.json-form.clubs-view">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Clubs(View Selector)</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/customer-form.html" data-i18n="nav.json-form.customer-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Customer Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/customer-profile-display-form.html" data-i18n="nav.json-form.profile-display">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Profile Display</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/customer-profile-edit-form.html" data-i18n="nav.json-form.profile-edit">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Profile Edit</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/customer-profile-read-only.html" data-i18n="nav.json-form.profile-ready-only">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Profile Ready Only</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/json-form-fields.html" data-i18n="nav.json-form.form-fields">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Form Fields</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/registration-click-validation.html" data-i18n="nav.json-form.registration-validation">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Registration Validation</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/registration-automatic-validation.html" data-i18n="nav.json-form.automatic-validation">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Automatic Validation</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="json-forms/localized-login.html" data-i18n="nav.json-form.localized-login">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Localized Login</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class=" ">
                              <a href="form-select.html" data-i18n="nav.form-select.main">
                              <span class="pcoded-micon"><i class="ti-shortcode"></i></span>
                              <span class="pcoded-mtext">Form Select</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class=" ">
                              <a href="form-masking.html" data-i18n="nav.form-masking.main">
                              <span class="pcoded-micon"><i class="ti-write"></i></span>
                              <span class="pcoded-mtext">Form Masking</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class=" ">
                              <a href="form-wizard.html" data-i18n="nav.form-wizard.main">
                              <span class="pcoded-micon"><i class="ti-archive"></i></span>
                              <span class="pcoded-mtext">Form Wizard</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.ready-to-use.main">
                              <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                              <span class="pcoded-mtext">Ready To Use</span>
                              <span class="pcoded-badge label label-danger">HOT</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="ready-cloned-elements-form.html" data-i18n="nav.ready-to-use.cloned-elements-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Cloned Elements Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-currency-form.html" data-i18n="nav.ready-to-use.currency-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Currency Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-form-booking.html" data-i18n="nav.ready-to-use.booking-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Booking Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-form-booking-multi-steps.html" data-i18n="nav.ready-to-use.booking-multi-steps-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Booking Multi Steps Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-form-comment.html" data-i18n="nav.ready-to-use.comment-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Comment Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-form-contact.html" data-i18n="nav.ready-to-use.contact-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Contact Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-job-application-form.html" data-i18n="nav.ready-to-use.job-application-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Job Application Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-js-addition-form.html" data-i18n="nav.ready-to-use.jS-addition-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">JS Addition Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-login-form.html" data-i18n="nav.ready-to-use.login-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Login Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-popup-modal-form.html" target="_blank" data-i18n="nav.ready-to-use.popup-modal-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Popup Modal Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-registration-form.html" data-i18n="nav.ready-to-use.registration-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Registration Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-review-form.html" data-i18n="nav.ready-to-use.review-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Review Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-subscribe-form.html" data-i18n="nav.ready-to-use.subscribe-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Subscribe Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-suggestion-form.html" data-i18n="nav.ready-to-use.suggestion-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Suggestion Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="ready-tabs-form.html" data-i18n="nav.ready-to-use.tabs-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Tabs Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables" menu-title-theme="theme5">Tables</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.bootstrap-table.main">
                              <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                              <span class="pcoded-mtext">Bootstrap Table</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="bs-basic-table.html" data-i18n="nav.bootstrap-table.basic-table">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Basic Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="bs-table-sizing.html" data-i18n="nav.bootstrap-table.sizing-table">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Sizing Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="bs-table-border.html" data-i18n="nav.bootstrap-table.border-table">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Border Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="bs-table-styling.html" data-i18n="nav.bootstrap-table.styling-table">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Styling Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.data-table.main">
                              <span class="pcoded-micon"><i class="ti-widgetized"></i></span>
                              <span class="pcoded-mtext">Data Table</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="bs-basic-table.html" data-i18n="nav.bootstrap-table.basic-table">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Basic Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-basic.html" data-i18n="nav.data-table.basic-initialization">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Basic Initialization</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-advance.html" data-i18n="nav.data-table.advance-initialization">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Advance Initialization</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-styling.html" data-i18n="nav.data-table.styling">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Styling</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-api.html" data-i18n="nav.data-table.api">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">API</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ajax.html" data-i18n="nav.data-table.ajax">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Ajax</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-server-side.html" data-i18n="nav.data-table.server-side">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Server Side</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-plugin.html" data-i18n="nav.data-table.plug-in">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Plug-In</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-data-sources.html" data-i18n="nav.data-table.data-sources">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Data Sources</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu">
                              <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.main">
                              <span class="pcoded-micon"><i class="ti-loop"></i></span>
                              <span class="pcoded-mtext">Data Table Extensions</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class=" ">
                                    <a href="dt-ext-autofill.html" data-i18n="nav.data-table-extensions.autofill">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">AutoFill</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.button.main">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Button</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                       <li class=" ">
                                          <a href="dt-ext-basic-buttons.html" data-i18n="nav.data-table-extensions.button.basic-button">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Basic Button</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="dt-ext-buttons-flash.html" data-i18n="nav.data-table-extensions.button.flash-button">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Flash Button</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="dt-ext-buttons-html-5-data-export.html" data-i18n="nav.data-table-extensions.button.html-data-export">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Html-5 Data Export</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class=" ">
                                          <a href="dt-ext-buttons-print.html" data-i18n="nav.data-table-extensions.button.print-button">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Print Button</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-col-reorder.html" data-i18n="nav.data-table-extensions.col-reorder">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Col Reorder</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-fixed-columns.html" data-i18n="nav.data-table-extensions.fixed-columns">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Fixed Columns</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-fixed-header.html" data-i18n="nav.data-table-extensions.fixed-header">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Fixed Header</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-key-table.html" data-i18n="nav.data-table-extensions.key-table">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Key Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-responsive.html" data-i18n="nav.data-table-extensions.responsive">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Responsive</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-row-reorder.html" data-i18n="nav.data-table-extensions.row-recorder">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Row Recorder</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-scroller.html" data-i18n="nav.data-table-extensions.scroller">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Scroller</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class=" ">
                                    <a href="dt-ext-select.html" data-i18n="nav.data-table-extensions.select-tbl">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Select Table</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class=" ">
                              <a href="foo-table.html" data-i18n="nav.foo-table.main">
                              <span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>
                              <span class="pcoded-mtext">FooTable</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.handson-table.main">
                              <span class="pcoded-micon"><i class="ti-view-list"></i></span>
                              <span class="pcoded-mtext">Handson Table</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="handson-appearance.html" data-i18n="nav.handson-table.appearance">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Appearance</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-data-operation.html" data-i18n="nav.handson-table.data-operation">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Data Operation</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-rows-cols.html" data-i18n="nav.handson-table.rows-columns">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Rows Columns</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-columns-only.html" data-i18n="nav.handson-table.columns-Only">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Columns Only</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-cell-features.html" data-i18n="nav.handson-table.cell-features">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Cell Features</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-cell-types.html" data-i18n="nav.handson-table.cell-types">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Cell Types</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-integrations.html" data-i18n="nav.handson-table.integrations">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Integrations</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-rows-only.html" data-i18n="nav.handson-table.rows-Only">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Rows Only</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="handson-utilities.html" data-i18n="nav.handson-table.utilities">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Utilities</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="">
                              <a href="editable-table.html" data-i18n="nav.editable-table.main">
                              <span class="pcoded-micon"><i class="ti-write"></i></span>
                              <span class="pcoded-mtext">Editable Table</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.chart-and-maps" menu-title-theme="theme5">Chart And Maps</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.charts.main"> <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i></span> <span class="pcoded-mtext">Charts</span> <span class="pcoded-mcaret"></span> </a> 
                              <ul class="pcoded-submenu">
                                 <li class=""> <a href="chart-google.html" data-i18n="nav.charts.google-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Google Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-echart.html" data-i18n="nav.charts.echarts"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Echarts</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-chartjs.html" data-i18n="nav.charts.chartjs"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">ChartJs</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-list.html" data-i18n="nav.charts.list-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">List Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-float.html" data-i18n="nav.charts.float-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Float Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-knob.html" data-i18n="nav.charts.know-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Know chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-morris.html" data-i18n="nav.charts.morris-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Morris Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-nvd3.html" data-i18n="nav.charts.nvd3-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Nvd3 Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-peity.html" data-i18n="nav.charts.peity-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Peity Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-radial.html" data-i18n="nav.charts.radial chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Radial Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-rickshaw.html" data-i18n="nav.charts.rickshaw-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Rickshaw Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-sparkline.html" data-i18n="nav.charts.sparkline-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Sparkline Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="chart-c3.html" data-i18n="nav.charts.c3-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">C3 Chart</span> <span class="pcoded-mcaret"></span> </a> </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.maps.main"> <span class="pcoded-micon"><i class="ti-map-alt"></i></span> <span class="pcoded-mtext">Maps</span> <span class="pcoded-mcaret"></span> </a> 
                              <ul class="pcoded-submenu">
                                 <li class=""> <a href="map-google.html" data-i18n="nav.maps.google-maps"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Google Maps</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="map-vector.html" data-i18n="nav.maps.vector-map"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Vector Maps</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="map-api.html" data-i18n="nav.maps.google-map-api"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Google Map Search API</span> <span class="pcoded-mcaret"></span> </a> </li>
                                 <li class=""> <a href="location.html" data-i18n="nav.maps.location"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Location</span> <span class="pcoded-mcaret"></span> </a> </li>
                              </ul>
                           </li>
                           <li class=""> <a href="landingpage/index.html" target="_blank" data-i18n="nav.landing-page.main"> <span class="pcoded-micon"><i class="ti-mobile"></i></span> <span class="pcoded-mtext">Landing Page</span> <span class="pcoded-mcaret"></span> </a> </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.pages" menu-title-theme="theme5">Pages</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.authentication.main">
                              <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                              <span class="pcoded-mtext">Authentication</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="auth-normal-sign-in.html" target="_blank" data-i18n="nav.authentication.login-bg-image">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Login With BG Image</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-sign-in-social.html" target="_blank" data-i18n="nav.authentication.login-soc-icon">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Login With Social Icon</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-sign-in-social-header-footer.html" target="_blank" data-i18n="nav.authentication.login-soc-h-f">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Login Social With Header And Footer</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-normal-sign-in-header-footer.html" target="_blank" data-i18n="nav.authentication.login-h-f">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Login With Header And Footer</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-sign-up.html" target="_blank" data-i18n="nav.authentication.registration-bg-image">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Registration BG Image</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-sign-up-social.html" target="_blank" data-i18n="nav.authentication.registration-soc-icon">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Registration Social Icon</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-sign-up-social-header-footer.html" target="_blank" data-i18n="nav.authentication.registration-soc-h-f">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Registration Social With Header And Footer</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-sign-up-header-footer.html" target="_blank" data-i18n="nav.authentication.registration-h-f">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Registration With Header And Footer</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-multi-step-sign-up.html" target="_blank" data-i18n="nav.authentication.multi-step-registration">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Multi Step Registration</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-reset-password.html" target="_blank" data-i18n="nav.authentication.forgot-password">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Forgot Password</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-lock-screen.html" target="_blank" data-i18n="nav.authentication.lock-screen">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Lock Screen</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="auth-modal.html" target="_blank" data-i18n="nav.authentication.modal">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Modal</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.maintenance.main">
                              <span class="pcoded-micon"><i class="ti-settings"></i></span>
                              <span class="pcoded-mtext">Maintenance</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="error.html" data-i18n="nav.maintenance.error">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Error</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="comming-soon.html" data-i18n="nav.maintenance.comming-soon">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Comming Soon</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="offline-ui.html" data-i18n="nav.maintenance.offline-ui">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Offline UI</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.user-profile.main">
                              <span class="pcoded-micon"><i class="ti-user"></i></span>
                              <span class="pcoded-mtext">User Profile</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="timeline.html" data-i18n="nav.user-profile.timeline">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Timeline</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="timeline-social.html" data-i18n="nav.user-profile.timeline-social">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Timeline Social</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="user-profile.html" data-i18n="nav.user-profile.user-profile">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">User Profile</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="user-card.html" data-i18n="nav.user-profile.user-card">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">User Card</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.blog.main">
                              <span class="pcoded-micon"><i class="ti-comment-alt"></i></span>
                              <span class="pcoded-mtext">Blog</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="blog.html" data-i18n="nav.blog.blog">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Blog</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="blog-detail.html" data-i18n="nav.blog.blog-detail">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Blog Detail</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="blog-detail-left.html" data-i18n="nav.blog.blog-left-side">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Blog With Left Sidebar</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="blog-detail-right.html" data-i18n="nav.blog.blog-right-sidebar">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Blog With Right Sidebar</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.e-commerce.main">
                              <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>
                              <span class="pcoded-mtext">E-Commerce</span>
                              <span class="pcoded-badge label label-danger">NEW</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="product.html" data-i18n="nav.e-commerce.product">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Product</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="product-list.html" data-i18n="nav.e-commerce.product-list">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Product List</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="product-edit.html" data-i18n="nav.e-commerce.product-edit">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Product Edit</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="product-detail.html" data-i18n="nav.e-commerce.product-detail">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Product Detail</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="product-cart.html" data-i18n="nav.e-commerce.product-card">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Product Card</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="product-payment.html" data-i18n="nav.e-commerce.credit-card-form">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Credit Card Form</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.email.main">
                              <span class="pcoded-micon"><i class="ti-email"></i></span>
                              <span class="pcoded-mtext">E-Email</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="email-compose.html" data-i18n="nav.email.compose-mail">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Compose Email</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="email-inbox.html" data-i18n="nav.email.inbox">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Inbox</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="email-read.html" data-i18n="nav.email.read-read-mail">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Read Mail</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" data-i18n="nav.email.email-template.main">
                                    <span class="pcoded-micon"><i class="ti-email"></i></span>
                                    <span class="pcoded-mtext">Email Template</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                       <li class="">
                                          <a href="email-templates/email-welcome.html" data-i18n="nav.email.email-template.welcome-email">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Welcome Email</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class="">
                                          <a href="email-templates/email-password.html" data-i18n="nav.email.email-template.reset-password">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Reset Password</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class="">
                                          <a href="email-templates/email-newsletter.html" data-i18n="nav.email.email-template.newsletter-email">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Newsletter Email</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class="">
                                          <a href="email-templates/email-launch.html" data-i18n="nav.email.email-template.app-launch">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">App Launch</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                       <li class="">
                                          <a href="email-templates/email-activation.html" data-i18n="nav.email.email-template.activation-code">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Activation Code</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.app" menu-title-theme="theme5">App</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class=" ">
                              <a href="chat.html" data-i18n="nav.chat.main">
                              <span class="pcoded-micon"><i class="ti-comments"></i></span>
                              <span class="pcoded-mtext">Chat</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class=" ">
                              <a href="crm-contact.html" data-i18n="nav.crm-contact.main">
                              <span class="pcoded-micon"><i class="ti-layout-list-thumb"></i></span>
                              <span class="pcoded-mtext">CRM Contact</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.social.main">
                              <span class="pcoded-micon"><i class="ti-dribbble"></i></span>
                              <span class="pcoded-mtext">Social</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="fb-wall.html" data-i18n="nav.social.fb-wall">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Fb Wall</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="message.html" data-i18n="nav.social.messages">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Messages</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.task.main">
                              <span class="pcoded-micon"><i class="ti-check-box"></i></span>
                              <span class="pcoded-mtext">Task</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="task-list.html" data-i18n="nav.task.task-list">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Task List</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="task-board.html" data-i18n="nav.task.task-board">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Task Board</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="task-detail.html" data-i18n="nav.task.task-detail">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Task Detail</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="issue-list.html" data-i18n="nav.task.issue list">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Issue List</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.to-do.main">
                              <span class="pcoded-micon"><i class="ti-notepad"></i></span>
                              <span class="pcoded-mtext">To-Do</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="todo.html" data-i18n="nav.to-do.todo">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">To-Do</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="notes.html" data-i18n="nav.to-do.notes">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Notes</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.gallery.main">
                              <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                              <span class="pcoded-mtext">Gallery</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="gallery-grid.html" data-i18n="nav.gallery.gallery-grid">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Gallery-Grid</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="gallery-masonry.html" data-i18n="nav.gallery.masonry-gallery">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Masonry Gallery</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="gallery-advance.html" data-i18n="nav.gallery.advance-gallery">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Advance Gallery</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.search.main">
                              <span class="pcoded-micon"><i class="ti-search"></i></span>
                              <span class="pcoded-mtext">Search</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="search-result.html" data-i18n="nav.search.simple-search">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Simple Search</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="search-result2.html" data-i18n="nav.search.grouping-search">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Grouping Search</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.job-search.main">
                              <span class="pcoded-micon"><i class="ti-medall-alt"></i></span>
                              <span class="pcoded-mtext">Job Search</span>
                              <span class="pcoded-badge label label-danger">NEW</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="job-card-view.html" data-i18n="nav.job-search.card-view">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Card View</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="job-details.html" data-i18n="nav.job-search.job-detailed">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Job Detailed</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="job-find.html" data-i18n="nav.job-search.job-find">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Job Find</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="job-panel-view.html" data-i18n="nav.job-search.job-panel-view">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Job Panel View</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.extension" menu-title-theme="theme5">Extension</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.editor.main">
                              <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                              <span class="pcoded-mtext">Editor</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="ck-editor.html" data-i18n="nav.editor.ck-editor">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">CK-Editor</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="wysiwyg-editor.html" data-i18n="nav.editor.wysiwyg-editor">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">WYSIWYG Editor</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="ace-editor.html" data-i18n="nav.editor.ace-editor">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Ace Editor</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="summernote.html" data-i18n="nav.editor.summer-note-editor">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Summer Note Editor</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="long-press-editor.html" data-i18n="nav.editor.long-press-editor">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Long Press Editor</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        >
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.invoice.main">
                              <span class="pcoded-micon"><i class="ti-layout-media-right"></i></span>
                              <span class="pcoded-mtext">Invoice</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="invoice.html" data-i18n="nav.invoice.invoice">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Invoice</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="invoice-summary.html" data-i18n="nav.invoice.invoice-summery">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Invoice Summary</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="invoice-list.html" data-i18n="nav.invoice.invoice-list">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Invoice List</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.event-calendar.main">
                              <span class="pcoded-micon"><i class="ti-calendar"></i></span>
                              <span class="pcoded-mtext">Event Calendar</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="event-full-calender.html" data-i18n="nav.full-calendar.full-calendar">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Full Calendar</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="event-clndr.html" data-i18n="nav.clnder.clnder">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">CLNDER</span>
                                    <span class="pcoded-badge label label-info">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="">
                              <a href="image-crop.html" data-i18n="nav.image-cropper.main">
                              <span class="pcoded-micon"><i class="ti-cut"></i></span>
                              <span class="pcoded-mtext">Image Cropper</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="">
                              <a href="file-upload.html" data-i18n="nav.file-upload.main">
                              <span class="pcoded-micon"><i class="ti-cloud-up"></i></span>
                              <span class="pcoded-mtext">File Upload</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.internationalize.main">
                              <span class="pcoded-micon"><i class="ti-world"></i></span>
                              <span class="pcoded-mtext">Internationalize</span>
                              <span class="pcoded-badge label label-danger">HOT</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="internationalization/internationalization-after-init.html" data-i18n="nav.internationalize.after-init">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">After Init</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="internationalization/internationalization-fallback.html" data-i18n="nav.internationalize.fallback">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Fallback</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="internationalization/internationalization-on-init.html" data-i18n="nav.internationalize.on-int">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">On Init</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="internationalization/internationalization-resources.html" data-i18n="nav.internationalize.resources">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Resources</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="internationalization/internationalization-xhr-backend.html" data-i18n="nav.internationalize.xhr-backend">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">XHR Backend</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="">
                              <a href="change-loges.html" data-i18n="nav.change-loges.main">
                              <span class="pcoded-micon"><i class="ti-list"></i></span>
                              <span class="pcoded-mtext">Change Loges</span>
                              <span class="pcoded-badge label label-warning">1.0</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other" menu-title-theme="theme5">Other</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="pcoded-hasmenu ">
                              <a href="javascript:void(0)" data-i18n="nav.menu-levels.main">
                              <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                              <span class="pcoded-mtext">Menu Levels</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                              <ul class="pcoded-submenu">
                                 <li class="">
                                    <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-21">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Menu Level 2.1</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                                 <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-22.main">
                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                    <span class="pcoded-mtext">Menu Level 2.2</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                       <li class="">
                                          <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext">Menu Level 3.1</span>
                                          <span class="pcoded-mcaret"></span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="">
                                    <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-23">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Menu Level 2.3</span>
                                    <span class="pcoded-mcaret"></span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="">
                              <a href="javascript:void(0)" data-i18n="nav.disabled-menu.main" class="disabled">
                              <span class="pcoded-micon"><i class="ti-na"></i></span>
                              <span class="pcoded-mtext">Disabled Menu</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="">
                              <a href="sample-page.html" data-i18n="nav.sample-page.main">
                              <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>
                              <span class="pcoded-mtext">Sample Page</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support" menu-title-theme="theme5">Support</div>
                        <ul class="pcoded-item pcoded-left-item">
                           <li class="">
                              <a href="http://flatable.phoenixcoded.net/doc" data-i18n="nav.documentation.main" target="_blank">
                              <span class="pcoded-micon"><i class="ti-file"></i></span>
                              <span class="pcoded-mtext">Documentation</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://support.phoenixcoded.net/#/home" target="_blank" data-i18n="nav.submit-issue.main">
                              <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                              <span class="pcoded-mtext">Submit Issue</span>
                              <span class="pcoded-mcaret"></span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </nav>
                  <div class="pcoded-content">
                     <div class="pcoded-inner-content">
                        <div class="main-body">
                           <div class="page-wrapper">
                              <div class="page-header">
                                 <div class="page-header-title">
                                     <a href="dashboard-ecommerce.php" class="btn btn-primary btn-round"><h4><i class="ti-arrow-circle-left"></i>  Retern</h4></a>
                                    
                                 </div>
                                 <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                       <li class="breadcrumb-item">
                                          <a href="index-2.html">
                                          <i class="icofont icofont-home"></i>
                                          </a>
                                       </li>
                                       <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                       <li class="breadcrumb-item"><a href="dashboard-ecommerce.php">Ecommerce Dashboard</a></li>
                                       <li class="breadcrumb-item"><a href="#!">Order Details</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="page-body">
                                 <div class="row">
                                    <div class="col-xl-8">
                                       <div class="card">
                                          <div class="card-header">
                                             <h5>Order details</h5>
                                          </div>
                                          <div class="card-block">
                                             <div class="table-responsive">
                                                <div class="dt-responsive table-responsive">
                                                   <table id="res-config" class="table table-bordered w-100">
                                                      <thead>
                                                         <tr>
                                                            <th>Image</th>
                                                            <th>Product Name</th>
                                                            <th>Amount</th>
                                                            <th>Quantite</th>
                                                            <th>Total prix</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                      <?php
                                                        $res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,produit.nom_produit,produit.photo_produit,`order`.address,`order`.city,`order`.pincode from order_detail,produit ,`order` where order_detail.order_id='$order_id' and  order_detail.product_id=produit.id_produit GROUP by order_detail.id");
                                                        $total_price=0;
                                                        while($row=mysqli_fetch_assoc($res)){
                                                        $address=$row['address'];
                                                        $city=$row['city'];
                                                        $pincode=$row['pincode'];
                                                        $total_price=$total_price+($row['qty']*$row['price']);
                                                        ?>
                                                         <tr>
                                                            <td class="img-pro">
                                                               <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['photo_produit']?>" class="img-fluid d-inline-block" alt="tbl" width="64" heigth="64">
                                                            </td>
                                                            <td class="pro-name">
                                                               <h6><?php echo $row['nom_produit']?></h6>
                                                               <span class="text-muted f-12">ID: <?php echo $row['product_id']?></span>
                                                            </td>
                                                            <td>$<?php echo $row['price']?></td>
                                                            <td><?php echo $row['qty']?></td>
                                                            <td class="action-icon">$<?php echo $row['qty']*$row['price']?></td>
                                                         </tr>
                                                         <?php } ?>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-4">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="card">
                                                <div class="card-header">
                                                   <h5>Order Confirmation</h5>
                                                </div>
                                                <div class="card-block">
                                                   <div id="address_details">
                                                        <strong>Address</strong>
                                                        <?php echo $address?>, <?php echo $city?>, <?php echo $pincode?><br/><br/>
                                                        
                                                        <div>
                                                            <form method="post">
                                                            <div class="col-sm-12 col-xl-50 m-b-30">
                                                                <select class="js-example-basic-single col-sm-12" name="update_order_status">
                                                                    <?php
                                                                    $res=mysqli_query($con,"select * from order_status");
                                                                    if($order_status==5){
                                                                        echo "<option selected value='5'>Complete</option>";
                                                                    }else{
                                                                    while($row=mysqli_fetch_assoc($res)){
                                                                        if($row['id']==$order_status){
                                                                            echo "<option selected value=".$row['id'].">".$row['name']."</option>";
                                                                        }else{
                                                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                                                        }
                                                                    }
                                                                  }
                                                                    ?>
                                                                </select>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button id="payment-button" name="submit" type="submit" class="btn btn-primary btn-round">
                                                                    <span id="payment-button-amount">Submit</span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
                                             <div class="card analytic-user">
                                                <div class="card-block-big text-center">
                                                   <i class="icofont icofont-wallet"></i>
                                                   <h1>$ <?php echo $total_price ?></h1>
                                                   <h4>Prix totale</h4>
                                                </div>
                                                <div class="card-footer p-t-25 p-b-25">
                                                   <p class="m-b-0">This is standard panel footer</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="styleSelector"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--[if lt IE 9]>
      <div class="ie-warning">
         <h1>Warning!!</h1>
         <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
         <div class="iew-container">
            <ul class="iew-download">
               <li>
                  <a href="http://www.google.com/chrome/">
                     <img src="assets/images/browser/chrome.png" alt="Chrome">
                     <div>Chrome</div>
                  </a>
               </li>
               <li>
                  <a href="https://www.mozilla.org/en-US/firefox/new/">
                     <img src="assets/images/browser/firefox.png" alt="Firefox">
                     <div>Firefox</div>
                  </a>
               </li>
               <li>
                  <a href="http://www.opera.com">
                     <img src="assets/images/browser/opera.png" alt="Opera">
                     <div>Opera</div>
                  </a>
               </li>
               <li>
                  <a href="https://www.apple.com/safari/">
                     <img src="assets/images/browser/safari.png" alt="Safari">
                     <div>Safari</div>
                  </a>
               </li>
               <li>
                  <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                     <img src="assets/images/browser/ie.png" alt="">
                     <div>IE (9 & above)</div>
                  </a>
               </li>
            </ul>
         </div>
         <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
      <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
      <script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
      <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
      <script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
      <script type="text/javascript" src="../bower_components/classie/classie.js"></script>
      <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="../bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="assets/pages/data-table/js/jszip.min.js"></script>
      <script src="assets/pages/data-table/js/pdfmake.min.js"></script>
      <script src="assets/pages/data-table/js/vfs_fonts.js"></script>
      <script src="../bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="../bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
      <script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
      <script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
      <script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
      <script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>
      <script src="assets/pages/data-table/js/data-table-custom.js"></script>
      <script type="text/javascript" src="assets/js/script.js"></script>
      <script src="assets/js/pcoded.min.js"></script>
      <script src="assets/js/demo-12.js"></script>
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/jquery.mousewheel.min.js"></script>
      <script src="../bower_components/jquery.filer/js/jquery.filer.min.js"></script>
      <script src="assets/pages/filer/custom-filer.js" type="text/javascript"></script>
      <script src="assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>
      <script src="assets/js/classie.js"></script>
      <script src="assets/js/modalEffects.js"></script>
      <script type="text/javascript" src="assets/pages/product-list/product-list.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="../bower_components/d3/d3.min.js"></script>
      <script src="../bower_components/c3/c3.js"></script>
      <script type="text/javascript" src="../../www.gstatic.com/charts/loader.js"></script>
      <script src="assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
      <script src="assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js"></script>
      <script type="text/javascript" src="assets/pages/dashboard/ecommerce-dashboard.js"></script>
      <script type="text/javascript" src="../bower_components/select2/dist/js/select2.full.min.js"></script>

        <script type="text/javascript" src="../bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js">
            </script>
        <script type="text/javascript" src="../bower_components/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/js/jquery.quicksearch.js"></script>

        <script type="text/javascript" src="assets/js/script.js"></script>
        <script type="text/javascript" src="assets/pages/advance-elements/select2-custom.js"></script>
   </body>
   <!-- Mirrored from flatable.phoenixcoded.net/default/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:44:28 GMT -->
</html>