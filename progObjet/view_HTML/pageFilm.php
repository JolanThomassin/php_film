<?php 
	include('../model_DAO/créationUser.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> C'est les films </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="pageAccueil.php">Accueil</a></li>
											<li><a href="pageFilm.php">Film</a></li>
											<?php
												if ( $_SESSION["roleUser"] == "admin")
												{
											?>
												<li><a href="../view_HTML/pageAjoutFilm.php">Ajout Film (only admin)</a></li>
											<?php 
												}
											?>
											<li><a href="pageActeur.php">Acteur</a></li>
											<?php
												if ( $_SESSION["roleUser"] == "admin")
												{
											?>
												<li><a href="../view_HTML/pageAjoutActeur.php">Ajout Acteur (only admin)</a></li>
											<?php 
												}
											?>
											<li><a href="pageConnexion.php">Se déconnecter</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2> Page Film </h2>
							<p>La page avec les films</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<table>
									<thead>
										<ul>
											<td>
												Nom du film
											</td> 
											<td>
												Année
											</td>
											<td>
												Score
											</td>
											<td>
												Nombre de votants
											</td>
											<td>
												Acteurs
											</td>
										</ul>
									</thead>
									<tbody>
									<?php
										require_once('../model_DAO/FilmManager.php');
										require_once('../controller_DTO/Film.php');
										
										$filmManager = new FilmManager();
										$films = $filmManager->getFilms();
										foreach($films as $film){
									?>
									<ul>
										<tr>	
											<td>							    
												
													<a href="pageInfoFilm.php?idFilm=<?=$film->id()?> "> <?= $film->nom()?></a>
												
											</td>
											<td>
												<?php
													echo $film->annee();
												?>
											</td>
											<td>
												<?php
													echo $film->score();
												?>
											</td>
											<td>
												<?php
													echo $film->nbVotants();
												?>
											</td>
											<td>
												<?php
												require_once('../model_DAO/ActeursManager.php');
												require_once('../controller_DTO/Casting.php');
												require_once('../controller_DTO/Acteurs.php');
												
												$acteursManager = new ActeursManager();
												$casting = $acteursManager->getCasting();
												$compteur = 0;
												foreach($casting as $cst){
													if ($cst->getFilmId() == $film->id()) 
													{	
														if ($compteur == 0) {
															$trAct = $acteursManager->getActeursById($cst->getActeursId());
															echo $trAct->getPrenom() . " " . $trAct->getNomActeur();
															$compteur = 1;
														}
														else {
															$trAct = $acteursManager->getActeursById($cst->getActeursId());
															echo (", " . $trAct->getPrenom() . " " . $trAct->getNomActeur());
														}
													}
												}
												?>
											</td>
										</tr>
									</ul>
									<?php
										}
									?>
									</tbody>
								</table>
							</div>
						</section>
					</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
