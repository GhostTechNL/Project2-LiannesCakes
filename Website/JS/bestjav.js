var OPCL = "close";

function dropdown(Clasnaam){
	var i;
	var x = document.getElementsByClassName(Clasnaam);
	for(i = 0; i < x.length; i++){
		if (OPCL == "open") {
			x[i].style.display = "block";
			OPCL = "close";

		}else if(OPCL == "close"){
			x[i].style.display = "none";
			OPCL = "open";
		}

	}
}