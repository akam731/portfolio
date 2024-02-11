<?php

if (!isset($_SESSION['color_mode'])) {
	$_SESSION['color_mode'] = "default";
}

// Condition permettant le changement de couleur du site
if (isset($_GET['color']) AND $_GET['color'] == "change") {
	if($_SESSION['color_mode'] == "default"){
		$_SESSION['color_mode'] = "dark";
	}else{
		$_SESSION['color_mode'] = "default";
	}
	header('location: ../../'.$_SESSION['language']."/portfolio/");
}

// Condition permettant le changement de couleur du site
if (isset($_GET['language']) AND $_GET['language'] == "change") {
	if($_SESSION['language'] == "fr"){
		$_SESSION['language'] = "en";
	}else{
		$_SESSION['language'] = "fr";
	}
	header('location: ../../'.$_SESSION['language']."/portfolio/");
}

// Fonction permettant le changement de langage
function lang($msg_fr, $msg_en){

	if ($_SESSION['language'] == "fr") {

		echo $msg_fr;

	}elseif($_SESSION['language'] == "en"){

		echo $msg_en;
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alexandre Marteau | Portfolio</title>

	<link rel="stylesheet" type="text/css" href="../../style/portfolio/index.css">
	<link rel="stylesheet" type="text/css" href="../../style/style_responsive/index.css">
	<link rel="stylesheet" type="text/css" href="../../style/inclued/header.css">
	<link rel="stylesheet" type="text/css" href="../../style/inclued/footer.css">
</head>
<body>

	<?php require_once("../../inclued/header-port.php"); ?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<section id="index_title" class="index_title">
		<div class="index_title_left section fade">
			<div class="thin_border"></div>
			<h1 class="title">
				<?php lang("Page d'acceuil d'une agence de voyage",""); ?>
			</h1>
			<p class="title_description">
				<?php lang("La page d'accueil d'agence de voyage que j'ai réalisée offre une expérience immersive et conviviale pour les utilisateurs qui souhaitent explorer des destinations passionnantes.", "Passionate web developer. Explore my portfolio to discover innovative projects, from responsive design to robust backend development. Let's create the future of the web together.") ?> 
			</p>
			<br>
		</div>
		<div class="index_title_right section fade">
			<div class="scroller">
				 
			</div>
		</div>

	</section>
	<br>
	<br> 
	<br>
	<br>
	<section class="portfolio_desc">
		
		<div class="details">
			
			<div class="details_bloc">
				<h3>Environements</h3>
		 		<p>Sublime Text</p>
				<p>Figma</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3>Technologies</h3>
				<p>HTML</p>
				<p>CSS</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3>Site Web</h3>
				<button>
					Demo live
					<span class="arrow">&#x2192;</span>
				</button>
			</div>

		</div>

		<div class="content">
			
			<div class="content_bloc">
					
				<h3 class="content_bloc_title">Aperçu du projet</h3>

				<p class="desciption">La page webque j'ai conçu présente une vitrine basée sur une maquette fournie au cours de ma formation chez <a href="https://openclassrooms.com/fr/" target="about_blank">OpenClassrooms</a>. Cet page représente la page d'acceuil d'une agence de voyage nommé Booki.</p>
				<p class="desciption">Voici les consignes de ce projet :</p>
				<br>
				<p class="liste">1. Le site devais respecter une maquette préfaite.</p>
				<p class="liste">2. Il ne devais être réalisé uniquement en HTML et CSS.</p>
				<p class="liste">3. Le site devais étres adapté pour tous type de supports.</p>
				<p class="liste">3. Le delais maximal pour rendre ce projet étais de 80h.</p>

				<br>

				<h4 class="content_bloc_subtitle">Conception</h4>
				
				<p class="desciption">L'intégralité des images et icônes présentes sur le site étaient fournies par la formation. Ma responsabilité consistait à les intégrer de manière précise, en veillant à respecter la maquette.</p>

				<br>

				<h4 class="content_bloc_subtitle">Fonctionalités</h4>
				
				<p class="desciption">En tant que site vitrine, sa mission principale est de détailler les enjeux et les points forts de l'agence de voyage. Sa particularité réside dans sa dynamique d'adaptation à la taille de l'écran. Que l'utilisateur explore le site depuis un téléphone ou un ordinateur, le contenu s'ajuste automatiquement pour garantir une expérience utilisateur optimale.</p>

				<br>

				<h4 class="content_bloc_subtitle">Résultat</h4>
				
				<p class="desciption">Voici quelques screeshots du site une fois terminé :</p>

				<div class="images_triple">
					<img src="">
					<div>
						<img>
						<img src="">
					</div>
				</div>
			</div>

		</div>

	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>



	<?php require_once("../../inclued/footer.php"); ?>
	<script src="../../js/header.js"></script>
	<script src="../../js/portfolio.js"></script>
</body>
</html>