<?php
session_start();
if(isset($_GET['login'])){
    include("../model_DAO/userDAO.php");
    include '../model_DAO/connexionBD.php';
    $login = $_GET['login'];
    $mdp = $_GET['mdp'];

    $bdd = connectDb();
    $query = $bdd->prepare("SELECT * FROM User WHERE login = :login and pwd = :pwd");
    $query->execute(array("login" => $login, "pwd" => $mdp));

    $donneesUSER = $query->fetch(PDO::FETCH_ASSOC);

    if ($donneesUSER) {
        $save = new UserDAO($donneesUSER["login"], $donneesUSER["role"]);
        $_SESSION["logUser"] = $save->getLogin();
        $_SESSION["roleUser"] = $save->getRole();
        header("Location: ../view_HTML/pageAccueil.php");
    }
    else { 
        echo "non";
    }
}

?>

