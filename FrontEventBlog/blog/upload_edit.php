<?php
session_start();
if ($_FILES['photo']['type'] == 'image/jpeg') { $extention = '.jpeg'; }
if ($_FILES['photo']['type'] == 'image/jpeg') { $extention = '.jpg'; }
if ($_FILES['photo']['type'] == 'image/png') { $extention = '.png'; }
if ($_FILES['photo']['type'] == 'image/gif') { $extention = '.gif'; }

 include_once('connection.php');
 $id_blg=$_POST["id_article"];
$sql="SELECT id_article,image_article from blog where id_article='$id_blg'";
        $query = $conn->query($sql);
        $event = $query->fetch_assoc();
        $id=$event['id_article'];
        $image_article=$event['image_article'];
        echo $image_article;
        $chemin="IMG_" . $id . $extention;


// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["titre_article"] = $_POST['titre_article'];
        $_SESSION["date_article"] = $_POST['date_article'];
        $_SESSION["description_article"] = $_POST['description_article'];  
        $_SESSION["photo"] = $chemin;
        $_SESSION["edit"] = $_POST['edit'];
        $_SESSION["id"] = $_POST["id_article"];
        $id_blg=$_POST["id_article"];


    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
       
                $chemin=$image_article;
                unlink("upload/".$image_article);
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$chemin );
                echo "Votre fichier a été téléchargé avec succès.";
                header('location: edit.php');
             
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>