<?php
	session_start();
	include_once('connection.php');
     $_SESSION['id']="test";
	if(isset($_GET['id'])){
		$sql = "DELETE FROM livraison WHERE id_livraison = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'livreur deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting livreur';
		}
	}
	else{
		$_SESSION['error'] = 'Select livreur to delete first';
	}

	header('location: index.php');
?>