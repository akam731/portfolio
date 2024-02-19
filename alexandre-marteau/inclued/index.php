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
	header('location: ../'.$_SESSION['language']."/");
}

// Condition permettant le changement de langue du site
if (isset($_GET['language']) AND $_GET['language'] == "change") {
	if($_SESSION['language'] == "fr"){
		$_SESSION['language'] = "en";
	}else{
		$_SESSION['language'] = "fr";
	}
	header('location: ../'.$_SESSION['language']."/");
}

// Fonction permettant le changement de langage
function lang($msg_fr, $msg_en){

	 if ($_SESSION['language'] == "fr") {

	 	echo $msg_fr;

	 }elseif($_SESSION['language'] == "en"){

	 	echo $msg_en;
	 }

}


if (isset($_GET['target']) AND !empty($_GET['target'])) {
	$_SESSION['target'] = $_GET['target'];
    session_write_close(); 
	header('location:../');
}

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/7055cf6fe9.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style/inclued/index.css">
	<link rel="stylesheet" type="text/css" href="../style/style_responsive/index.css">
	<link rel="stylesheet" type="text/css" href="../style/inclued/header.css">
	<link rel="stylesheet" type="text/css" href="../style/inclued/footer.css">
	<?php 

	if ($_SESSION['color_mode'] == "dark") { ?>
	<link rel="stylesheet" type="text/css" href="../style/inclued/index_dark.css">
	<link rel="stylesheet" type="text/css" href="../style/inclued/header_dark.css">
	<link rel="stylesheet" type="text/css" href="../style/inclued/footer_dark.css">
	<?php } ?>
	<title>Alexandre Marteau | Portfolio</title>
</head>
<body id="body">
 
 <script type="text/javascript">

    window.addEventListener('load', function() {
    	         <?php 

      	if (isset($_SESSION['target'])) {
      		?>
      		scrollToSection('<?php echo $_SESSION['target']; ?>');
      		<?php
      		unset($_SESSION['target']);
      	}

      ?>
});

 </script>

	<?php require_once("header/header.php"); ?>


	<br>
	<br> 
	<br>
	<br>
	<br>


	<section id="index_title" class="index_title">
		<div class="index_title_left section fade">
			<div class="thin_border"></div>
			<h1 class="title">
				<span>Alexandre Marteau</span><br>
				<span><?php lang("Développeur web","Web developer"); ?></span>
			</h1>
			<p class="title_description">
				<?php lang("Développeur web passionné. Explorez mon portfolio pour découvrir des projets innovants, du design responsive au développement backend robuste. Créons l'avenir du web ensemble.", "Passionate web developer. Explore my portfolio to discover innovative projects, from responsive design to robust backend development. Let's create the future of the web together.") ?> 
			</p>
			<br>
			<div class="title_status">
				<div class="status_model">
					<p>
						<?php 
						
						require_once("../inclued/content/fr_status.php");

						?>

					</p>
				</div>
			</div>
		</div>
		<div class="index_title_right section fade">
			<img class="img_profile" src="../images/index/profile.png">
		</div>

	</section>

	<br>
	<br>
	<br>
	<br>

	<div class="header_scroller" id="header_scroller">
	    
	    <div class="scroller" onclick="scrollToSection('header_scroller')" onmouseover="scrollerOver();" onmouseout="scrollerOut();">
	        <span id="scroller_span_1"></span>
	        <span id="scroller_span_2"></span>
	        <span id="scroller_span_3"></span>
	        <span id="scroller_span_4"></span>
	    </div>
	    
	</div>

	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >

	<section id="about" class="about">

		
		<div class="about_content section fade">

			<div class="about_img">
				<img src="../images/index/about.png">
			</div>

			<div class="about_text">
				<h2><?php lang("À propos de moi","About me") ?></h2>
				<?php 
						
					require_once("../inclued/content/about.php");

				?>
				<div class="about_changing">
					<span class="first_span" id="first" onclick="about_first('<?php if ($_SESSION['color_mode'] == 'dark') { echo "#272727";}else{ echo "#fff";} ?>');">
						<span class="second_span" id="first_center"></span>
					</span>
					<span class="first_span" id="second" onclick="about_second('<?php if ($_SESSION['color_mode'] == 'dark') { echo "#272727";}else{ echo "#fff";} ?>');">
						<span class="second_span" id="second_center"></span>
					</span>
					<span class="first_span" id="third" onclick="about_third('<?php if ($_SESSION['color_mode'] == 'dark') { echo "#272727";}else{ echo "#fff";} ?>');">
						<span class="second_span" id="third_center"></span>
					</span>
				</div>

				<div class="about_contact">
					<a class="about_contact_link" id="about_contact_link" onclick="scrollToSection('header_scroller')"><?php lang("Télécharger mon CV", "Download my CV") ?></a>

				<div class="about_contact_hidden" id="about_contact_hidden">

			    <div class="cv-option" id="standard-cv">
			        <img src="../images/header/drapeau-france.jpg">
			        <p><?php lang("Une version française de mon CV", "A French version of my CV") ?></p><br>
			        <a href="../doc/CV_fr.pdf" download="CV_FR Marteau Alexandre"><i class="fa-solid fa-download"></i></a>
			    </div>

			    <div class="cv-option" id="creative-cv">
			        <img src="../images/header/united-kingdom-flag.png">
			        <p><?php lang("Une version anglaise de mon CV", "An English version of my CV") ?></p><br>
			        <a href="../doc/CV_en.pdf" download="CV_EN Marteau Alexandre" download><i class="fa-solid fa-download"></i></a>
			    </div>

				</div>	



					<a class="about_contact_logo" href="https://www.linkedin.com/in/alexandre-marteau-45ab0327b/" target="about_blank"><i class="fa-brands fa-linkedin-in"></i></a>

					<a href="mailto:alexandre.marteau63@gmail.com" class="about_contact_logo about_contact_logo_right" id=""><i class="fa-regular fa-envelope"></i></a>
				</div>

			</div>

		</div>	

		<br>
		<br>
		<br>
		<br>
		<br>
		<br class="br_resp_about" >
		<br class="br_resp_about" >
		<br class="br_resp_about" >

		<div class="skills_slider  section fade">
		  <div class="slideshow" id="slideshow">
			  	<div class="slideshow_part">
					<div class="slider">					
						<img class="slider_logo" src="../images/index/html.png">
						<h4>HTML & CSS</h4>
						<p><?php lang("Capable de créer des interfaces web esthétiques et structurées.", "Able to create aesthetic and structured web interfaces.") ?>
						</p>	
						<div class="slider_border"></div>
					</div>
					<div class="slider">
						<img class="slider_logo" src="../images/index/js.png">
						<h4>Javascript</h4>
						<p><?php lang("Capable de créer des expériences interactives, ergonomiques et dynamiques.", "Able to create interactive, ergonomic and dynamic experiences in real time.") ?>
						</p>	
						<div class="slider_border"></div>
					</div>
					<div class="slider">
						<img class="slider_logo" src="../images/index/java.png">
						<h4>Java</h4>
						<p><?php lang("Capable de créer des application robustes, fiables et évolutives.", "Able to create robust, reliable and scalable applications.") ?>
						</p>	
						<div class="slider_border"></div>
					</div>	

		  		</div>
			  	<div class="slideshow_part">
					<div class="slider">
						<img class="slider_logo" src="../images/index/php.png">
						<h4>PHP</h4>
						<p><?php lang("Capable de dynamiser des applications web pour améliorer l'expérience utilisateur.", "Able to boost web applications to improve user experience.") ?>
						</p>	
						<div class="slider_border"></div>
					</div>			
					<div class="slider">
						<img class="slider_logo" src="../images/index/sql.png">
						<h4>SQL</h4>
						<p><?php lang("Capable de concevoir des bases de données fiables en assurant l'intégrité des données.", "Able to design databases ensuring data reliability and integrity.") ?>
						</p>	
						<div class="slider_border"></div>
					</div>
					<div class="slider">
						<img class="slider_logo" src="../images/index/python.png">
						<h4>Python</h4>
						<p><?php lang("Capable de créer et d'exploiter des datasets dans le cadre du machine learning", "Able to create and use datasets in the context of machine learning") ?>
						</p>	
						<div class="slider_border"></div>
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
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >

	<div class="air_reponsive">
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
	</div>

	<div class="air_reponsive">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>


		<br>
		<br>
		<br>
		<br>
		<br id="link_portfolio">
		<br>
		<br>
		<br>

	<section class="portfolio">
		

		<h2><?php lang("Jetez un coup d'œil à mes derniers projets", "Take a look at my latest projects"); ?></h2>
		<br>
		<br>
		<div class="portfolio_layer">

			<article onclick="redirect('portfolio/?name=enchere');">
				<img src="../images/index/project/enchere.jpg">
				<p><?php lang('Site de vente au enchère','Auction site') ?></p>
			</article>

			<article onclick="redirect('portfolio/?name=portfolio');">
				<img src="../images/index/project/portfolio.jpg">
				<p><?php lang("Mon site Portfolio",'My Portfolio site') ?></p>
			</article>

			<article onclick="redirect('portfolio/?name=elec');">
				<img src="../images/index/project/dev2.jpeg">
				<p><?php lang('Site d\'électroménagé reconditioné','Refurbished household appliances site') ?></p>
			</article>

			<article onclick="redirect('portfolio/?name=booki');">
				<img src="../images/index/project/booki.jpg">
				<p><?php lang("Page d'acceuil d'une agence de voyage","Home page of a travel agency") ?></p>
			</article>
		</div>


	</section>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br class="br_resp_about" >
	<br>
	<br class="br_resp_about" >
	<br id="link_contact">
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >
	<br class="br_resp_about" >


	<section class="contacts">
		

		<div class="contact_content section fade">

			<div class="contact_text">
				<h2><?php lang("Mon profil vous intéresse ?", "Are you interested in my profile ?"); ?></h2><br>

				<p><?php lang("Pour toute question que vous auriez, qu'il s'agisse d'un nouveau projet ou d'une opportunité. <br> Je suis à votre disposition !", "For any questions you have, whether it's about a new project or an opportunity. <br> I am at your disposal !"); ?></p>

				<p><?php lang("Vous pouvez utiliser ce formulaire de contact. Ou bien m'envoyer un e-mail à l'adresse :", "You can use this contact form. Or send me an email to:"); ?>
				<br><a href="">alexandre.marteau63@gmail.com</a></p>

				<p><?php lang("Ma priorité sera de vous répondre aussi rapidement que possible.","My priority will be to respond to you as quickly as possible."); ?></p>

			</div>


			<form method="POST" action="../inclued/messageForm.php" class="contact_form section fade">


				<input id="input_name" type="text" maxlength="255" name="nom" placeholder="<?php lang("Nom","Name"); ?>" required><br><br>
				<input id="input_email" type="email" maxlength="320" name="mail" placeholder="E-mail" required><br><br>
				<input id="input_subject" type="text" maxlength="255" name="subject" placeholder="<?php lang("Objet","Subject"); ?>" required><br><br>
				<textarea id="input_message" name="message" maxlength="5000" placeholder="<?php lang('Votre message', "Your message") ?>" required></textarea><br><br>

				<button name="send">
					<?php lang("Envoyer ", "Send ") ?>
					<span class="arrow">&#x2192;</span>
				</button>

			</form>

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


	<?php require_once("footer/footer.php"); ?>
	


	<script src="../js/header.js"></script>
	<script src="../js/index.js"></script>
</body>
</html>