<link rel="stylesheet" type="text/css" href="inclued/style/header-index.css">
<link rel="stylesheet" type="text/css" href="style_responsive/header-index_responsive.css">
<header id="header" class="header">
	<a href="../dev/" class="nav_logo">LaLantern</a>
	<nav class="navbar">
		<a href="simulateur/" onmouseover="argenthover()" onmouseout="argentout()">
			<img id="argent" class="nav_icon" src="images/icon/argent.png">
			<img id="argent-b" class="nav_icon" src="images/icon/argent-b.png">
			Reprises
		</a>
		<span class="border"></span>
		<a href="" onmouseover="laverhover()" onmouseout="laverout()">
			<img id="laver" class="nav_icon" src="images/icon/machine-a-laver.png">
			<img id="laver-b" class="nav_icon" src="images/icon/machine-a-laver-b.png">
			Nos produits
		</a>
		<span class="border"></span>	
		<a href="" onmouseover="molettehover()" onmouseout="moletteout()">
			<img id="molette" class="nav_icon" src="images/icon/cle-molette.png">
			<img id="molette-b" class="nav_icon" src="images/icon/cle-molette-b.png">
			Fonctionnement
		</a>
		<span class="border"></span>
		<a href="" onmouseover="inthover()" onmouseout="intout()">
			<img id="int" class="nav_icon" src="images/icon/interrogation.png">
			<img id="int-b" class="nav_icon" src="images/icon/interrogation-b.png">
			Qui sommes nous ?
		</a>
	</nav>
	<div class="nav_id">

		<a href="" onmouseover="utihover()" onmouseout="utiout()">
			<img id="uti" class="id_icon" src="images/icon/utilisateur.png">
			<img id="uti-b" class="id_icon" src="images/icon/utilisateur-b.png">
			<?php
			if (isset($_SESSION['mail'])) {
				?>
				<span class="prof">
					Mon profil
				</span>
				<?php
			}else{
				?>
				<span class="conec">
					S'identifier
				</span>
				<?php
			}
			?>
		</a>
	</div>

</header>
<nav class="navbar_bottom">
	<a href="">
		<img class="nav_icon_bottom" src="images/icon_bottom/argent.png"><br>
		Reprises
	</a>
	<span class="border_bottom"></span>
	<a href="">
		<img class="nav_icon_bottom" src="images/icon_bottom/machine-a-laver.png"><br>
		Nos produits
	</a>
	<span class="border_bottom"></span>
	<a href="">
		<img class="nav_icon_bottom" src="images/icon_bottom/cle-molette.png"><br>
		Fonctionnement
	</a>	
	<span class="border_bottom"></span>
	<a href="">
		<img class="nav_icon_bottom" src="images/icon_bottom/interrogation.png"><br>
		À propos
	</a>
</nav>
<script type="text/javascript" src="js/header-index.js"></script>