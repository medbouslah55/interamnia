<?php
session_start();
	include_once('connection.php');
	$id = $_POST['id'];
	$id_compte = $_SESSION['word'];
	$dispo=$_POST['nb_part'];
	echo $id_compte;
	$id_client = $my=substr($_SESSION['word'],strpos($_SESSION['word'],':')+1,strpos($_SESSION['word'],':')+1 );
	if($dispo=='disponnible'){
		if($id_compte[0]=='C'){
		$sql="select * from participant where id_client='$id_client' and id='$id'";
		$query = $conn->query($sql);
		$nbr2=$query->num_rows;
		if($nbr2==0){
		$query = $conn->query($sql);
		$event = $query->fetch_assoc();
		$nombre_part=$event['nbr_participent'];
		$nouveau_nombre=$nombre_part+1;

		$sql="select * from participant where id_client='$id_client' and id='$id'";
		$query = $conn->query($sql);
		$participant = $query->fetch_assoc();


		$sql="select nom_client,prenom_client from client where id_client='$id_client'";
		$query = $conn->query($sql);
		$client = $query->fetch_assoc();

		$nom=$client['nom_client'];
		$prenom=$client['prenom_client'];


		
		$sql="insert into participant (id_client,id) values ('$id_client','$id')";
		$conn->query($sql);
		$sql = "UPDATE events SET nbr_participent = '$nouveau_nombre'  WHERE id = '$id'";
		//use for MySQLi OOP
		$conn->query($sql);
		
		echo $nom;
		echo $prenom;
		$title=$_POST['title'];
		$message.=$nom;
		$message.=' ';
		$message.=$prenom;
		$message.=" a participer a levenement ";
		$message.= $title;
		$today=date("Y-m-d h:i:sa");
		echo $today;
		echo $message;


		$sql2="INSERT INTO projet_web.notif (dates,message) VALUES  ('$today','$message')";
		$conn->query($sql2);

		header('location: index.php?error=0');
	}
	else
	{	
	header('location: index.php?error=1');
	}
}
else
{
	header('location: index.php?error=2');

}
}
else
{
	header('location: index.php?error=3');
}
	



		
		
	

?>