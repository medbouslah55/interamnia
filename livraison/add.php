<?php
	session_start();
	include_once('connection.php');

	$my=substr($_SESSION['test'],strpos($_SESSION['test'],',')+1,strlen($_SESSION['test']));
	$myy=substr($_SESSION['test'],0,strpos($_SESSION['test'],','));

	//echo $my;
echo $myy;
		$date_livraison=$my;
		$id_livreur=0;
		$sql = "INSERT INTO livraison (date_livraison, id_livreur,id_commande) VALUES ('$date_livraison', '$id_livreur','$myy')";
		//use for MySQLi OOP

		if($conn->query($sql)){
			
			$_SESSION['success'] = 'Member added successfully';

		}
		/////
		//////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
 
	
	

	header('location: index.php');
?>