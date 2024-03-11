var images = document.querySelectorAll('.container img');
var currentIndex = 0;
var intervalId = setInterval(nextImage, 5000);

function nextImage() {
	images[currentIndex].classList.remove('active');
	currentIndex = (currentIndex + 1) % images.length;
	images[currentIndex].classList.add('active');
}

function closeall() {
		var a = document.getElementById('isactive1')
		a.style.value = "false";
		var a = document.getElementById('plus1')
		a.style.display = "block";
		var a = document.getElementById('moins1')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text1')
		a.style.display = "none";


		var a = document.getElementById('isactive2')
		a.style.value = "false";
		var a = document.getElementById('plus2')
		a.style.display = "block";
		var a = document.getElementById('moins2')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text2')
		a.style.display = "none";

		var a = document.getElementById('isactive3')
		a.style.value = "false";
		var a = document.getElementById('plus3')
		a.style.display = "block";
		var a = document.getElementById('moins3')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text3')
		a.style.display = "none";

		
		var a = document.getElementById('isactive4')
		a.style.value = "false";
		var a = document.getElementById('plus4')
		a.style.display = "block";
		var a = document.getElementById('moins4')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text4')
		a.style.display = "none";


		var a = document.getElementById('isactive5')
		a.style.value = "false";
		var a = document.getElementById('plus5')
		a.style.display = "block";
		var a = document.getElementById('moins5')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text5')
		a.style.display = "none";
}

function faqarticle1 (){
	var a = document.getElementById('isactive1')
	var b = a.style.value
	if ( b == 'false' || b != "true"){
		//afficher
		closeall();
		var a = document.getElementById('isactive1')
		a.style.value = "true";
		var a = document.getElementById('plus1')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text1')
		a.style.display = "block";
		var a = document.getElementById('moins1')
		a.style.display = "block";

	}else{
		//cacher
		var a = document.getElementById('isactive1')
		a.style.value = "false";
		var a = document.getElementById('plus1')
		a.style.display = "block";
		var a = document.getElementById('moins1')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text1')
		a.style.display = "none";
	}
}

function faqarticle2 (){
	var a = document.getElementById('isactive2')
	var b = a.style.value
	if ( b == 'false' || b != "true"){
		//afficher
		closeall();
		var a = document.getElementById('isactive2')
		a.style.value = "true";
		var a = document.getElementById('plus2')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text2')
		a.style.display = "block";
		var a = document.getElementById('moins2')
		a.style.display = "block";


	}else{
		//cacher
		var a = document.getElementById('isactive2')
		a.style.value = "false";
		var a = document.getElementById('plus2')
		a.style.display = "block";
		var a = document.getElementById('moins2')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text2')
		a.style.display = "none";
	}
}

function faqarticle3 (){
	var a = document.getElementById('isactive3')
	var b = a.style.value
	if ( b == 'false' || b != "true"){
		//afficher
		closeall();
		var a = document.getElementById('isactive3')
		a.style.value = "true";
		var a = document.getElementById('plus3')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text3')
		a.style.display = "block";
		var a = document.getElementById('moins3')
		a.style.display = "block";

	}else{
		//cacher
		var a = document.getElementById('isactive3')
		a.style.value = "false";
		var a = document.getElementById('plus3')
		a.style.display = "block";
		var a = document.getElementById('moins3')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text3')
		a.style.display = "none";
	}
}

function faqarticle4 (){
	var a = document.getElementById('isactive4')
	var b = a.style.value
	if ( b == 'false' || b != "true"){
		//afficher
		closeall();
		var a = document.getElementById('isactive4')
		a.style.value = "true";
		var a = document.getElementById('plus4')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text4')
		a.style.display = "block";
		var a = document.getElementById('moins4')
		a.style.display = "block";

	}else{
		//cacher
		var a = document.getElementById('isactive4')
		a.style.value = "false";
		var a = document.getElementById('plus4')
		a.style.display = "block";
		var a = document.getElementById('moins4')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text4')
		a.style.display = "none";
	}
}


function faqarticle5 (){
	var a = document.getElementById('isactive5')
	var b = a.style.value
	if ( b == 'false' || b != "true"){
		//afficher
		closeall();
		var a = document.getElementById('isactive5')
		a.style.value = "true";
		var a = document.getElementById('plus5')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text5')
		a.style.display = "block";
		var a = document.getElementById('moins5')
		a.style.display = "block";

	}else{
		//cacher
		var a = document.getElementById('isactive5')
		a.style.value = "false";
		var a = document.getElementById('plus5')
		a.style.display = "block";
		var a = document.getElementById('moins5')
		a.style.display = "none";
		var a = document.getElementById('faq_article_text5')
		a.style.display = "none";
	}
}

