<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id_livreur=$_POST['id_livreur'];
		$nom_livreur=$_POST['nom_livreur'];
		$prenom_livreur=$_POST['prenom_livreur'];
		$numtel_livreur=$_POST['numtel_livreur'];
		$zdl_livreur=$_POST['zdl_livreur'];
		$compagnie_livreur=$_POST['compagnie_livreur'];
		$statut=$_POST['liste'];
		$sql = "INSERT INTO livreur (nom_livreur, prenom_livreur, numtel_livreur ,zdl_livreur,compagnie_livreur,statut) VALUES ('$nom_livreur', '$prenom_livreur', '$numtel_livreur' , '$zdl_livreur' , '$compagnie_livreur', '$statut')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>