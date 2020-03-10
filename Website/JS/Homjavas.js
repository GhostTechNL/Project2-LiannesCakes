var slideindex = 0;
var Timer;
var Auto_Slide = true;

function plusdiv(n){
	Slideshow(slideindex += n);
}

function currentslide(n){
	Slideshow(slideindex = n)
	Auto_Slide = false;
	//clearTimeout(Timer);
}
function Slideshow(n){
	var i;
	var x = document.getElementsByClassName("Promoslide");
	var dots = document.getElementsByClassName("dot");
	if(n > x.length){slideindex = 1}
	if (n < 1) {slideindex = x.length}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";	
		}
		x[slideindex-1].style.display = "block";
		Autoslide();
		
	for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
     dots[slideindex-1].className += " active";
}
function Autoslide(){
	Timer = setTimeout(function atimer(){
		if(Auto_Slide){
		plusdiv(1);
	}
			},3000); // 3 sec
}