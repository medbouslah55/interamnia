<?php
session_start();
$con=mysqli_connect("localhost","root","","projet_web");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecom/');
define('SITE_PATH','http://localhost/khedmti/asbab/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'images/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'images/');
?>