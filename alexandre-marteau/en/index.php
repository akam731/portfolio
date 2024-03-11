<?php
session_start();

$_SESSION['language'] = 'en';

if (isset($_SESSION['portfolio'])) {
	unset($_SESSION['portfolio']);
}

require_once("../inclued/index.php");

?>
<head>
	
	<link rel="icon" type="image/png" sizes="16x16"  href="../images/favicon.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	
	<meta name="description" content="Découvrez Alexandre Marteau, développeur web. Des sites uniques qui captivent et inspirent.">
	
</head>