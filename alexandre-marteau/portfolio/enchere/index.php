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
				<?php lang("Site de vente aux enchères","Auction site"); ?>
			</h1>
			<p class="title_description">
				<?php lang("Ce site a pour but de proposer des services de ventes aux enchères de particulier à particulier.","The purpose of this site is to offer auction services from private individuals to private individuals.") ?> 
			</p>
			<br>
	</section>
	
	<section class="portfolio_land_enchere section fade">

	
	</section>

	<section class="portfolio_desc">
		
		<div class="details section fade">
			
			<div class="details_bloc">
				<h3><?php lang('Environnements','Environments'); ?></h3>
		 		<p>Eclipse</p>
		 		<p>Trello</p>
		 		<p>SQL Server Management Studio</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3>Technologies</h3>
				<p>HTML</p>
				<p>CSS</p>
				<p>JavaScript</p>
				<p>Java</p>
				<p>SQL</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3><?php lang('Gestion de versions','Version management'); ?></h3>
		 		<p>Git</p>
		 		<p>GitHub</p>
			</div>
			<br>
		</div>

		<div class="content">
			
			<div class="content_bloc">
					
				<h3 class="content_bloc_title section fade"><?php lang("Aperçu du projet","Project overview");?></h3>

				<p class="desciption section fade"><?php lang("Ce site s'inscrit dans ma formation de développeur web au sein de l'","This website is part of my training as a web developer at the");?><a href="https://www.eni-ecole.fr/" target="about_blank">ENI École informatique</a>.<?php lang("En effet, durant cette formation j'ai la chance de pouvoir réaliser deux projets en groupe, et celui-ci est le premier.","In fact, during this course I'm lucky enough to be able to carry out two group projects, and this is the first one.");?></p>
				<p class="desciption section fade"><?php lang("Son énoncé : Réaliser une application web Back End structurée en couches","Its brief: To build a Back End web application structured in layers");?></p>

				<p class="desciption section fade"><?php lang("Voici les consignes de ce projet :","Here are the instructions for this project :");?></p>
				<br>
				<p class="liste section fade"><?php lang("1. Le projet se déroule en groupe de 4.","1. The project is carried out in groups of 4.");?></p>
				<p class="liste section fade"><?php lang("2. Nous devons réaliser un site de vente au enchères dont nous possédont : maquettes et diagrammes de classes.","2. We need to create an auction site for which we have: mock-ups and class diagrams.");?></p>
				<p class="liste section fade"><?php lang("3. Nous devons suivre une liste d'exigence ordonnée préétablie.","3. We have to follow a pre-established ordered list of requirements.");?></p>
				<p class="liste section fade"><?php lang("4. Nous avons un délais de 2 semaine pour mener à bien ce projet.","4. We have a deadline of 2 weeks to complete this project.");?></p>
				<p class="liste section fade"><?php lang("5. Nous devons présenter notre projet en visio avec notre professeur à la fin du temps imparti.","5. We have to present our project on video with our teacher at the end of the allotted time.");?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade">Conception</h4>
				
				<p class="desciption section fade" ><?php lang("Nous avions des maquettes et les diagrammes de classes fournie au début du projet. Notre devoir étais de créer le site en respectant toutes ces contraintes. Enfin, nous devions créer la base de donées sur SQL Server management studio.","We were provided with mock-ups and class diagrams at the start of the project. Our task was to create the site in compliance with all these constraints. Finally, we had to create the database using SQL Server management studio.");?></p>
				<p class="desciption section fade">
					<?php lang("Concernant le développement : notre structure d'application était organisée en couche, nous avons utilisé des variables de sessions ainsi que des cookies pour implémenter certaines fonctionnalités.","About the development : our application structure was organised in layers, and we used session variables and cookies to implement certain functions."); ?>
				</p>
				<p class="desciption section fade">
					<?php lang("Pour clarifier toutes les étapes de développement du site et les organiser efficacement, nous avons opté pour l'utilisation de la plateforme Trello. Cette approche nous à permis de maintenir une structure organisée tout au long du processus de création du site, en établissant clairement les priorités à chaque étape.","To clarify all the stages of the site's development and organise them efficiently, we opted to use the Trello platform. This approach enabled us to maintain an organised structure throughout the site creation process, clearly establishing priorities at each stage"); ?>
				</p>
				<p class="desciption section fade">
					<?php lang("Enfin, nous avons créé un répertoire GitHub que nous avons relié à nos projets sur Éclipse en local grâce à Git, nous permettant ainsi de versionner notre site, d'éviter toute perte de données, mais surtout de toujours rester organisé.","Finally, we created a GitHub directory that we linked to our local Eclipse projects using Git, enabling us to version our site, avoid any loss of data and above all stay organised."); ?>
				</p>

				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Fonctionnalités","Features"); ?></h4>
				
				<p class="desciption section fade"><?php lang("Gestion des utilisateurs :","User management :");?></p>	

				<p class="liste section fade"><?php lang("- Permettre l'inscription, la connexion et la déconnexion d'utilisateurs","- Enable users to register, log on and log off");?></p>
				<p class="liste section fade"><?php lang("- Option \"Se souvenir de moi\" lors de la connexion ","- \"Remember me\" option on login "); ?></p>
				<p class="liste section fade"><?php lang("- Permettre l'affichage, la modification et la suppression du profil de l'utilisateur","- Display, modify and delete the user's profile");?></p>

				<p class="desciption section fade"><?php lang("Gestion des enchères :","Auction management :");?></p>	

				<p class="liste section fade"><?php lang("- Mettre un enchère en ligne avec une photo, enchérir sur une enchère déja en ligne, remporter une vente.","- Offer the possibility of contacting me directly on the site","");?></p>
				<p class="liste section fade"><?php lang("- Afficher les diférentes enchères en ligne sur la page d'acceuil","- Present the various projects I have completed");?></p>
				<p class="liste section fade"><?php lang("- Afficher le détails d'une enchères, permettre au vendeur de la modifier avant la date de début d'enchère.","- Present the various projects I have completed");?></p>
				
				<p class="desciption section fade">Administration :</p>	

				<p class="liste section fade"><?php lang("- Possibilité a un administrateur de supprimer ou désactiver des comptes utilisateurs","- Administrators can delete or deactivate user accounts");?></p>
				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Détails :","Details :");?></h4>

				<p class="desciption section fade"><?php lang("Pendant ce projet, je pense que le plus important a été de bien s'entendre et se coordonner pour éviter de se marcher dessus lors du développement. C'est pour ça que nous utiliser Trello et que nous nous appelions tous les jours pour être sûr que tout avancé normalement. Nous nous aidions à chaque problème afin de le débloquer le plus rapidement possible.","During this project, I think the most important thing was to get along well and coordinate to avoid stepping on each other during development. That's why we used Trello and called each other every day to make sure everything was progressing normally. We helped each other with every problem to get it sorted out as quickly as possible.");?></p>
				<p class="desciption section fade"><?php lang("Ce projet à était super formateur pour moi car c'est la première fois que je réalisais un projet web en groupe. Cela m’a permis de découvrir l'un des aspects élémentaires du développement web.","This project has been a great learning experience for me because it was the first time I'd done a web project as part of a group. It allowed me to discover one of the basic aspects of web development."); ?>
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