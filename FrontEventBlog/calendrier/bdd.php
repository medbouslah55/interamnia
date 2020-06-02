<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
