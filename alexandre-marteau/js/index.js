//Redirection
    function scrollToSection(sectionId) {
      var section = document.getElementById(sectionId);

      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      }

    }

// CV
document.addEventListener("DOMContentLoaded", function() {
  var mainButton = document.getElementById("about_contact_link");

  var hidden = document.getElementById("about_contact_hidden");


  mainButton.addEventListener("click", function() {
    hidden.style.display = "flex";
  });

  document.addEventListener("click", function(event) {
    if (event.target !== mainButton &&
        event.target !== hidden) {
      hidden.style.display = "none";
    }
  });
});


// Fonction pour le statut
var currentid = 1;
const maxid = 38;
var sens = true; // true signifie croissant, false le contraire
var en = "";
if (document.getElementById("1") == null) {
	en = "en_";
}
var intervalid = setInterval(function() {

	var e = document.getElementById(en+currentid);
	if (sens) {	

		if (currentid == maxid) {
			setTimeout(function() {
			sens = false;
			currentid = 38;
			}, 2000);
		}

		if (e!=null) {
			e.style.display = "inline-block";
		}
			currentid+=1;

	}else{

		if (currentid == 0) {
			sens = true;
			currentid = 1;
		}
		if (e!=null) {
			e.style.display = "none";
		}
		currentid-=1;

	}
}, 90);

// Fonction du scroller
var span_1 = document.getElementById("scroller_span_1");
var span_2 = document.getElementById("scroller_span_2");
var span_3 = document.getElementById("scroller_span_3");
var span_4 = document.getElementById("scroller_span_4");

// Simple hover
function scrollerOver()
{

	span_1.style.transform = "rotate(-135deg)";
	span_2.style.transform = "rotate(135deg)";
	span_3.style.transform = "rotate(225deg)";
	span_4.style.transform = "rotate(-225deg)";

}
function scrollerOut()
{

	span_1.style.transform = "rotate(45deg)";
	span_2.style.transform = "rotate(-45deg)";
	span_3.style.transform = "rotate(45deg)";
	span_4.style.transform = "rotate(-45deg)";

}

//Gestion de slideshow

var tansMinTouch;
var tansMaxTouch;
var tansMin;
var tansMax;
var initialX, initialY;
var slide = document.getElementById("slideshow");
var mouseDown = false; 
var translateX = 0;
var translateY = 0;
var screenWidth = window.innerWidth;
function handleResize() {

  var slideW = slide.offsetWidth;
  var screenW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var dif = slideW - screenW;
  tansMinTouch = -dif;
  tansMaxTouch = 20;
  tansMin = -dif;
  tansMax = 20;  
}

window.addEventListener("resize", handleResize);
handleResize();

slide.addEventListener("mousedown",function(event) {
	mouseDown = true;
	initialX = event.clientX;
    initialY = event.clientY;
    slide.style.animation = "none";

    var computedStyle = getComputedStyle(slide);
	   var transformValue = computedStyle.transform;

	   translateX = 0;
	   translateY = 0;
	    // Extraire les valeurs de translation de la chaîne transform
	   if (transformValue !== 'none') {
	   var matrix = new DOMMatrix(transformValue);
	   translateX = matrix.m41;
	   translateY = matrix.m42;
	}
});
slide.addEventListener("mouseup",function(event) {
	mouseDown = false;
});

document.addEventListener('mousemove', function(event) {


	if (mouseDown) {
	    // Récupère les coordonnées x et y du curseur de la souris
	    var mouseX = event.clientX;
		var mouseY = event.clientY;
		var trans = translateX - (initialX - mouseX);
		if (trans < tansMin) {
			trans = tansMin;
		}
		if (trans > tansMax) {
			trans = tansMax;
		}
		slide.style.transform = "translateX(" + trans + "px)";
	}

});

slide.addEventListener("touchstart",function(event) {
	mouseDown = true;
	initialX = event.touches[0].clientX;
    slide.style.animation = "none";

    var computedStyle = getComputedStyle(slide);
	   var transformValue = computedStyle.transform;

	   translateX = 0;
	   translateY = 0;
	    // Extraire les valeurs de translation de la chaîne transform
	   if (transformValue !== 'none') {
	   var matrix = new DOMMatrix(transformValue);
	   translateX = matrix.m41;
	   translateY = matrix.m42;
	}
});
slide.addEventListener("touchend",function(event) {
	mouseDown = false;
});

document.addEventListener('touchmove', function(event) {


	if (mouseDown) {
	    // Récupère les coordonnées x et y du curseur de la souris
	    var mouseX = event.touches[0].clientX;
		var trans = translateX - (initialX - mouseX) ;
		if (trans < tansMinTouch) {
			trans = tansMinTouch;
		}
		if (trans > tansMaxTouch) {
			trans = tansMaxTouch;
		}
		slide.style.transform = "translateX(" + trans + "px)";
	}
	
});


//Gestion de la partie about
// click
var first = document.getElementById("first_center");
var second = document.getElementById("second_center");
var third = document.getElementById("third_center");

var cursus = document.getElementById("cursus");
var exp = document.getElementById("exp");
var stage = document.getElementById("stage");

function about_first(color)
{

	first.style.background = "#A5ABF0";
	second.style.background = color;
	third.style.background = color;

	cursus.style.display = "block";
	exp.style.display = "none";
	stage.style.display = "none";
}

function about_second(color)
{
	second.style.background = "#A5ABF0";
	first.style.background = color;
	third.style.background = color;

	cursus.style.display = "none";
	exp.style.display = "block";
	stage.style.display = "none";
}

function about_third(color)
{
	third.style.background = "#A5ABF0";
	second.style.background = color;
	first.style.background = color;

	cursus.style.display = "none";
	exp.style.display = "none";
	stage.style.display = "block";
}


//Gestion de l'aparition au défilement
document.addEventListener('DOMContentLoaded', function () {
  var sections = document.querySelectorAll('.fade');

  var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.3
  };

  var observer = new IntersectionObserver(handleIntersect, options);

  sections.forEach(function (section) {
    observer.observe(section);
  });

  function handleIntersect(entries, observer) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }
});

//Gestion des animation de click des input
var boutonName = document.getElementById('input_name');
var boutonEmail = document.getElementById('input_email');
var boutonSubject = document.getElementById('input_subject');
var boutonMsg = document.getElementById('input_message');
var isClicked = "";
boutonName.addEventListener('click', function() {
	if (isClicked == "input_text") {
 	 boutonName.classList.remove('clicked');
	}
	boutonName.classList.add('clicked');
	isClicked = "input_text";
});
boutonEmail.addEventListener('click', function() {
	if (isClicked == "input_email") {
 	 boutonEmail.classList.remove('clicked');
	}
	boutonEmail.classList.add('clicked');
	isClicked = "input_email";
});
boutonSubject.addEventListener('click', function() {
	if (isClicked == "input_subject") {
 	 boutonSubject.classList.remove('clicked');
	}
	boutonSubject.classList.add('clicked');
	isClicked = "input_subject";
});
boutonMsg.addEventListener('click', function() {
	if (isClicked == "input_message") {
 	 boutonMsg.classList.remove('clicked');
	}
	boutonMsg.classList.add('clicked');
	isClicked = "input_message";
});
document.addEventListener('click', function() {

  if (isClicked == "input_text") {

 	 boutonEmail.classList.remove('clicked');
 	 boutonSubject.classList.remove('clicked');
  	isClicked = "";
 	 boutonMsg.classList.remove('clicked');

  } else if(isClicked == "input_email"){

 	 boutonName.classList.remove('clicked');
 	 boutonSubject.classList.remove('clicked');
  	isClicked = "";
 	 boutonMsg.classList.remove('clicked');

  } else if(isClicked == "input_subject"){

 	 boutonName.classList.remove('clicked');
 	 boutonEmail.classList.remove('clicked');
  	isClicked = "";
 	 boutonMsg.classList.remove('clicked');

  } else if(isClicked == "input_message"){

 	 boutonName.classList.remove('clicked');
 	 boutonSubject.classList.remove('clicked');
 	 boutonEmail.classList.remove('clicked');
  	isClicked = "";

  } else if(isClicked == ""){

 	 boutonName.classList.remove('clicked');
 	 boutonEmail.classList.remove('clicked');
 	 boutonSubject.classList.remove('clicked');
 	 boutonMsg.classList.remove('clicked');
  	isClicked = "";

  }
});

// Navigation portfolio

function redirect(link)
{
	 window.location.href = link;
}