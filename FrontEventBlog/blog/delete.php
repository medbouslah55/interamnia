<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM blog WHERE id_article = '".$_GET['id']."'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}
	$sql="SELECT image_article FROM blog where  id_article = '".$_GET['id']."' ";
	$query=$conn->query($sql);
	$blog = $query->fetch_assoc();
	$chemin=$blog['image_article'];
	//$chemin='/upload/'.$image_article;
		$chemin= 'upload/' . $chemin;
		unlink($chemin);

	//header('location: index.php');
?>