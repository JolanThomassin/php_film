<?php 
	include('../model_DAO/créationUser.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> Site de Film </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="cueil.php">Jolan et Thomas</a></h1>
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

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Jolan et Thomas</h2>
							<p>Vous présente <br/>
							Un site pour les films <br/>
							Un bon site même <br/>
							Un très bon site 
							<?php 
							echo $_SESSION["roleUser"];
							 ?></p>
						</div>
						
					</section>

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
