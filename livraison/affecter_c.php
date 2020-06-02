<?php 

include_once('connection.php');
$id = $_POST['id'];
   $id_livreur = $_POST["liste"] ;

   $sql = "UPDATE livraison set id_livreur='$id_livreur' where id_livraison='$id'  ";
   $conn->query($sql);
  
   header('location: index.php');

?>