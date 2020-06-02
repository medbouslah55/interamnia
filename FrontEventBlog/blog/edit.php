<?php
	session_start();
	include_once('connection.php');
	$_POST['edit']=$_SESSION["edit"];
	if(isset($_POST['edit'])){
		$id = $_SESSION["id"];	
		$titre_article = $_SESSION["titre_article"] ;
        $date_article = $_SESSION["date_article"] ;
        $description_article = $_SESSION["description_article"] ;
        $image_article = $_SESSION["photo"] ;
		$sql = "UPDATE blog SET titre_article = '$titre_article', date_article = '$date_article', description_article = '$description_article' , image_article='$image_article'  WHERE id_article = '$id'";

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