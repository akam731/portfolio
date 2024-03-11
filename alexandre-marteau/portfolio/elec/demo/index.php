<?php
session_start();
$_SESSION['page'] = 'index';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<title>La Lantern</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" type="text/css" href="style/index1.css">
	<link rel="stylesheet" type="text/css" href="style_responsive/index_responsive.css">
	<link rel="stylesheet" type="text/css" href="style_responsive/index_responsive1.css">
</head>
<body>
	<?php
	require_once('inclued/header-index.php');
	?>
	<br>
	<section>
		<div id="caption">

			<h1 class="caption_title">LaLantern</h1>

			<h2 class="caption_text">Vous avez un appareil électroménager défectueux, ou vous voulez vous rééquiper pour peu cher ?</h2>

			<div class="button_flex">
				<a class="estimate" href="simulateur/">Estimer votre appareil</a>
				<p>OU</p>
				<a class="shop" href="">Visiter notre boutique</a>	
			</div>

		</div>
		<div class="container">
			<img src="images/index/slider/1.jpeg" alt="Image 1" class="active">
			<img src="images/index/slider/2.jpg" alt="Image 2">
			<img src="images/index/slider/3.jpg" alt="Image 3">
		</div>
		<script type="text/javascript" src="js/index.js">
		</script>
	</section>

	<br>
	<br>

	<div class="slideshow-container">
		<div class="slideshow">
			<img src="admin/site/site-index/slider/1.jpg"  alt="image 1">
			<img src="admin/site/site-index/slider/2.jpg"  alt="image 2">
			<img src="admin/site/site-index/slider/3.jpg"  alt="image 3">
			<img src="admin/site/site-index/slider/4.jpg"  alt="image 4">
			<img src="admin/site/site-index/slider/5.jpg"  alt="image 5">
			<img src="admin/site/site-index/slider/6.jpg"  alt="image 6">
			<img src="admin/site/site-index/slider/7.jpg"  alt="image 7">
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

		if (currentPosition <= -(imageWidth * (img.length -8))) {
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

<h1 class="index_title">Choisissez notre gamme d'électroménager reconditionné pour allier économie et respect de l'environnement</h1>

<section class="container_product">
	<div class="container_product_1">
		<div class="left">
			<a href="">Lave-linge hublot</a>
		</div>
		<div class="center">
			<a href="">Lave-linge top</a>
		</div>
		<div class="right">
			<a href="">Sèche-linge</a>
		</div>
	</div>	
	<div class="container_product_2">
		<div class="left">
			<a href="">Lave-linge encastrable</a>
		</div>
		<div class="right">
			<a href="">Tous nos produits</a>
		</div>
	</div>
</section>
<br>
<br>
<br>
<div class="container_air">

</div>

<section class="estimation">
	<div class="estimation_text">
		<h2>Le reconditionné : pour un monde plus vert et plus durable</h2>
		<div>
			<p>Diminution de la polution et des déchets electroniques.</p>
			<p>Économie de matières premières, d'energie et d'argent.</p>
			<p>Prolongation de la durée de vie des produits électroniques.</p>
			<p>Démarche éco-responsable pour contribuer à un avenir durable.</p>
			<a href="#">En savoir plus</a>
		</div>
	</div>
	<img class="estimation_img" src="images/index/reparateur 1.jpg">
	<img class="estimation_img_responsive" src="images/index/reparateur 1_responsive.jpg">
</section>
<br>
<br>

<section class="produits">

	<section class="product_container">

		<div class="h2_title"><h2>Offres du moment</h2><div></div></div>
		<div class="contain">
			<div class="contain_div_left">
				<a href="" class="product_article" onmouseover="newarticlehover1()" onmouseout="newarticleout1()">
					<div class="new">
						Promotion
					</div>
					<img class="product_img" src="admin/site/site-index/offer/1.png">
					<p class="price" id="p_price1"><span class="ancien">150€</span><span class="nouveau">100€</span></p>
					<p class="title">Lave linge Bosh</p>
				</a>
				<a href="" class="product_article" onmouseover="newarticlehover2()" onmouseout="newarticleout2()">
					<div class="new">
						Promotion
					</div>
					<img class="product_img" src="admin/site/site-index/offer/2.png">
					<p class="price" id="p_price2"><span class="ancien">150€</span><span class="nouveau">100€</span></p>
					<p class="title">Lave linge Bosh</p>
				</a>
			</div>
			<div class="contain_div_right">
				<a href="" class="product_article"  onmouseover="newarticlehover3()" onmouseout="newarticleout3()">
					<div class="new">
						Promotion
					</div>
					<img class="product_img" src="admin/site/site-index/offer/3.png">
					<p class="price" id="p_price3"><span class="ancien">150€</span><span class="nouveau">100€</span></p>
					<p class="title">Lave linge Bosh</p>
				</a>
				<a href="" class="product_article" onmouseover="newarticlehover4()" onmouseout="newarticleout4()">
					<div class="new">
						Promotion
					</div>
					<img class="product_img" src="admin/site/site-index/offer/4.png">
					<p class="price" id="p_price4"><span class="ancien">150€</span><span class="nouveau">100€</span></p>
					<p class="title">Lave linge Bosh</p>
				</a>
			</div>
		</div>
		<a href="" class="vedette_plus">
			Voir plus
		</a>
	</section>
</section>

<div class="produits_air">

</div>

<section class="detail">
	<div class="detail_1">
		<img id="cadenas" onmouseover="cadenas()" src="images/index/icon/cadenas.png"><img onmouseout="cadenasout()" id="cadenas-b" src="images/index/icon/cadenas-b.png">	
		<p>Paiement sécurisé</p>
	</div>
	<div class="detail_2">
		<img id="carton" onmouseover="carton()" src="images/index/icon/carton.png"><img id="carton-b" onmouseout="cartonout()" src="images/index/icon/carton-b.png">	
		<p>Livraison gratuite dans toute la France</p>
	</div>
	<div class="detail_3">
		<img id="cadie" onmouseover="cadie()" src="images/index/icon/cadie.png"><img id="cadie-b" onmouseout="cadieout()" src="images/index/icon/cadie-b.png">
		<p>Plus de 500 références</p>
	</div>
	<div class="detail_4">
		<img id="chat" onmouseover="chat()" src="images/index/icon/utilisateur.png"><img id="chat-b" onmouseout="chatout()" src="images/index/icon/utilisateur-b.png">	
		<p>Un conseiller pour vous accompagner dans vos démarches</p>
	</div>
	<div class="detail_5">
		<img id="camion" onmouseover="camion()" src="images/index/icon/camion.png"><img id="camion-b" onmouseover="camion()"  src="images/index/icon/camion-b.png">
		<p>Envoyez votre appareil de n'importe où</p>
	</div>
</section>

<script>

	function cadenas (){
		var a = document.getElementById('cadenas-b')
		a.style.display = "inline";
		var a = document.getElementById('cadenas')
		a.style.display = "none";
	}
	function cadenasout (){
		var a = document.getElementById('cadenas')
		a.style.display = "inline";
		var a = document.getElementById('cadenas-b')
		a.style.display = "none";
	}

	function carton (){
		var a = document.getElementById('carton-b')
		a.style.display = "inline";
		var a = document.getElementById('carton')
		a.style.display = "none";
	}
	function cartonout (){
		var a = document.getElementById('carton')
		a.style.display = "inline";
		var a = document.getElementById('carton-b')
		a.style.display = "none";
	}

	function cadie (){
		var a = document.getElementById('cadie-b')
		a.style.display = "inline";
		var a = document.getElementById('cadie')
		a.style.display = "none";
	}
	function cadieout (){
		var a = document.getElementById('cadie')
		a.style.display = "inline";
		var a = document.getElementById('cadie-b')
		a.style.display = "none";
	}

	function chat (){
		var a = document.getElementById('chat-b')
		a.style.display = "inline";
		var a = document.getElementById('chat')
		a.style.display = "none";
	}
	function chatout (){
		var a = document.getElementById('chat')
		a.style.display = "inline";
		var a = document.getElementById('chat-b')
		a.style.display = "none";
	}

	function camion (){
		var a = document.getElementById('camion-b')
		a.style.display = "inline";
		var a = document.getElementById('camion')
		a.style.display = "none";
	}
	function camionout (){
		var a = document.getElementById('camion')
		a.style.display = "inline";
		var a = document.getElementById('camion-b')
		a.style.display = "none";
	}

</script>

<br>
<br>
<br>

<section class="faq">

	<section class="ask">
		<article id="faq_article1" class="faq_article">
			<div class="faq_article_title" onclick="faqarticle1()">
				<span id="isactive1" value='false'></span>
				<p>Quel est l'intérêt du reconditionné ?</p><img src="images/index/plus.png" id="plus1" class="plus"><img src="images/index/moins.png"  id="moins1" class="moins">
			</div>
			<div id="faq_article_text1" class="faq_article_text">
				<br>
				<p>Nous reprenons vos appareils électroménagers pour les remettre à neuf, acheter ces appareils permet de limiter le nombre d'appareils similaires en circulation, permettant de lutter pour l'écologie tout en profitant de tarif réduit comparé à du neuf.</p>
			</div>
		</article>
		<article id="faq_article2" class="faq_article">
			<div class="faq_article_title" onclick="faqarticle2()">
				<span id="isactive2" value='false'></span>
				<p>Quels sont les modes et délais de livraison ?</p><img src="images/index/plus.png" id="plus2" class="plus"><img src="images/index/moins.png" id="moins2" class="moins">
			</div>
			<div id="faq_article_text2" class="faq_article_text">
				<br>
				<p>Les livraisons seront assurées par colissimo, les délais de livraison varient ainsi en fonction de votre localisation :<p>
					<p><span style="text-decoration: underline;">Livraison standard :</span> 6 à 8 jours ouvrés.</p>
					<p><span style="text-decoration: underline;">Livraison rapide :</span> 1 à 5 jours ouvrés.</p>
					<p><span style="text-decoration: underline;">Hors France métropolitaine :</span> 8 à 12 jours ouvrés.</p>
				</div>
			</article>
			<article id="faq_article3" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle3()">
					<span id="isactive3" value='false'></span>
					<p>Les appareils sont-ils garantis ?</p><img src="images/index/plus.png" id="plus3" class="plus"><img src="images/index/moins.png" class="moins" id="moins3">
				</div>
				<div id="faq_article_text3" class="faq_article_text">
					<br>
					<p>Certains produits peuvent être encore sous garantie constructeurs au moment de la transaction ainsi, celle-ci se poursuit. Dans tous les cas nous proposons une garantie 12 mois gratuite pouvant évoluer sur 48 mois sous conditions.</p>
				</div>
			</article>

			<article id="faq_article4" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle4()">
					<span id="isactive4" value='false'></span>
					<p>Comment retourner ma commande passée ?</p><img src="images/index/plus.png" id="plus4" class="plus"><img src="images/index/moins.png" id="moins4" class="moins">
				</div>
				<div id="faq_article_text4" class="faq_article_text">
					<br>
					<p>Tous nos produits respecte le droit de rétractation légal de 14 jours, cependant, tous les produits avec un prix supérieur à 499 euros respecte un droit de rétractation de 30 jours. Pour retourner un produit, veuillez à restituer tous les accessoires annexes. (Câbles, écouteurs, batteries supplémentaires...)</p>
				</div>
			</article>

			<article id="faq_article5" class="faq_article">
				<div class="faq_article_title" onclick="faqarticle5()">
					<span id="isactive5" value='false'></span>
					<p>Comment retourner ma commande passée ?</p><img src="images/index/plus.png" id="plus5" class="plus"><img src="images/index/moins.png" id="moins5" class="moins">
				</div>
				<div id="faq_article_text5" class="faq_article_text">
					<br>
					<p>Tous nos produit respecte le droit de rétractation légal de 14 jours, cependant, tous les produits avec un prix supérieur à 499 euros respecte un droit de rétractation de 30 jours. Pour retourner un produit, veuillez à restituer tous les accessoires annexes. (Câbles, écouteurs, batteries supplémentaires...)</p>
				</div>
			</article>
		</section>
		<section class="img">
			<img src="images/index/question 1.jpg">
			<p>Vous avez des questions ? C'est normal, voici la liste des questions les plus fréquemment posées, vous pouvez également voir la liste complète sur notre page FAQ.</p>
			<a href="">Page FAQ</a>
		</section>

	</section>
	<br>
	<br>
	<br>
	<br>
	<br>

	<section class="contact_overlay">
		<section class="contact_left">
			<h3>Vous voulez éclairer votre lanterne ? 🏮</h3>
			<h4>Vos questions sont les bienvenues, nous sommes à votre disposition !</h4>
		</section>
		<section class="contact_right">
			<div class="contact_triangle">

			</div>
			<div class="contact_rectangle">
				<br>
				<br class="brrectangle">
				<br class="brrectangle">
				<a href="#"><button>Nous Contacter</button></a>
			</div>
		</section>
	</section>
	<br>
	<br>
	<div class="contact_hide">
		<br>
		<br>
		<br>
	</div>

	<?php
	require_once('inclued/footer-index.php');
	?>

</body>
</html>