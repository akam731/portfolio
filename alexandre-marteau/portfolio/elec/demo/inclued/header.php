<link rel="stylesheet" type="text/css" href="../inclued/style/header.css">
<link rel="stylesheet" type="text/css" href="../style_responsive/header_responsive.css">
<header id="header" class="header">
	<img alt="Logo Lalantern" src="../images/logo.png">
	<nav id="nav" class="nav">
		<a class="a" href="../">Accueil</a>
		<a <?php if ($_SESSION['page'] == 'offer') {?> class="select" <?php } else {
			?>  class="a"  <?php } ?> href="../simulateur/"><span class="reprise_2">Reprise</span><span class="reprise_1">Nos offres de reprise</span></a>
		<a <?php if ($_SESSION['page'] == 'product') {?> class="select" <?php } else {
			?>  class="a"  <?php } ?> href="">Nos produits</a>
		<a <?php if ($_SESSION['page'] == 'fonc') {?> class="select" <?php } else {
			?>  class="a"  <?php } ?> href="">Fonctionnement</a>
		<a <?php if ($_SESSION['page'] == 'propos') {?> class="select" <?php } else {
			?>  class="a"  <?php } ?> href="">À propos</a>
		<a <?php if ($_SESSION['page'] == 'profil') {?> class="select" <?php } else {
			?>  class="a"  <?php } ?> href="">Profil</a>
	</nav>	
	<div id="toggle" class="toggle" onclick="slid_nav()">
		<span id="toogle_icon" class="toggle_icon"></span>
	</div>
</header>
<script type="text/javascript" src="../js/header.js"></script>