<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_livraison=$_POST['id_livraison'];
		$date_livraison=$_POST['date_livraison'];
		$id_livreur=$_POST['liste'];
		$sql = "UPDATE livraison SET date_livraison = '$date_livraison' , id_livreur = '$id_livreur' WHERE id_livraison = '$id_livraison'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>