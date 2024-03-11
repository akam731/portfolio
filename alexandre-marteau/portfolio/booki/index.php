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

// Condition permettant le changement de langue du site
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
	<link rel="icon" type="image/png" sizes="16x16"  href="../../images/favicon.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	
	<meta name="description" content="Découvrez Alexandre Marteau, développeur web. Des sites uniques qui captivent et inspirent."> 
	
	<script src="https://kit.fontawesome.com/7055cf6fe9.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alexandre Marteau | Portfolio</title>

	<link rel="stylesheet" type="text/css" href="../../style/portfolio/index.css">
	<link rel="stylesheet" type="text/css" href="../../style/style_responsive/portfolio.css">
	<link rel="stylesheet" type="text/css" href="../../style/inclued/header.css">
	<link rel="stylesheet" type="text/css" href="../../style/inclued/footer.css">
<?php 

	if ($_SESSION['color_mode'] == "dark") { ?>
	<link rel="stylesheet" type="text/css" href="../../style/portfolio/index_dark.css">
	<link rel="stylesheet" type="text/css" href="../../style/inclued/header_dark.css">
	<link rel="stylesheet" type="text/css" href="../../style/inclued/footer_dark.css">
	<?php } ?>
</head>
<body>

	<?php require_once("../../inclued/header/header-port.php"); ?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<section id="index_title" class="index_title">
			<div class="thin_border"></div>
			<h1 class="title">
				<?php lang("Page d'accueil d'une agence de voyages","Travel agency home page"); ?>
			</h1>
			<p class="title_description">
				<?php lang("La page d'accueil d'agence de voyages que j'ai réalisé offre une expérience immersive et conviviale pour les utilisateurs qui souhaitent explorer des destinations passionnantes.", "The travel agency homepage I designed offers an immersive, user-friendly experience for users who want to explore exciting destinations.") ?> 
			</p>
			<br>
	</section>
	
	<section class="portfolio_land section fade">

	
	</section>

	<section class="portfolio_desc">
		
		<div class="details section fade">
			
			<div class="details_bloc">
				<h3><?php lang('Environnements','Environments'); ?></h3>
		 		<p>Sublime Text 3</p>
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
				<h3><?php lang('Site Web','Website'); ?></h3>
				<button>
					<?php lang("Demo live","Live demo");?>
					<span class="arrow">&#x2192;</span>
				</button>
			</div>

		</div>

		<div class="content">
			
			<div class="content_bloc">
					
				<h3 class="content_bloc_title section fade"><?php lang("Aperçu du projet","Project overview");?></h3>

				<p class="desciption section fade">
					
					<?php lang("La page web que j'ai conçue présente une vitrine basée sur une maquette fournie au cours de ma formation chez","The web page I designed is a showcase based on a mock-up provided during my training at"); ?> <a href="https://openclassrooms.com/fr/" target="about_blank">OpenClassrooms</a>. 
					<?php lang("Cette page représente la page d'accueil d'une agence de voyages nommé Booki.","This page represents the homepage of a travel agency called Booki.");?>
				</p>
				<p class="desciption section fade"><?php lang("Voici les consignes de ce projet :","Here are the guidelines for this project:");?></p>
				<br>
				<p class="liste section fade">1. <?php lang("Le site devait respecter une maquette pré-faite.","The site had to follow a pre-designed layout.");?></p>
				<p class="liste section fade">2. <?php lang("Il devait être réalisé uniquement en HTML et CSS.","It was to be produced using HTML and CSS only."); ?></p>
				<p class="liste section fade">3. <?php lang("Le site devait être adapté pour tout type de support.","The site had to be suitable for all types of medium.");?></p>
				<p class="liste section fade">4. <?php lang("Le délai maximal pour rendre ce projet était de 80h.","The maximum deadline for this project was 80 hours.")?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade">Conception</h4>
				
				<p class="desciption section fade" >
					<?php lang("L'intégralité des images et icônes présentes sur le site étaient fournies par la formation. Ma responsabilité consistait à les intégrer de manière précise, en veillant à respecter la maquette.","All the images and icons on the site were supplied by the course. My responsibility was to integrate them accurately, taking care to respect the layout.");?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Fonctionnalités","Features"); ?></h4>
				
				<p class="desciption section fade">
				<?php lang("En tant que site vitrine, sa mission principale est de détailler les enjeux et les points forts de l'agence de voyages. Sa particularité réside dans sa dynamique d'adaptation à la taille de l'écran. Que l'utilisateur explore le site depuis un téléphone ou un ordinateur, le contenu s'ajuste automatiquement pour garantir une expérience utilisatrice optimale.","As a showcase site, its main mission is to detail the challenges and strengths of the travel agency. What makes it special is the way it adapts to screen size. Whether the user explores the site from a phone or a computer, the content automatically adjusts to ensure an optimal user experience."); ?>
			</p>

				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Résultat","Result");?></h4>
				
				<p class="desciption section fade"><?php lang("Voici quelques screenshots du site une fois terminé :","Here are a few screenshots of the finished site:");?></p>

			</div>
 
		</div>

	</section>

	<section class="portfolio_screen">
		
		<img alt="Présentation de la page d'acceuil de mon site pour une agence de voyage." onclick="window.open('../../portfolio/booki/screen_1.jpeg', '_blank')" class="img_1 section fade" src="../../portfolio/booki/screen_1.jpeg" alt="Première image de mon projet de site réalisé en HTML et CSS" title="<?php lang("Agrandir", "View larger"); ?>">

		<img alt="Première partie de la version responsive de la page d'acceuil de mon site pour une agence de voyage." onclick="window.open('../../portfolio/booki/screen_2_1.jpeg', '_blank')" class="img_2_1 section fade" src="../../portfolio/booki/screen_2_1.jpeg" alt="Deuxième image de mon projet de site réalisé en HTML et CSS" title="<?php lang("Agrandir", "View larger"); ?>">

		<img alt="Deuxième partie de la version responsive de la page d'acceuil de mon site pour une agence de voyage." onclick="window.open('../../portfolio/booki/screen_2_3.jpeg', '_blank')" class="img_2_1 section fade" src="../../portfolio/booki/screen_2_3.jpeg" alt="Troisième image de mon projet de site réalisé en HTML et CSS" title="<?php lang("Agrandir", "View larger"); ?>">

	</section>
	<br>
	<br>
	<br>
	<?php require_once("../../inclued/footer/footer_port.php"); ?>
	<script src="../../js/header.js"></script>
	<script src="../../js/portfolio.js"></script>
</body>
</html>