<?php 
	include('../model_DAO/créationUser.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> C'est les acteurs </title>
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
											<li><a href="cueil.php">Accueil</a></li>
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
							<h2> Page Acteurs </h2>
							<p>La page avec les acteurs</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<table>
									<thead>
										<ul>
											<td>
												Identifiant
											</td> 
											<td>
												Nom de l'acteur
											</td>
											<td>
												Prénom de l'acteur
											</td>
										</ul>
									</thead>
									<tbody>
									<?php
										require_once('../model_DAO/ActeursManager.php');
										require_once('../controller_DTO/Acteurs.php');
										
										$acteursManager = new ActeursManager();
										$acteurs = $acteursManager->getActeurs();
										foreach($acteurs as $acts){
									?>
									<ul>
										<tr>	
											</td>
											<td>
												<?php
													echo $acts->getId();
												?>
											</td>
											<td>
												<?php
													echo $acts->getNomActeur();
												?>
											</td>
											<td>
												<?php
													echo $acts->getPrenom();
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

