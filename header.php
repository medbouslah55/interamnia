<?php
require('php/connection.inc.php');
require('php/functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:auth-normal-sign-in.php');
	die();
}
?>