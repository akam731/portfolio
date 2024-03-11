<?php
session_start();

if (isset($_GET['resultat'])) {
	$resultat = $_GET['resultat'];
	$_SESSION['simu-resultat'] = $_GET['resultat'];
	header('location:../resultat/');
}elseif (!isset($_SESSION['simu-resultat'])) {
	header('location:../');
}

if (isset($_SESSION['simu'])) {
	$simulateur = $_SESSION['simu'];
	$id = '../../admin/site/site-index/simulateurs/'.$simulateur.'/title.txt';
	$file = fopen($id, 'r+');
	$title = substr(fgets($file),0,-1);
	$subtitle = substr(fgets($file),0,-1);
	$img = substr(fgets($file),0,-1);
	$public = substr(fgets($file),0,-1);
	$public = substr(fgets($file),0,-1);
	if ($public != 'true') {
		header('location:../');
	}
}else{
	header('location:../');
}

if (isset($_POST['annuler'])) {
	
	header('location: ../');

}

if (isset($_POST['contact'])) {

	if (isset($_SESSION['simu-key'])) {
		$key = $_SESSION['simu-key'];

		if (file_exists('../../admin/site/site-index/simulations/'.$simulateur."/".$key.'.txt')) {
			$content = file_get_contents('../../admin/site/site-index/simulations/'.$simulateur."/".$key.'.txt');
			$content .= "\n"."contact";
			$content .= "\n"."fin";
			file_put_contents('../../admin/site/site-index/simulations/'.$simulateur."/".$key.'.txt', $content);

			$contact = true;

		}else{
			?>
			<script type="text/javascript">
				alert('Une erreur s\'est produite, veuillez réessayer ultérieurement !');
			</script>
			<?php
		}

	}else{
		?>
		<script type="text/javascript">
			alert('Une erreur s\'est produite, veuillez réessayer ultérieurement !');
		</script>
		<?php
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../style/resultat.css">
	<link rel="stylesheet" type="text/css" href="../../style_responsive/resultat.css">
	<title>Lalantern | Résultat</title>
</head>
<body>


	<header class="header">

		<a href="../../" class="header_logo">LaLantern</a>
		<h1 class="header_title">Simulateur de reprise</h1>
		<a href="../" class="header_back" href="">Quitter</a>

	</header>
	<?php 
	$id = '../../admin/site/site-index/simulateurs/'.$simulateur.'/variations/result.txt';
	$file = fopen($id, 'r+');
	$title_result = substr(fgets($file),0,-1);
	$subtitle_result = substr(fgets($file),0,-1);
	$affichage = substr(fgets($file),0,-1);
	$devise = substr(fgets($file),0,-1);
	$texte = substr(fgets($file),0,-1);
	?>

	<br>
	<br>
	<section class="resltat_show">
		<h1 class="simu_title"><?php echo $title." | "; ?></h1>
		<h3 class="simu_subtitle"><?php echo $title_result; ?></h3>
		<br>
		<br>
		<div class="resultat_center">
			<br>
			<div class="resultat">
				<?php
				if (isset($contact) AND $contact == true) {
					?>
					<style type="text/css">
						
						.resultat{
							display: inline-block;
						}

						.resultat_center{
							text-align: center;
						}

					</style>


						<h3 class="contact_h3_">Un conseiller vous contactera sous peu par mail !</h3>
					<?php
				}else{
					if ($affichage == 'true') {
						?>
						<h3 class="simu_subtitle_1"><?php echo $subtitle_result ?></h3>
						<div class="result_w">
							<h4 class="simu_result_price"><?php echo $_SESSION['simu-resultat']." ".$devise; ?></h4>
						</div>
						<?php
					}else{
						?>
						<div class="result_w">
							<h4 class="simu_result_text"><?php echo $_SESSION['simu-resultat']." ".$text; ?></h4>
						</div>
						<?php
					}

					?>
					<br>
					<br>
					<br>
					<?php
				}
				?>
			</div>
			<br>
			<p class="p">Vous pouvez décider de vous faire contactez par un membre de notre équipe pour valider la reprise de votre appareil !</p>
			<br class="br_p">
			<form method="POST">
				<?php
				if (isset($contact) AND $contact == true) {
					?>
					<input type="submit" name="annuler" value="Retourner à l'acceuil" class="acceuil">
					<?php
				}else{
					?>
					<input type="submit" name="annuler" value="En rester là" class="stop">
					<input type="submit" name="contact" value="Me faire contacter" class="contact1">
					<?php
				}
				?>
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

	<?php 
	require_once('../../inclued/footer.php');
	?>
</body>
</html>