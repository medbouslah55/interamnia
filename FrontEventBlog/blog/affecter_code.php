<?php 

include_once('connection.php');
$id = $_POST['id'];
   $id_event = $_POST["liste"] ;

   $sql = "UPDATE blog set id_event='$id_event' where id_article='$id'  ";
   $conn->query($sql);
  
   header('location: index.php');

?>