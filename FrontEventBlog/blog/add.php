<?php
	session_start();
	include_once('connection.php');
 $btn=$_SESSION["add"];
	if(isset($btn)){


		$titre_article = $_SESSION["titre_article"] ;
        $date_article = $_SESSION["date_article"] ;
        $description_article = $_SESSION["description_article"] ;
        $image_article = $_SESSION["photo"] ;
     
		$sql = "INSERT INTO blog (titre_article, date_article, description_article,image_article,id_event) VALUES  ('$titre_article', '$date_article', '$description_article','$image_article',0)";

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