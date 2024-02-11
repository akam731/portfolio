<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>



  <nav id="header_nav" class="header_nav">

  	<img id="header_nav_logo" src="../images/<?php 


    	if ($_SESSION['color_mode'] == "default") {
    		echo "logo.png"; 

    	}else{
    		echo "logo_dark.png"; 
    	} ?>"class="header_nav_logo">

  	<div id="header_nav_a" class="header_nav_a nav_hidden">
	    <a onclick="scrollToSection('body');"><?php lang("Accueil", "Home"); ?></a>
	    <a onclick="scrollToSection('header_scroller');"><?php lang("À propos", "About me"); ?></a>
	    <a onclick="scrollToSection('link_portfolio')">Portfolio</a>
	    <a onclick="scrollToSection('link_contact')">Contact</a>





	    <div id="header_nav_tools_responsive" class="header_nav_tools_responsive ">
    	
    	<a href="?color=change"><img class="header_nav_tools_color" src="../images/header/<?php 


	    	if ($_SESSION['color_mode'] == "default") {
	    		echo "clear_mode.jpg";
	    		$fr_color = "Passer au mode sombre"; 
	    		$en_color = "Switch to dark mode"; 

	    	}else{
	    		echo "dark_mode.jpg";
	    		$fr_color = "Passer au mode claire"; 
	    		$en_color = "Switch to clear mode"; 
	    	} ?>" alt="<?php lang($fr_color, $en_color) ?>" title="<?php lang($fr_color, $en_color) ?>"></a>

	    	    	<a href="?language=change"><img class="header_nav_tools_language" src="../images/header/<?php 
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
    	
    	<a href="?color=change"><img class="header_nav_tools_color" src="../images/header/<?php 


    	if ($_SESSION['color_mode'] == "default") {
    		echo "clear_mode.jpg";
    		$fr_color = "Passer au mode sombre"; 
    		$en_color = "Switch to dark mode"; 

    	}else{
    		echo "dark_mode.jpg";
    		$fr_color = "Passer au mode claire"; 
    		$en_color = "Switch to clear mode"; 
    	} ?>" alt="<?php lang($fr_color, $en_color) ?>" title="<?php lang($fr_color, $en_color) ?>"></a>

    	    	<a href="?language=change"><img class="header_nav_tools_language" src="../images/header/<?php 
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