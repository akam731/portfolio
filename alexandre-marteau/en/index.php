<?php
session_start();

$_SESSION['language'] = 'en';

if (isset($_SESSION['portfolio'])) {
	unset($_SESSION['portfolio']);
}

require_once("../inclued/index.php");

?>
