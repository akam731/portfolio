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
