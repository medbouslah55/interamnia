<?php
require('connection.inc.php');
require('functions.inc.php');
$email=get_safe_value($con,$_POST['email']);
$added_on=date('Y-m-d h:i:s');

$res=mysqli_query($con,"select * from client where email_client='$email'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
    echo "email deja existe";
	
}else{
    $row=mysqli_fetch_assoc($res);
    mysqli_query($con,"insert into client(email_client,added_on,type_client) values('$email','$added_on','guest')");

    $get_id=mysqli_query($con,"select * from client where email_client='$email'");
    $check_id=mysqli_num_rows($get_id);
    $r=mysqli_fetch_assoc($get_id);
    $_SESSION['USER_ID']=$r['id_client'];
    $_SESSION['USER_TYPE']=$r['type_client'];
    echo "Thank you";
}
?>