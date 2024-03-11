<?php 
session_start();

if (isset($_GET['simu'])) {
	$_SESSION['simu'] = $_GET['simu'];
	header('location:../reprise/');
}

if (isset($_SESSION['simu-key'])) {
	unset($_SESSION['simu-key']);
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

function calc($op,$num,$solde){
	
	if ($op == '+') {
		$solde1 = $solde + $num;
	}elseif ($op == '-') {
		$solde1 = $solde - $num;
	}elseif ($op == '*') {
		$solde1 = $solde * $num;
	}elseif ($op == '/') {
		$solde1 = $solde / $num;
	}
	return $solde1;
}

if (isset($_POST['valider'])) {
	if (isset($_SESSION['critereOblig'])) {
		$critereOblig = $_SESSION['critereOblig'];
		$u = 0;
		$form = array();
		$formVariations = array();
		$resultCritere = array();
		while($u < count($critereOblig)){
			$critereWay = '../../admin/site/site-index/simulateurs/'.$simulateur.'/'.$critereOblig[$u].'.txt';
			$critereContent = fopen($critereWay,'r+');
			$name = substr(fgets($critereContent),0,-1);
			$oblig = substr(fgets($critereContent),0,-1);
			$type = substr(fgets($critereContent),0,-1);
			$detail = substr(fgets($critereContent),0,-1);
			if ($type == 'Checkbox') {
				$type_detail = explode("\&12/", $detail);
				$number_check = $type_detail[0];
				if ($number_check == '2') {
					$check1 = $critereOblig[$u].'_1';
					$check2 = $critereOblig[$u].'_2';
					if (isset($_POST[$check1]) OR isset($_POST[$check2])) {
						goto suite;
					}else{
						$error = "Les champs requis doivent être remplis !";
						goto fin;
					}
				}elseif ($number_check == '3') {

					$check1 = $critereOblig[$u].'_1';
					$check2 = $critereOblig[$u].'_2';
					$check3 = $critereOblig[$u].'_3';	
					if (isset($_POST[$check1]) OR isset($_POST[$check2])  OR isset($_POST[$check3]) ) {
						goto suite;
					}else{
						$error = "Les champs requis doivent être remplis !";
						goto fin;
					}
				}
			}

			if (isset($_POST[$critereOblig[$u]]) AND !empty($_POST[$critereOblig[$u]])) {
				suite:
				array_push($resultCritere, $critereOblig[$u]);
				array_push($form,$critereOblig[$u]);

				if ($type == "Checkbox" OR $type == 'Select') {
					array_push($formVariations, $critereOblig[$u]);
				}
			}else{
				$error = "Les champs requis doivent être remplis !";
				goto fin;
			}
			$u++;
		}

		$solde = file_get_contents('../../admin/site/site-index/simulateurs/'.$simulateur.'/variations/solde.txt');
		if (count($formVariations) > 0) {

			$_SESSION['simu-result'] = $solde;

			$variation = 1;
			$u = 0;
			$pi = $u+1;
			$variations = array();
			$variationsReel = array();
			while ($pi <= count($formVariations)) {
				$critereVar = '../../admin/site/site-index/simulateurs/'.$simulateur.'/variations/'.$variation.'.txt';
				$critereVarContent = fopen($critereVar,'r+');
				$ligne = substr(fgets($critereVarContent),0,-1);
				$arrayLigne = array($ligne);
				array_push($variations, array($formVariations[$u] => $arrayLigne));
				while ($ligne != 'fi') {
					$ligne = substr(fgets($critereVarContent),0,-1);
					if ($ligne != 'fi') {
						array_push($arrayLigne, $ligne);
						array_push($variations, array($formVariations[$u] => $arrayLigne));

					}
				}

				array_push($variationsReel, end($variations));

				$critereWay = '../../admin/site/site-index/simulateurs/'.$simulateur.'/'.$formVariations[$u].'.txt';
				$critereContent = fopen($critereWay,'r+');
				$name = substr(fgets($critereContent),0,-1);
				$oblig = substr(fgets($critereContent),0,-1);
				$type = substr(fgets($critereContent),0,-1);
				$detail = substr(fgets($critereContent),0,-1);



				if($type == 'Checkbox'){

					$varTemp = $variationsReel[$u];
					$type_detail = explode("\&12/", $detail);
					$number_check = $type_detail[0];

					if ($number_check == "1") {
						?>
						<script type="text/javascript">
							alert('<?php echo $formVariations[$u]; ?>');
						</script>
						<?php
						if (isset($_POST[$formVariations[$u]])) {
							$op = substr($varTemp[$formVariations[$u]][0],0, 1);
							$num = substr($varTemp[$formVariations[$u]][0],1);
							$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']);

						}

					}elseif ($number_check == "2") {

						$post = $formVariations[$u].'_1';
						if (isset($_POST[$post])) {
							$op = substr($varTemp[$formVariations[$u]][0],0,1);
							$num = substr($varTemp[$formVariations[$u]][0],1);
							$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']);
						}else{
							$post = $formVariations[$u].'_2';
							if (isset($_POST[$post])) {
								$op = substr($varTemp[$formVariations[$u]][1],0, 1);
								$num = substr($varTemp[$formVariations[$u]][1],1);
								$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']);
							}
						}
						
					}elseif ($number_check == "3") {
						$post = $formVariations[$u].'_1';
						if (isset($_POST[$post])) {
							$op = substr($varTemp[$formVariations[$u]][0],0, 1);
							$num = substr($varTemp[$formVariations[$u]][0],1);
							$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']);
						}else{
							$post = $formVariations[$u].'_2';
							if (isset($_POST[$post])) {
								$op = substr($varTemp[$formVariations[$u]][1],0, 1);
								$num = substr($varTemp[$formVariations[$u]][1],1);
								$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']);
							}else{
								$post = $formVariations[$u].'_3';
								if (isset($_POST[$post])) {
									$op = substr($varTemp[$formVariations[$u]][2],0, 1);
									$num = substr($varTemp[$formVariations[$u]][2],1);
									$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']);
								}
							}
						}

						
					}


				}elseif($type = 'Select'){

					$varTemp = $variationsReel[$u];
					$type_detail = explode("\&12/", $detail);
					$nb_option = count($type_detail) - 2;
					$rank = 1;
					$options = array();
					while ($rank <= $nb_option) {
						array_push($options, $type_detail[$rank]);
						$rank++;
					}

					if (isset($_POST[$formVariations[$u]]) AND !empty($_POST[$formVariations[$u]])) {
						$post = $_POST[$formVariations[$u]];

						$rank = 0;
						while ($rank <= $nb_option) {
							if ($post == $options[$rank]) {
								break;
							}
							$rank++;
						}

						$numbrLigne = 0;
						while ($rank <= $numbrLigne) {
							$ligne = $varTemp[$formVariations[$u]][$numbrLigne];
							$rank++;
						}


						$op = substr($ligne,0, 1);
						$num = substr($ligne,1);
						$_SESSION['simu-result'] = calc($op, $num, $_SESSION['simu-result']); 
					}


				}

				$variation++;
				$u++;
				$pi++;
			}





		}else{
			$result=$solde;
		}


		$key = 1;
		$num = 1;
		while (file_exists('../../admin/site/site-index/simulateurs/'.$simulateur."/".$key.'.txt')) {

			$critereWay = '../../admin/site/site-index/simulateurs/'.$simulateur.'/'.$key.'.txt';
			$critereContent = fopen($critereWay,'r+');
			$name = substr(fgets($critereContent),0,-1);
			$oblig = substr(fgets($critereContent),0,-1);
			$type = substr(fgets($critereContent),0,-1);
			$detail = substr(fgets($critereContent),0,-1);

			if ($type == 'Checkbox') {

				$type_detail = explode("\&12/", $detail);
				$number_check = $type_detail[0];

				if ($number_check == "1" AND isset($_POST[$key])) {

					$value = $key."\&12/".$type_detail[1];

				}elseif ($number_check == "2") {


					$post = $key.'_1';
					if (isset($_POST[$post])) {
						$value = $key."\&12/".$type_detail[1];
					}else{
						$post = $key.'_2';
						if (isset($_POST[$post])) {
							$value = $key."\&12/".$type_detail[2];
						}
					}


				}elseif ($number_check == "3") {
					$post = $key.'_1';
					if (isset($_POST[$post])) {
						$value = $key."\&12/".$type_detail[1];
					}else{
						$post = $key.'_2';
						if (isset($_POST[$post])) {
							$value = $key."\&12/".$type_detail[2];
						}else{
							$post = $key.'_3';
							if (isset($_POST[$post])) {
								$value = $key."\&12/".$type_detail[3];
							}
						}
					}
				}


			}else{
				$value = $key."\&12/".$_POST[$key];
			}

			if (file_exists('../../admin/site/site-index/simulations/'.$simulateur)) {
				simu:
				if(!file_exists('../../admin/site/site-index/simulations/'.$simulateur."/".$num.'.txt') OR isset($stay)){
					$stay = $num;

					if (file_exists('../../admin/site/site-index/simulations/'.$simulateur."/".$stay.'.txt')) {

						$content = file_get_contents('../../admin/site/site-index/simulations/'.$simulateur."/".$stay.'.txt');
						$content .= "\n".$value;
						file_put_contents('../../admin/site/site-index/simulations/'.$simulateur."/".$stay.'.txt', $content);

					}else{
						file_put_contents('../../admin/site/site-index/simulations/'.$simulateur."/".$stay.'.txt', $value);
					}

				}else{
					$num++;
					goto simu;
				}

			}else{
				mkdir('../../admin/site/site-index/simulations/'.$simulateur);
				goto simu;
			}

			$key++;
		}
		

		$_SESSION['simu-key'] = $stay;
		header('location:../resultat/?resultat='.$_SESSION['simu-result']);

	}else{
		$error = "Une erreur s'est produite, veuillez recommencer !";
	}
}

fin:

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../style/estimation.css">
	<link rel="stylesheet" type="text/css" href="../../style_responsive/estimation.css">
	<title>Lalantern | Simulation</title>
</head>
<body>

	<header class="header">

		<a href="../../" class="header_logo">LaLantern</a>
		<h1 class="header_title">Simulateur de reprise</h1>
		<a href="../" class="header_back" href="">Quitter</a>

	</header>
	<br>
	<h1 class="simu_title"><?php echo $title; ?></h1>
	<h3 class="simu_subtitle"><?php echo $subtitle; ?></h3>

	<?php

	$scan = scandir('../../admin/site/site-index/simulateurs/'.$simulateur);
	$notCritere = array('variations','title.txt','.','..','img');
	$nbrCritere = 0;
	foreach ($scan as $fichier) {
		if (!in_array($fichier, $notCritere) AND !in_array(substr($fichier,0,-4),$notCritere) AND !in_array(substr($fichier,0,-5),$notCritere)) {
			$nbrCritere++;
		}
	}
	?>


	<form method="POST" class="simu_form">
		<div class="form_content">
			<?php
			$i =1;
			$_SESSION['critereOblig'] = array();
			while ($i <= $nbrCritere) {

				$critereWay = '../../admin/site/site-index/simulateurs/'.$simulateur.'/'.$i.'.txt';
				$critereContent = fopen($critereWay,'r+');
				$name = substr(fgets($critereContent),0,-1);
				$oblig = substr(fgets($critereContent),0,-1);
				$type = substr(fgets($critereContent),0,-1);
				$detail = substr(fgets($critereContent),0,-1);

				if ($oblig == 'true') {
					array_push($_SESSION['critereOblig'], $i);
				}

				if ($type == 'Text' OR $type == "Date" OR $type == 'Color' OR $type == 'Mail' OR $type == 'num' OR $type == 'tel') {

					if ($type == 'num') {
						$type = 'number';
					}
					if ($type == 'Color') {
						$class='input_color';
					}else{
						$class = 'input_text';
					}

					if ($oblig == 'true') {
						$require = true;
					}

					?>
					<label for="<?php echo $i; ?>" class="label"><?php echo $detail; ?></label><?php if (isset($require) AND $require == true) { ?> <span class="require">*</span> <?php } ?><br>
					<input id="<?php echo $i; ?>" class="<?php echo $class; ?>" type="<?php echo $type; ?>" name="<?php echo $i; ?>">
					<?php
					$require = false;
				}elseif($type == "Checkbox"){
					$type_detail = explode("\&12/", $detail);
					$number_check = $type_detail[0];
					if ($number_check == "1") {
						if ($oblig == 'true') {
							array_push($_SESSION['critereOblig'], $i);
						}
						$name1 = $type_detail[1];
						?>
						<label class="label"><?php echo $name; ?></label><?php if (isset($require) AND $require == true) { ?> <span class="require">*</span> <?php } ?><br>
						<label for="<?php echo $i; ?>" class="checkbox_1" onclick='<?php echo "checked_".$i; ?>()'>	
							<span class="check_1">
								<span id="<?php echo "check_".$i; ?>" class="checkboc"></span>
							</span>
							<p class="check_content"><?php echo $name1; ?></p>
						</label>
						<input style="display: none;" id="<?php echo $i; ?>"  type="<?php echo $type; ?>" name="<?php echo $i; ?>">
						<?php

					}elseif($number_check == 2) {
						$name1 = $type_detail[1];
						$name2 = $type_detail[2];
						?>
						<label class="label"><?php echo $name; ?></label><?php if (isset($require) AND $require == true) { ?> <span class="require">*</span> <?php } ?><br>
						<div class="checkbox_flex"> 
							<label for="<?php echo $i.'_1'; ?>" class="checkbox_2" onclick='<?php echo "checked_".$i."_1"; ?>()'>	
								<span class="check_1">
									<span id="<?php echo "check_1".$i; ?>" class="checkboc"></span>
								</span>
								<p class="check_content"><?php echo $name1; ?></p>
							</label>
							<input style="display: none;" id="<?php echo $i.'_1'; ?>"  type="<?php echo $type; ?>" name="<?php echo $i.'_1'; ?>">


							<label for="<?php echo $i.'_2'; ?>" class="checkbox_2" onclick='<?php echo "checked_".$i."_2"; ?>()'>	
								<span class="check_1">
									<span id="<?php echo "check_2".$i; ?>" class="checkboc"></span>
								</span>
								<p class="check_content "><?php echo $name2; ?></p>
							</label>
							<input style="display: none;" id="<?php echo $i.'_2'; ?>"  type="<?php echo $type; ?>" name="<?php echo $i.'_2'; ?>">
						</div>
						<?php
					}elseif($number_check == 3) {
						$name1 = $type_detail[1];
						$name2 = $type_detail[2];
						$name3 = $type_detail[3];
						?>
						<label class="label"><?php echo $name; ?></label><?php if (isset($require) AND $require == true) { ?> <span class="require">*</span> <?php } ?><br>
						<div class="checkbox_flex checkbox_grid"> 
							<label for="<?php echo $i.'_1'; ?>" class="checkbox_3 _3_1" onclick='<?php echo "checked_3".$i."_1"; ?>()'>	
								<span class="check_3">
									<span id="<?php echo "check_1".$i; ?>" class="checkboc"></span>
								</span>
								<p class="check_content"><?php echo $name1; ?></p>
							</label>
							<input style="display: none;" id="<?php echo $i.'_1'; ?>"  type="<?php echo $type; ?>" name="<?php echo $i.'_1'; ?>">


							<label for="<?php echo $i.'_2'; ?>" class="checkbox_3 _3_2" onclick='<?php echo "checked_3".$i."_2"; ?>()'>	
								<span class="check_3">
									<span id="<?php echo "check_2".$i; ?>" class="checkboc"></span>
								</span>
								<p class="check_content "><?php echo $name2; ?></p>
							</label>
							<input style="display: none;" id="<?php echo $i.'_2'; ?>"  type="<?php echo $type; ?>" name="<?php echo $i.'_2'; ?>">

							<label for="<?php echo $i.'_3'; ?>" class="checkbox_3 _3_3" onclick='<?php echo "checked_3".$i."_3"; ?>()'>	
								<span class="check_3">
									<span id="<?php echo "check_3".$i; ?>" class="checkboc"></span>
								</span>
								<p class="check_content "><?php echo $name3; ?></p>
							</label>
							<input style="display: none;" id="<?php echo $i.'_3'; ?>"  type="<?php echo $type; ?>" name="<?php echo $i.'_3'; ?>">
						</div>
						<?php
					}

					?>
					<script type="text/javascript">
						


						function <?php echo "checked_3".$i."_1"; ?>(){
							var a = document.getElementById('<?php echo "check_1".$i; ?>');
							a.classList.toggle("checked");
							var a = document.getElementById('<?php echo "check_2".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_2';; ?>');
							a.checked = false;
							var a = document.getElementById('<?php echo "check_3".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_3';; ?>');
							a.checked = false;
						}
						function <?php echo "checked_3".$i."_2"; ?>(){
							var a = document.getElementById('<?php echo "check_2".$i; ?>');
							a.classList.toggle("checked");
							var a = document.getElementById('<?php echo "check_1".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_1';; ?>');
							a.checked = false;
							var a = document.getElementById('<?php echo "check_3".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_3';; ?>');
							a.checked = false;
						}

						function <?php echo "checked_3".$i."_3"; ?>(){
							var a = document.getElementById('<?php echo "check_3".$i; ?>');
							a.classList.toggle("checked");
							var a = document.getElementById('<?php echo "check_1".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_1';; ?>');
							a.checked = false;
							var a = document.getElementById('<?php echo "check_2".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_2';; ?>');
							a.checked = false;
						}


						function <?php echo "checked_".$i."_1"; ?>(){
							var a = document.getElementById('<?php echo "check_1".$i; ?>');
							a.classList.toggle("checked");
							var a = document.getElementById('<?php echo "check_2".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_2';; ?>');
							a.checked = false;
						}

						function <?php echo "checked_".$i."_2"; ?>(){
							var a = document.getElementById('<?php echo "check_2".$i; ?>');
							a.classList.toggle("checked");
							var a = document.getElementById('<?php echo "check_1".$i; ?>');
							a.classList.remove("checked");
							var a = document.getElementById('<?php echo $i.'_1'; ?>');
							a.checked = false;
						}


						function <?php echo "checked_".$i; ?>(){
							var a = document.getElementById('<?php echo "check_".$i; ?>');
							a.classList.toggle("checked");
						}


					</script>
					<?php

					$require = false;
				}elseif($type == "Select"){


					if ($oblig == 'true') {
						$require = true;
					}

					$type_detail = explode("\&12/", $detail);
					$name_select = $type_detail[0];
					$options = array();
					$u = 0;
					while($u < count($type_detail)){
						if($type_detail[$u] != $name_select AND $type_detail[$u] != ''){
							array_push($options, $type_detail[$u]);
						}
						$u++;
					}
					?>

					<label class="label" for="<?php echo $i; ?>"><?php echo $name_select; ?></label><?php if (isset($require) AND $require == true) { ?> <span class="require">*</span> <?php } ?><br>
					<select class="form_select" id="<?php echo $i; ?>" name="<?php echo $i; ?>">
						<?php

						$u =0;
						while ($u < count($options)) {
							?>
							<option value="<?php echo $options[$u]; ?>"><?php echo $options[$u]; ?></option>
							<?php
							$u++;
						}

						?>
					</select>
					<?php

					$require = false;
				}elseif($type == "textarea"){
					?>
					<label for="<?php echo $i; ?>" class="label"><?php echo $detail; ?></label><?php if (isset($require) AND $require == true) { ?> <span class="require">*</span> <?php } ?><br>
					<textarea id="<?php echo $i; ?>" class="textarea_form" type="<?php echo $type; ?>" name="<?php echo $i; ?>"></textarea>
					<?php
				}



				$i++;
			}
			?>
			<p class="error"><?php if (isset($error)) { echo $error; } ?></p>
			<input type="submit" name="valider" class="valider" value="Obtenir un prix">
		</div>	
	</form>


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