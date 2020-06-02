<?php session_start();
    $nadhir.=$_POST['liste'];
    $nadhir.=',';
    $nadhir.=$_POST['date_livraison'];
    $_SESSION['test']=$nadhir;
if( isset($_POST['valider']))
{
 header('location: add_commande.php');
}
if(isset($_POST['add']))
{

header('location: add.php');

}