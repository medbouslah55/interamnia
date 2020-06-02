<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'root', '', 'projet_web');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	

	// $con = mysqli_connect('localhost', 'root', '', 'projet_web');
	// if(!$con){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
?>