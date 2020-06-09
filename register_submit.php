<?php
require('connection.inc.php');
require('functions.inc.php');

$firstname=get_safe_value($con,$_POST['firstname']);
$lastname=get_safe_value($con,$_POST['lastname']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$password=get_safe_value($con,$_POST['password']);

$check_user=mysqli_num_rows(mysqli_query($con,"select * from client where email_client='$email'"));
if($check_user>0){
	echo "email_present";
}else{
	$added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"insert into client(nom_client,prenom_client,email_client,numtel_client,mdp_client,added_on,type_client) values('$firstname','$lastname','$email','$mobile','$password','$added_on','registred')");
	echo "insert";
}
?>