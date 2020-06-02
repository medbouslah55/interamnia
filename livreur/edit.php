<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_livreur=$_POST['id_livreur'];
		$nom_livreur=$_POST['nom_livreur'];
		$prenom_livreur=$_POST['prenom_livreur'];
		$numtel_livreur=$_POST['numtel_livreur'];
		$zdl_livreur=$_POST['zdl_livreur'];
		$compagnie_livreur=$_POST['compagnie_livreur'];
		$statut=$_POST['liste'];

		$sql = "UPDATE livreur SET nom_livreur = '$nom_livreur', prenom_livreur = '$prenom_livreur', numtel_livreur = '$numtel_livreur', zdl_livreur = '$zdl_livreur', compagnie_livreur = '$compagnie_livreur', statut = '$statut' WHERE id_livreur = '$id_livreur'";

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