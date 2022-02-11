<?php 
	include('../model_DAO/créationUser.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> Page info Film </title>
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
							<h2>
								<? if(isset($_GET['idFilm'])){echo "film numero : ".$_GET['idFilm'];} ?>
							</h2>
							<p>
								<?php
									include("../model_DAO/FilmManager.php");
									$filmManager = new FilmManager();
									$Film = $filmManager->getFilmById($_GET['idFilm']);
									echo "✿ ↬ - " . $Film->nom() . " ↫ ✿";
								?>
							</p>
						<section>
							<table>	
								<td>
									<?php
										echo "Nom du film : " . $Film->nom() . "<br>"; 
										echo "Id du film : " . $Film->id() . "<br>";
										echo "Année : " . $Film->annee() . "<br>";
										echo "Score : " . $Film->score() . "<br>";
										echo "Nombre de votants : " . $Film->nbVotants() . "<br>";
									?>
								</td>
							</table>
							<br><br>

						<?php
							if ( $_SESSION["roleUser"] == "user")
							{
								$filmManager = new FilmManager();

						?>
						<section>
							<h4> Vous avez aimez le film ? </h4>

							<a href="../model_DAO/fonctionVote.php?idFilm=<?=$Film->id()?>" class="button primary small"> Voter</a>
							<br><br>	
						<?php
							}
						?>	
				
						<?php
							if ( $_SESSION["roleUser"] == "admin")
							{
						?>								
						<section>
							<h4>Ajouter une image au film</h4>
								<form action="../model_DAO/ajoutImage.php?id=<?=$_GET['idFilm'] ?>" method="POST" enctype="multipart/form-data">
   									<input type="file" name="file"></input>
   									<button type="submit" name="submit">upload</button>
								</form>
							<br><br>
						<?php 
							}
						?>	

						<section class="wrapper style5">
							<div class="inner">
								<h4>Image</h4>
								<div class="box alt">
									<div class="row gtr-50 gtr-uniform">
										<div class="col-12"><span class="image fit"><img src="<?=$Film->image()?>" alt=""/></span></div>
									</div>
								</div>	
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

