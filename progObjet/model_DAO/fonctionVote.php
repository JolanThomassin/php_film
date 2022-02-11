<?php
	require_once('../model_DAO/FilmManager.php');
	$filmManager = new FilmManager();
	$filmManager->voterFilm($_GET["idFilm"]);
	header ("Location: ../view_HTML/pageFilm.php");
?>
