let header = document.querySelector("#header");
let lastScrollValue = 0;
 
document.addEventListener('scroll',() => {
	let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
    	header.classList.add("remonte");
    } else {
    	header.classList.remove("remonte");
    }
    lastScrollValue = top;
});


function argenthover (){
	var a = document.getElementById('argent')
	a.style.display = "none";
	var a = document.getElementById('argent-b')
	a.style.display = "block";
}

function argentout (){
	var a = document.getElementById('argent')
	a.style.display = "block";
	var a = document.getElementById('argent-b')
	a.style.display = "none";
}

function molettehover (){
	var a = document.getElementById('molette')
	a.style.display = "none";
	var a = document.getElementById('molette-b')
	a.style.display = "block";
}

function moletteout (){
	var a = document.getElementById('molette')
	a.style.display = "block";
	var a = document.getElementById('molette-b')
	a.style.display = "none";
}

function laverhover (){
	var a = document.getElementById('laver')
	a.style.display = "none";
	var a = document.getElementById('laver-b')
	a.style.display = "block";
}

function laverout (){
	var a = document.getElementById('laver')
	a.style.display = "block";
	var a = document.getElementById('laver-b')
	a.style.display = "none";
}

function inthover (){
	var a = document.getElementById('int')
	a.style.display = "none";
	var a = document.getElementById('int-b')
	a.style.display = "block";
}

function intout (){
	var a = document.getElementById('int')
	a.style.display = "block";
	var a = document.getElementById('int-b')
	a.style.display = "none";
}

function utihover (){
	var a = document.getElementById('uti')
	a.style.display = "none";
	var a = document.getElementById('uti-b')
	a.style.display = "block";
}

function utiout (){
	var a = document.getElementById('uti')
	a.style.display = "block";
	var a = document.getElementById('uti-b')
	a.style.display = "none";
}
