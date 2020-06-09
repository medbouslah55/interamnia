<?php
require('connection.inc.php');
require('functions.inc.php');

$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);

$res=mysqli_query($con,"select * from client where email_client='$email' and mdp_client='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['USER_LOGIN']='yes';
	$_SESSION['USER_ID']=$row['id_client'];
	$_SESSION['USER_EMAIL']=$row['email_client'];
	$_SESSION['USER_FIRST_NAME']=$row['nom_client'];
	$_SESSION['USER_LAST_NAME']=$row['prenom_client'];
	$_SESSION['USER_ADDRESS']=$row['adresse_client'];
	$_SESSION['USER_APARTEMENT']=$row['apartement_client'];
	$_SESSION['USER_COUNTRY']=$row['pays_client'];
	$_SESSION['USER_CITY']=$row['region_client'];
	$_SESSION['USER_ZIP']=$row['codepostal_client'];
	$_SESSION['USER_PHONE']=$row['numtel_client'];
	$_SESSION['USER_TYPE']=$row['type_client'];
	echo "valid";
}else{
	echo "wrong";
}
?>