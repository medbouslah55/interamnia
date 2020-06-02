<?php
        session_start();

    include_once('connection.php');
    
    $id=$_SESSION['test'];
    
	$id=substr($_SESSION['test'],0,strpos($_SESSION['test'],','));


    $sql="select id,address,city,total_price from projet_web.order where id='$id'";
    
    $query=$conn->query($sql);
	$order = $query->fetch_assoc();
    $_SESSION["id"]=$order['id'];
    $_SESSION["address"]=$order['address'];
    $_SESSION["city"]=$order['city'];
    $_SESSION["total_price"]=$order['total_price'];
    $_SESSION['test']=1;

    header('location: add_modal.php');

?>