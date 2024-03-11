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
				<?php lang("Site d'appareils reconditionné","Refurbished appliances website"); ?>
			</h1>
			<p class="title_description">
				<?php lang(

					"Ce site offre la possibilité de demander une estimation instantanée pour différents appareils d'électroménagers via des formulaires pouvant être directement créés via l'espace administrateur du site", 


				"This site offers the possibility of requesting an instant estimate for various household appliances using forms that can be created directly via the site's administrator area.") ?> 
			</p>
			<br>
	</section>
	
	<section class="portfolio_land_elec section fade">

	
	</section>

	<section class="portfolio_desc">
		
		<div class="details section fade">
			
			<div class="details_bloc">
				<h3><?php lang('Environnements','Environments'); ?></h3>
		 		<p>Sublime Text</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3>Technologies</h3>
				<p>HTML</p>
				<p>CSS</p>
				<p>JavaScript</p>
				<p>PHP</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3><?php lang('Site Web','Website'); ?></h3>
				<button onclick="window.open('../../portfolio/elec/demo/', '_blank')">
					<?php lang("Demo live","Live demo");?>
					<span class="arrow">&#x2192;</span>
				</button>
			</div>
		</div>

		<div class="content">
			
			<div class="content_bloc">
					
				<h3 class="content_bloc_title section fade"><?php lang("Aperçu du projet","Project overview");?></h3>

				<p class="desciption section fade"><?php lang("Le site que j'ai créé avait pour but de proposer à un utilisateur de pouvoir obtenir un prix de reprise instantanément via un formulaire disponible sur le site. De plus, depuis un espace dédié, un administrateur peut décider d'ajouter / supprimer / modifier des formulaires","The aim of the site I created was to enable users to obtain a trade-in price instantly via a form available on the site. In addition, from a dedicated area, an administrator can decide to add/delete/modify forms.");?></p>
				<p class="desciption section fade"><?php lang("Voici les bases de ce projet :","This is the basis of the project:");?></p>
				<br>
				<p class="liste section fade"><?php lang("1. Je n'avais aucune maquette de base.","1. I didn't have any basic models.");?></p>
				<p class="liste section fade"><?php lang("2. Je ne maitrisais que les languages HTML, CSS, JS et PHP.","2. I only knew HTML, CSS, JS and PHP.");?></p>
				<p class="liste section fade"><?php lang("3. Le site devait être adapté pour tout type de support.","3. The site had to be suitable for all types of media.");?></p>
				<p class="liste section fade"><?php lang("4. Plutôt que d'utiliser des bases de données, je voulais m'exercer à la manipulation de fichier. Ainsi toutes les données liées au site sont stockées dans des fichiers directement au sein des fichiers du site","4. Rather than using databases, I wanted to practise file manipulation. So all the data linked to the site is stored in files directly within the site's files.");?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade">Conception</h4>
				
				<p class="desciption section fade" ><?php lang("L'intégralité des images et icônes présentes sur le site ont étais trouvé sur le internet et pour certaines un peu modifier pour coller au site. Je n'avais aucune maquette donc je devais réaliser le design moi-même.","All the images and icons on the site were found on the internet and some were slightly modified to fit the site. I didn't have any mock-ups so I had to do the design myself.");?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Fonctionnalités","Features"); ?></h4>
				
				<p class="desciption section fade"><?php lang("En tant qu'utilisateur :","As a user :");?></p>
				<p class="liste section fade"><?php lang("- Avoir un environement agréable et fonctionel","- A pleasant and functional environment");?></p>
				<p class="liste section fade"><?php lang("- Pouvoir éfectuer des devis de reprises de son appareil eléctroménager avec unn simple formulaire","- Simply fill in the form to receive a quotation for the trade-in of your household appliance.");?></p>
				<br>
				<p class="desciption section fade"><?php lang("En tant qu'administrateur du site :","As site administrator :");?></p>
				<p class="liste section fade"><?php lang("- Pouvoir manipuler les formulaires : ( modifier / créer / supprimer / retirer la mise en ligne )","- Be able to manipulate forms: ( modify / create / delete / withdraw upload )");?></p>
				<p class="liste section fade"><?php lang("- La création de formulaire dois se faire directemnt via le site.","- Forms must be created directly via the site.");?></p>
				<p class="liste section fade"><?php lang("- Possibilité d'ajouter n'importe quel type de champs au formulaire (texte, select, checkbox ...).","- Any type of field can be added to the form (text, select, checkbox, etc.).");?></p>
				<p class="liste section fade"><?php lang("- Possibilité d'ajouer de nouveaux utilisateur/modérateur/administrateur directement via l'espace administrateur.","- New users/moderators/administrators can be added directly via the administrator area");?></p>
				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Détails :","Details :");?></h4>

				<p class="desciption section fade"><?php lang("Concernant les formulaires, je voulais qu'il soit vraiment personnalisable au maximum. Ainsi j'ai mis la possibilité de créer le formulaire de son choix avec n'importe quel type de champs de saisie, que ce soit des zones de texte, des select, des dates, des checkbox, des numéros ... De plus, toujours depuis l'espace administrateur, il est possible de modifier l'image de \"profil\" du formulaire ainsi que son titre et son sous-titre.","As far as the forms are concerned, I wanted them to be as customisable as possible. So I made it possible to create the form of your choice with any type of input field, be it text zones, selects, dates, checkboxes, numbers, etc. What's more, you can change the form's \"profile\" image, as well as its title and subtitle, all from the admin area.");?></p>
				<p class="desciption section fade"><?php lang("Enfin, une fois la structure du formulaire crée, il est possible de paramétrer les champs afin de donner un résultat instantané. On peut ainsi paramétrer un solde initial de reprise avec lequel n'importe qui débute, et qui est ensuite affiné en fonction des choix de l'utilisateur.","Finally, once the structure of the form has been created, it is possible to configure the fields to give an instant result. For example, you can set up an initial trade-in balance that anyone can start with, and which is then refined according to the user's choices."); ?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade">Illustrations :</h4>
				
				<p class="desciption section fade"><?php lang("Voici quelques screeshots du formulaire de création de formulaire :","Here are a few screeshots of the form creation form :");?></p>
				<br>
			</div>
 
		</div>

	</section>

	<section class="portfolio_screen_oncly_1">	
		<img alt="Présentation de la page administrateur permettant la création de fomulaire de reprise d'appareils électroménager" onclick="window.open('../../portfolio/elec/admin_1.png', '_blank')" class="img_full section fade" src="../../portfolio/elec/admin_1.png" title="<?php lang("Agrandir", "View larger"); ?>">
	</section>

	<section class="portfolio_screen_oncly_2">	
		<img alt="Présentation de la partie création de critères du fomulaire de reprise d'appareils électroménager" onclick="window.open('../../portfolio/elec/admin_2.png', '_blank')" class="img_min section fade" src="../../portfolio/elec/admin_2.png" title="<?php lang("Agrandir", "View larger"); ?>">
		<img alt="Présentation de la partie annalyse des données du fomulaire de reprise d'appareils électroménager" onclick="window.open('../../portfolio/elec/admin_3.png', '_blank')" class="img_min section fade" src="../../portfolio/elec/admin_3.png" title="<?php lang("Agrandir", "View larger"); ?>">
	</section>


	<br>
	<br>
	<br>
	<?php require_once("../../inclued/footer/footer_port.php"); ?>
	<script src="../../js/header.js"></script>
	<script src="../../js/portfolio.js"></script>
</body>
</html>