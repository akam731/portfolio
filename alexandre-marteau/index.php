<?php
session_start();

if (!isset($_SESSION['language'])) {
	$_SESSION['language'] = 'fr';
}
if (!isset($_SESSION['color_mode'])) {
	$_SESSION['color_mode'] = 'default';
}

header('location: fr/');

?>