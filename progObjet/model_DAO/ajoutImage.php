<?php
require("../model_DAO/FilmManager.php");
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('png','jpg','jpeg');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../view_HTML/images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                echo "Succès !";
                ?>
                <br><br>
                <?php 
                $filmManager = new FilmManager();
                $filmManager->setImage($_GET['id'], $fileDestination);
                echo "Chemin d'accès enregistré : " . $fileDestination;
                ?>
                <br><br>
                <?php
                    echo "Pour revenir au menu : "; 
                ?>
                <a href="../view_HTML/pageFilm.php"> Cliquez ici </a>
                <?php            
            

            
        }else{
            echo "erreur lors de l'upload, paye ta facture wifi stp";
        }
    } else {
        echo "formats compatibles : png,jpg,jpeg";
    }
}
?>