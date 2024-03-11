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
				<?php lang("Expec: Votre Solution en Plomberie","Expec: Your Plumbing Solution"); ?>
			</h1>
			<p class="title_description">
				<?php lang("Cette plateforme a pour but de mettre en valeur les services de l'entreprise Expec. Une entreprise de plomberie, électricité et climatisation basée à Crevant-Laveine.","The purpose of this platform is to showcase the services of Expec. A plumbing, electrical and air conditioning company based in Crevant-Laveine.") ?> 
			</p>
			<br>
	</section>
	
	<section class="portfolio_land_expec section fade">

	
	</section>

	<section class="portfolio_desc">
		
		<div class="details section fade">
			
			<div class="details_bloc">
				<h3><?php lang('Environnements','Environments'); ?></h3>
		 		<p>PHPStorm</p>
		 		<p>Trello</p>
		 		<p>phpMyAdmin</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3>Technologies</h3>
				<p>HTML</p>
				<p>CSS</p>
				<p>JavaScript</p>
				<p>PHP</p>
				<p>SQL</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3><?php lang('Gestion de versions','Version management'); ?></h3>
		 		<p>Git</p>
		 		<p>GitHub</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3><?php lang('Site Web','Website'); ?></h3>
				<button onclick="window.open('https://expec.fr', '_blank')">
					<?php lang("Voir le site","See the website");?>
					<span class="arrow">&#x2192;</span>
				</button>
			</div>
		</div>

		<div class="content">
			
			<div class="content_bloc">
					
				<h3 class="content_bloc_title section fade"><?php lang("Aperçu du projet","Project overview");?></h3>

				<p class="desciption section fade"><?php lang("Cette plateforme vise à mettre en valeur les services de l'entreprise Expec, spécialisée dans la plomberie, l'électricité et la climatisation, et située à Crevant-Laveine.",
				"This platform is designed to showcase the services of Expec, a company based in Crevant-Laveine that specialises in plumbing, electricity and air conditioning.");?></p>

				<p class="desciption section fade"><?php lang("Voici les objectifs en de ce site :","Here are the objectives of this site :");?></p>
				<br>
				<p class="liste section fade"><?php lang("1. Présenter l'entreprise ainsi que ses services.","1. Present the company and its services.");?></p>
				<p class="liste section fade"><?php lang("2. Proposer la possibilité de les contacter directement via le site.","2. Offer the possibility of contacting them directly via the website.");?></p>

				<p class="liste section fade"><?php lang("3. Permettre à l'entreprise de toucher une plus grande audience.","3. Enable the company to reach a wider audience.");?></p>	

				<br>


				<h4 class="content_bloc_subtitle section fade"><?php lang("Fonctionnalités","Features"); ?></h4>
				
				<p class="liste section fade"><?php lang("- Présentation du site ainsi que de ses services.","- Presentation of the site and its services.");?></p>
				<p class="liste section fade"><?php lang("- Présence d'une galerie de photos présentant différents chantiers.","- A photo gallery showing various construction sites.");?></p>
				<p class="liste section fade"><?php lang("- Inclure un formulaire de contact directement sur le site.","- Include a contact form directly on the site.");?></p>
				<p class="liste section fade"><?php lang("- Faire une demande de devis directement sur le site.","- Request a quote directly on the site.");?></p>
				<p class="liste section fade"><?php lang("- Permettre aux clients de poster / voir des avis directement sur le site.","- Enable customers to post/view reviews directly on the site.");?></p>
				<br>
				<h4 class="content_bloc_subtitle section fade">Conception</h4>
				
				<p class="desciption section fade" >
					<?php lang("Pour le formulaire de contact, j'ai utilisé la bibliothèque PHPMailer. J'ai également dû créer une base de données sous phpMyAdmin afin de stocker les avis du site. Enfin, j'ai exploité cette base de données en utilisant PHP.","For the contact form, I used the PHPMailer library. I also had to create a database in phpMyAdmin to store the site's notices. Finally, I exploited this database using PHP."); ?>
				</p>
				<p class="desciption section fade">
					<?php lang("Pour clarifier toutes les étapes de développement du site et les organiser efficacement, j'ai opté pour l'utilisation de la plateforme Trello. Cette approche m'a permis de maintenir une structure organisée tout au long du processus de création de mon site, en établissant clairement les priorités à chaque étape.","To clarify all the stages of the site's development and organise them efficiently, I opted to use the Trello platform. This approach enabled me to maintain an organised structure throughout the process of creating my site, clearly establishing priorities at each stage."); ?>
				</p>
				<p class="desciption section fade">
					<?php lang("Enfin, j'ai créé un répertoire GitHub que j'ai relié à mon projet en local grâce à Git, me permettant ainsi de versionner mon site et d'éviter toute perte de données.","Finally, I created a GitHub repository which I linked to my local project using Git, allowing me to version my site and avoid any loss of data."); ?>
				</p>
				<br>

			</div>
 
		</div>

	</section>


	<br>
	<br>
	<br>
	<?php require_once("../../inclued/footer/footer_port.php"); ?>
	<script src="../../js/header.js"></script>
	<script src="../../js/portfolio.js"></script>
</body>
</html>