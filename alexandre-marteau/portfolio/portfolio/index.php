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
				<?php lang("Mon Site Personel","My personal website"); ?>
			</h1>
			<p class="title_description">
				<?php lang("Ce site offre la possibilité de présenter mes compétences ainsi que mon portfolio de mes différents projets.","This site gives me the opportunity to present my skills and my portfolio of different projects.") ?> 
			</p>
			<br>
	</section>
	
	<section class="portfolio_land_port section fade">

	
	</section>

	<section class="portfolio_desc">
		
		<div class="details section fade">
			
			<div class="details_bloc">
				<h3><?php lang('Environnements','Environments'); ?></h3>
		 		<p>Sublime Text</p>
		 		<p>Trello</p>
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
				<h3><?php lang('Gestion de versions','Version management'); ?></h3>
		 		<p>Git</p>
		 		<p>GitHub</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3><?php lang('Hébergement','Hosting'); ?></h3>
		 		<p>Amen</p>
		 		<p>Infinityfree</p>
			</div>
			<br>
			<div class="details_bloc">
				<h3><?php lang('Site Web','Website'); ?></h3>
				<button onclick="window.open('../../', '_blank')">
					<?php lang("Demo live","Live demo");?>
					<span class="arrow">&#x2192;</span>
				</button>
			</div>
		</div>

		<div class="content">
			
			<div class="content_bloc">
					
				<h3 class="content_bloc_title section fade"><?php lang("Aperçu du projet","Project overview");?></h3>

				<p class="desciption section fade"><?php lang("Mon site a pour but principal de me présenter ainsi que mes compétences, dans le but ultime d'obtenir un stage en entreprise pour valider ma formation. Il vise également à faciliter ma recherche d'une alternance dans le cadre de ma poursuite d'études en tant que Concepteur Développeur d'Applications.","The main purpose of my website is to present myself and my skills, with the ultimate aim of obtaining a work placement to validate my training. It also aims to help me find a work-study placement as part of my continuing studies as an Applications Designer and Developer.");?></p>
				<p class="desciption section fade"><?php lang("Voici mon objectif en créant ce site :","My aim in creating this site is :");?></p>
				<br>
				<p class="liste section fade"><?php lang("1. Me présenter ainsi que mes compétences.","1. Introduce myself and my skills.");?></p>
				<p class="liste section fade"><?php lang("2. Proposer la possibilité de télécharger mon CV","2. Offer the possibility of uploading my CV");?></p>
				<p class="liste section fade"><?php lang("3. Offrir la possibilité de me contacter simplement et rapidement","3. Offer the possibility of contacting me simply and quickly");?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade">Conception</h4>
				
				<p class="desciption section fade" ><?php lang("L'intégralité des images et icônes présentes sur le site ont étais trouvé sur le internet et pour certaines un peu modifier pour coller au site. Je n'avais aucune maquette donc je devais réaliser le design moi-même.","All the images and icons on the site were found on the internet and some were slightly modified to fit the site. I didn't have any mock-ups so I had to do the design myself.");?></p>
				<p class="desciption section fade" >
					<?php lang("Concernant les icons, j'ai majoritairement utilisé fontawesome. Et pour le formulaire de contact, j'ai utilisé la bibliothèque PHPMailer.","For the icons, I mainly used fontawesome. And for the contact form, I used the PHPMailer library."); ?>
				</p>
				<p class="desciption section fade">
					<?php lang("Pour clarifier toutes les étapes de développement du site et les organiser efficacement, j'ai opté pour l'utilisation de la plateforme Trello. Cette approche m'a permis de maintenir une structure organisée tout au long du processus de création de mon site, en établissant clairement les priorités à chaque étape.","To clarify all the stages of the site's development and organise them efficiently, I opted to use the Trello platform. This approach enabled me to maintain an organised structure throughout the process of creating my site, clearly establishing priorities at each stage."); ?>
				</p>
				<p class="desciption section fade">
					<?php lang("Enfin, j'ai créé un répertoire GitHub que j'ai relié à mon projet en local grâce à Git, me permettant ainsi de versionner mon site et d'éviter toute perte de données.","Finally, I created a GitHub repository which I linked to my local project using Git, allowing me to version my site and avoid any loss of data."); ?>
				</p>

				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Fonctionnalités","Features"); ?></h4>
				
				<p class="liste section fade"><?php lang("- Présenter mon parcours scolaire","- Present my shool cursus");?></p>
				<p class="liste section fade"><?php lang("- Afficher mon CV et le proposer au téléchargement","- Post my CV and make it available to download");?></p>
				<p class="liste section fade"><?php lang("- Offrir la possibilité de me contacter directement sur le site","- Offer the possibility of contacting me directly on the site");?></p>
				<p class="liste section fade"><?php lang("- Présenter les différents projets que j'ai pu réaliser","- Present the various projects I have completed");?></p>
				<p class="liste section fade"><?php lang("- Montrer mes compétences dans le but d'attirer des recruteurs","- Present the various projects I have completed");?></p>
				<p class="liste section fade"><?php lang("- Proposer un mode sombre et un mode clair","- Offer a dark mode and a light mode");?></p>
				<p class="liste section fade"><?php lang("- Proposer une version francaise et anglaise","- Propose a French and English version");?></p>
				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Hébergement :","Hosting :");?></h4>

				<p class="desciption section fade">
					<?php lang("L'une des parties qui m'a le plus enrichi est indéniablement celle concernant le déploiement du site. Bien que j'aie déjà eu l'expérience du déploiement de sites, le passage à l'utilisation d'un nom de domaine personnalisé était une première pour moi. Ainsi, j'ai entrepris d'acquérir mon propre nom de domaine chez ","One of the parts that enriched me the most was undeniably the part about deploying the site. Although I'd already had experience of deploying sites, the switch to using a personalised domain name was a first for me. So I set about acquiring my own domain name from "); ?><a href="https://www.amen.fr/" target="about_blank">amen.fr</a>.
				</p>
				<p class="desciption section fade"><?php lang("Ensuite, il a été nécessaire de choisir un hébergeur, c'est pourquoi j'ai décidé d'opter pour ","Then I had to choose a web host, which is why I decided to opt for ");?><a href="https://www.infinityfree.com/" target="about_blank">infinityfree.com</a><?php lang(" en raison de sa gratuité. J'ai ensuite procédé au pointage des DNS vers Infinityfree, ainsi qu'à la demande du certificat SSL. Ces étapes ont été très enrichissantes pour moi, et j'ai finalement réussi à atteindre mon objectif : avoir mon propre site."," because it's free. I then proceeded to point the DNS to Infinityfree, as well as requesting the SSL certificate. These steps were very rewarding for me, and I finally managed to achieve my goal of having my own site."); ?></p>

				<br>

				<h4 class="content_bloc_subtitle section fade"><?php lang("Détails :","Details :");?></h4>

				<p class="desciption section fade"><?php lang("Pendant le développement de ce site, j'ai cherché activement à favoriser ma progression. C'est ainsi que j'ai eu l'idée d'intégrer plusieurs modes de couleur ainsi qu'une version disponible en français et en anglais. Cette initiative m'a offert une opportunité précieuse d'expérimenter et d'acquérir de nouvelles compétences, qui seront indubitablement bénéfiques pour mes projets futurs.","During the development of this site, I really wanted it to allow me to progress, so I came up with the idea of implementing different colour modes for the site, as well as a French and an English version. This allowed me to experiment and learn a lot of things that I'm sure I'll be able to use a lot.");?></p>
				<p class="desciption section fade"><?php lang("Bien entendu, mon objectif principal lors de la création de ce site est de décrocher un stage afin de valider ma formation. Ce serait une étape cruciale dans mon parcours, me permettant ainsi de poursuivre mes études dans ce domaine.","Of course, my main objective in creating this site is to get a work placement in order to complete my training. This would be a crucial step in my career path, enabling me to continue my studies in this field."); ?></p>

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