<?php 
session_start();
 
if (isset($_GET['name'])) {
	$_SESSION['portfolio'] = $_GET['name'];
  	header('location:../portfolio/');
}elseif(!isset($_SESSION['portfolio'])){
	$_SESSION['portfolio'] = "enchere";
  	header('location:../portfolio/');
} 

if ($_SESSION['portfolio'] == "enchere") {

	require_once("../../portfolio/enchere/index.php");

}elseif ($_SESSION['portfolio'] == "portfolio") {
	
	require_once("../../portfolio/portfolio/index.php");

}elseif ($_SESSION['portfolio'] == "elec") {
	
	require_once("../../portfolio/elec/index.php");

}elseif ($_SESSION['portfolio'] == "booki") {
	
	require_once("../../portfolio/booki/index.php");

}elseif ($_SESSION['portfolio'] == "expec") {
	
	require_once("../../portfolio/expec/index.php");

}elseif ($_SESSION['portfolio'] == "appPhp") {
	
	require_once("../../portfolio/appPHP/index.php");

}else{
	unset($_SESSION['portfolio']);
  	header('location:../');
}

?>
<meta name="description" content="Découvrez Alexandre Marteau, développeur web. Des sites uniques qui captivent et inspirent.">