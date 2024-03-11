<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


 
  <nav id="header_nav" class="header_nav">

  	<img id="header_nav_logo" src="../../images/<?php 


    	if ($_SESSION['color_mode'] == "default") {
    		echo "logo_icon.png"; 

    	}else{
    		echo "logo_icon_dark.png"; 
    	} ?>"class="header_nav_logo">

  	<div id="header_nav_a" class="header_nav_a nav_hidden">
	    <a href="../"><?php lang("Accueil", "Home"); ?></a>
	    <a href="../?target=header_scroller"><?php lang("À propos", "About me"); ?></a>
	    <a href="../?target=link_portfolio">Portfolio</a>
	    <a href="../?target=link_contact">Contact</a>





	    <div id="header_nav_tools_responsive" class="header_nav_tools_responsive ">
    	<a href="?color=change"  class="color_change"><?php 


	    	if ($_SESSION['color_mode'] == "default") {
	    		?>
	    		<i id="color_mode" class="fa-solid fa-moon color_mode"  title="<?php lang("Passer en mode sombre", "Switch to dark mode"); ?>" ></i>
	    		<?php
	    	}else{
	    		?>
	    		<i id="color_mode" class="fa-solid fa-moon color_mode"  title="<?php lang("Passer en mode clair", "Switch to light mode"); ?>" ></i>
	    		<?php
	    	} ?></a>

	    	    	<a href="?language=change"><img class="header_nav_tools_language" src="../../images/header/<?php 
	    	if ($_SESSION['language'] == "fr") {
	    		echo "drapeau-france.jpg";
	    	}else{
	    		echo "united-kingdom-flag.png";
	    	} ?>" alt="<?php 
	    	lang("Changer la langue du site", "Change the website's language") ?>" title="<?php lang("Changer la langue du site", "Change the website's language") ?>"></a>


    	</div>



 


    </div>
    <input id="menu" type="checkbox" role="button" aria-label="Display the menu" class="menu hidden">

    <div id="header_nav_tools" class="header_nav_tools tools_hidden">
    	
    	<a href="?color=change"  class="color_change"><?php 


	    	if ($_SESSION['color_mode'] == "default") {
	    		?>
	    		<i id="color_mode" class="fa-solid fa-moon color_mode"  title="<?php lang("Passer en mode sombre", "Switch to dark mode"); ?>" ></i>
	    		<?php
	    	}else{
	    		?>
	    		<i id="color_mode" class="fa-solid fa-moon color_mode"  title="<?php lang("Passer en mode clair", "Switch to light mode"); ?>" ></i>
	    		<?php
	    	} ?></a>

    	    	<a href="?language=change"><img class="header_nav_tools_language" src="../../images/header/<?php 
    	if ($_SESSION['language'] == "fr") {
    		echo "drapeau-france.jpg";
    	}else{
    		echo "united-kingdom-flag.png";
    	} ?>" alt="<?php 
    	lang("Changer la langue du site", "Change the website's language") ?>" title="<?php lang("Changer la langue du site", "Change the website's language") ?>"></a>

    </div>
  </nav>
</body>
</html>