<?php
session_start();
$con=mysqli_connect("localhost","root","","projet_web");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/khedmti/asbab/');
define('SITE_PATH','http://localhost/khedmti/asbab/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'images/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'images/product/');
?>