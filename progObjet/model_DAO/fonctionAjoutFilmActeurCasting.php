<?php
if(isset($_GET['nomFilm'])){
    include '../model_DAO/connexionBD.php';
    $nomFilm = $_GET['nomFilm'];
    $anneeFilm = (int)$_GET['anneeFilm'];
    $scoreFilm = (float)$_GET['scoreFilm'];
    $idActeur = (int)$_GET['formActeur'];

    if( ($nomFilm != "") && ($anneeFilm != 0) && ($scoreFilm != 0) ) {
        include('../model_DAO/FilmManager.php');

        $filmManager = new FilmManager();
        $filmManager->addFilm($nomFilm, $anneeFilm, $scoreFilm);

        if( ($idActeur != 0) ) {
            $films = $filmManager->getFilms();
            include('../model_DAO/ActeursManager.php');
            foreach ($films as $f) {
                if ( ($f->nom() == $nomFilm) && ($f->annee() == $anneeFilm) && ($f->score() == $scoreFilm) ) {
                    $acteursManager = new ActeursManager();
                    $acteursManager->addCasting($f->id(), $idActeur);
                }   
            }
        }
        header("Location: ../view_HTML/pageFilm.php");
    }
    else {
        echo "Renseignement manquant pour la création d'un film";
    }    
}


if(isset($_GET['nomActeur'])){
    include '../model_DAO/connexionBD.php';
    $nomActeur = $_GET['nomActeur'];
    $prenomActeur = $_GET['prenomActeur'];

    if( ($nomActeur != "") && ($prenomActeur != "")){
        include('../model_DAO/ActeursManager.php');
        $acteursManager = new ActeursManager();
        $acteursManager->addActeur($nomActeur, $prenomActeur);
        header("Location: ../view_HTML/pageActeur.php");
    }
    else {
        echo "Prénom ou nom incorrect";
    } 
}
?>

