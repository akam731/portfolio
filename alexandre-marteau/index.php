<?php
session_start();

if (!isset($_SESSION['language'])) {
	$_SESSION['language'] = 'fr';
}
if (!isset($_SESSION['color_mode'])) {
	$_SESSION['color_mode'] = 'default';
}

if($_SESSION['language'] == "en"){
	header('location: en/');
}else{
	header('location: fr/');
}



?>

<meta name="description" content="Découvrez Alexandre Marteau, développeur web. Des sites uniques qui captivent et inspirent.">
