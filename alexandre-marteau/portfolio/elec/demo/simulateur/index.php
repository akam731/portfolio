<?php
session_start();
$_SESSION['page'] = 'offer';

if (isset($_SESSION['simu'])) {
	unset($_SESSION['simu']);
}
if (isset($_SESSION['simu-resultat'])) {
	unset($_SESSION['simu-resultat']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style/simulateur.css">
	<link rel="stylesheet" type="text/css" href="../style_responsive/index_responsive1.css">
	<link rel="stylesheet" type="text/css" href="../style/index1.css">
	<link rel="stylesheet" type="text/css" href="../style_responsive/index_responsive.css">
	<link rel="stylesheet" type="text/css" href="../style/index.css">
	<link rel="stylesheet" type="text/css" href="../style_responsive/simulateur.css">
	<script type="text/javascript" src="../js/simulateur.js"></script>
	<title>Lalantern | Simulateur</title>
</head>
<body>

	<?php
	require_once("../inclued/header.php");
	?>
	<br>
	<div class="slideshow-container">
		<div class="slideshow">
			<img src="../admin/site/site-index/slider/1.jpg"  alt="image 1">
			<img src="../admin/site/site-index/slider/2.jpg"  alt="image 2">
			<img src="../admin/site/site-index/slider/3.jpg"  alt="image 3">
			<img src="../admin/site/site-index/slider/4.jpg"  alt="image 4">
			<img src="../admin/site/site-index/slider/5.jpg"  alt="image 5">
			<img src="../admin/site/site-index/slider/6.jpg"  alt="image 6">
			<img src="../admin/site/site-index/slider/7.jpg"  alt="image 7">
			<img src="../admin/site/site-index/slider/1.jpg"  alt="image 1">
			<img src="../admin/site/site-index/slider/2.jpg"  alt="image 2">
			<img src="../admin/site/site-index/slider/3.jpg"  alt="image 3">
			<img src="../admin/site/site-index/slider/4.jpg"  alt="image 4">
			<img src="../admin/site/site-index/slider/5.jpg"  alt="image 5">
			<img src="../admin/site/site-index/slider/6.jpg"  alt="image 6">
			<img src="../admin/site/site-index/slider/7.jpg"  alt="image 7">
		</div>
	</div>

	<script>
		const slideshow = document.querySelector('.slideshow');
		const img = slideshow.querySelectorAll('img');
const imageWidth = 355 + 40; // ajustement de la largeur de l'image
let currentPosition = 0;
let animationInterval;

function startSlideshow() {
	animationInterval = setInterval(() => {
		currentPosition -= imageWidth;
		slideshow.style.transform = `translateX(${currentPosition}px)`;

		if (currentPosition <= -(imageWidth * (img.length - 7))) {
			currentPosition = 0;
			slideshow.style.transform = `translateX(${currentPosition}px)`;
		}
  }, 100); // vitesse de défilement, ajustable

  // Pause/Play Slideshow
	slideshow.addEventListener('mouseenter', () => {
		clearInterval(animationInterval);
	});

	slideshow.addEventListener('mouseleave', () => {
		startSlideshow();
	});
}

startSlideshow();

</script>

<section class="object_select">
	<h1>Faites estimer votre appareil même défectueux !</h1>
	<h3>Pourquoi jeter un appareil défectueux quand on peut le revendre ?</h2>
		<br>
		<br>

		<div class="object_select_flex">
			<?php 

			$scandir = scandir('../admin/site/site-index/simulateurs');
			$notSimulateur = array('.','..','default','nouveau','soon');
			$nameSumilateurs = array();
			foreach ($scandir as $fichier) {
				if (!in_array($fichier, $notSimulateur)) {
					$id = '../admin/site/site-index/simulateurs/'.$fichier.'/title.txt';
					$file = fopen($id, 'r+');
					$title = substr(fgets($file),0,-1);
					$subtitle = substr(fgets($file),0,-1);
					$img = substr(fgets($file),0,-1);
					$public = substr(fgets($file),0,-1);
					$public = substr(fgets($file),0,-1);
					if ($public == 'true') {
						array_push($nameSumilateurs,$fichier);
					}
				}
			}
			$number = count($nameSumilateurs);
			if (file_exists('../admin/site/site-index/simulateurs/soon')) {
				$number++;
				$soon = true;		
			}
			$number--;

			$i=0;
			while ($i <= $number) {
				if (isset($nameSumilateurs[$i])) {
					$simu = fopen('../admin/site/site-index/simulateurs/'.$nameSumilateurs[$i].'/title.txt',"r+");
					$title = substr(fgets($simu),0,-1);
					$subtitle = substr(fgets($simu),0,-1);
					$img = substr(fgets($simu),0,-1);

					?>
					<a href="reprise/?simu=<?php echo $nameSumilateurs[$i]; ?>" class="object_select_washing">
						<img src="<?php echo '../admin/site/site-index/simulateurs/'.$nameSumilateurs[$i].'/'.$img; ?>">
						<p class="p_title"><?php echo $title; ?></p>
						<p class="p_price"><?php echo $subtitle; ?></p>
					</a>
					<?php
				}
				$i++;
			}

			if (isset($soon) AND $soon == true) {
				?>
				<a href="" class="object_select_soon">
					<img src="../images/simulateur/elec.png">
					<p class="p_title">D'autres produits seront bientôt eligible à nos offres de reprise</p>
				</a>
				<?php
			}


			?>
		</div>
	</section>

	<br>
	<br>
	<br>

	<section class="detail">
		<div class="detail_1">
			<img id="cadenas" onmouseover="cadenas()" src="../images/simulateur/phone.png"><img onmouseout="cadenasout()" id="cadenas-b" src="../images/simulateur/phone-b.png">	
			<p>Etape 1 :</p>
			<p>Estimez gratuitement votre produit</p>
		</div>
		<div class="detail_2">
			<img id="chat" onmouseover="chat()" src="../images/index/icon/utilisateur.png"><img id="chat-b" onmouseout="chatout()" src="../images/index/icon/utilisateur-b.png">
			<p>Etape 2 :</p>
			<p>Attendez le retour de l'un de nos conseillez</p>
		</div>
		<div class="detail_3">
			<img id="cadie" onmouseover="cadie()" src="../images/index/icon/cadie.png"><img id="cadie-b" onmouseout="cadieout()" src="../images/index/icon/cadie-b.png">
			<p>Etape 3 :</p>
			<p>Validez ensemble la reprise</p>
		</div>
		<div class="detail_4">
			<img id="camion" onmouseover="camion()" src="../images/index/icon/camion.png"><img id="camion-b" onmouseover="camion()"  src="../images/index/icon/camion-b.png">
			<p>Etape 4 :</p>
			<p>Nous venons le récuperer chez vous</p>
		</div>
	</section>

	<br>
	<br>
	<br>
	<br>

	<section class="simu_text">
		<img class="img_top" src="../images/simulateur/ecolo 2.jpg">
		<div>
			<h3>Les avantages écologiques du reconditionné</h3>
			<p>Le reconditionnement prolonge la durée de vie des produits électroniques et réduit les déchets électroniques, ce qui limite l'empreinte carbone et préserve l'environnement. De plus, il diminue la consommation de ressources naturelles et d'énergie nécessaire à la production de nouveaux produits. Enfin, il favorise la création d'emplois locaux dans l'économie circulaire pour un développement économique durable.</p>
		</div>
	</section>

	<br class="brsimu_text">
	<br class="brsimu_text">
	<br class="brsimu_text">
	<br class="brsimu_text">
	<br class="brsimu_text">

	<section class="simu_text simu_text_bottom">
		<div>
			<h3>Les avantages économiques et pratiques du reconditionné</h3>
			<p>Le reconditionné permet d'acquérir des produits de qualité à des prix inférieurs par rapport aux produits neufs. De plus, il offre une solution rapide et fiable pour disposer de produits électroniques fonctionnels avec une garantie de qualité. Enfin, c'est une option rentable pour les entreprises respectant leurs contraintes budgétaires et environnementales.</p>
		</div>
		<img class="img_bottom" src="../images/simulateur/envie.jpg">
	</section>

	<br class="brsimu_text">	
	<br class="brsimu_text">	
	<br>	
	<br>	
	<br>	
	<br>	

	<section class="faq">

		<section class="ask">
			<article id="faq_article1" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle1()">
					<span id="isactive1" value='false'></span>
					<p>Quel doit être l'état du produit ?</p><img src="../images/index/plus.png" id="plus1" class="plus"><img src="../images/index/moins.png"  id="moins1" class="moins">
				</div>
				<div id="faq_article_text1" class="faq_article_text">
					<br>
					<p>Nous reprenons vos produit peut importe leur état, nous remettons à neuf chaque appareil repris dans nos ateliers, nous saurons vous proposer une offre de reprise en fonction de l'état. Vous avez juste à sélectionner l'état du produit lors de la simulation.</p>
				</div>
			</article>
			<article id="faq_article2" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle2()">
					<span id="isactive2" value='false'></span>
					<p>Comment sont calculés les prix de reprise ?</p><img src="../images/index/plus.png" id="plus2" class="plus"><img src="../images/index/moins.png" id="moins2" class="moins">
				</div>
				<div id="faq_article_text2" class="faq_article_text">
					<br>
					<p>Nous collections les différents paramètres que vous devez détailler lors de la simulation tels que l'état de votre appareil, puis nous calculons le prix de reconditionnement de votre appareil pour au final vous proposer le meilleur prix de reprise possible.</p>
				</div>
			</article>
			<article id="faq_article3" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle3()">
					<span id="isactive3" value='false'></span>
					<p>Combien de temps durent les démarches ?</p><img src="../images/index/plus.png" id="plus3" class="plus"><img src="../images/index/moins.png" class="moins" id="moins3">
				</div>
				<div id="faq_article_text3" class="faq_article_text">
					<br>
					<p>À partir du moment où vous effectuez la simulation de reprise, un conseillez-vous de recontact sous 24h. Suite à cela, nous récupérons votre appareil sous 72h. Une fois votre appareil acheminé à notre atelier, vous recevez votre virement sous 24h.</p>
				</div>
			</article>

			<article id="faq_article4" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle4()">
					<span id="isactive4" value='false'></span>
					<p>Que vas devenir mon appareil ?</p><img src="../images/index/plus.png" id="plus4" class="plus"><img src="../images/index/moins.png" id="moins4" class="moins">
				</div>
				<div id="faq_article_text4" class="faq_article_text">
					<br>
					<p>Une fois votre appareil réceptionné, nous entamons la remise à neuf, suite à quoi nous le mettons en vente dans notre page <a class="a_boutique" href="">boutique</a>. Ce qui permet à tout le monde un accès à des produit remis à neuf pour un prix au rabais tout en agissant pour la planète.</p>
				</div>
			</article>

			<article id="faq_article5" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle5()">
					<span id="isactive5" value='false'></span>
					<p>Ai-je le droit à une rétractation ?</p><img src="../images/index/plus.png" id="plus5" class="plus"><img src="../images/index/moins.png" id="moins5" class="moins">
				</div>
				<div id="faq_article_text5" class="faq_article_text">
					<br>
					<p>Une fois le processus de reprise lancé, vous aurez la possibilité de faire marche arrière à tout moment précédant le virement. Tant que vous n'être pas payé, vous pouvez vous rétracter. Bien entendu sans aucun surcout.</p>
				</div>
			</article>
		</section>
		<section class="img">
			<img src="../images/index/question 1.jpg">
			<p>Vous avez des questions ? C'est normal, voici la liste des questions les plus fréquemment posées, vous pouvez également voir la liste complète sur notre page FAQ.</p>
			<a href="">Page FAQ</a>
		</section>

	</section>
	<br>
	<br>
	<br>
	<br>
	<br>

	<br>



	<?php
	require_once("../inclued/footer.php");
	?>
</body>
</html>