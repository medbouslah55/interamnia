<?php
	include_once('connection.php');
	$sql="SELECT * FROM blog ";
	$query=$conn->query($sql);
	while($row = $query->fetch_assoc()){
	$chemin=$row['image_article'];
	echo $chemin;
	//$chemin='/upload/'.$image_article;
		$chemin= 'upload/' . $chemin;
		unlink($chemin);
	}
$sql = "DELETE FROM blog";
$conn->query($sql);
header('location: index.php');
?>