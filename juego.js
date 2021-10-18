
function voltearCarta(id) {
		if(id.substring(0,id.length-1) == "thechariot"){
            document.getElementById(id).src = "imagenes/thechariot.jpg";
		}
		if(id.substring(0,id.length-1) == "thefool"){
			document.getElementById(id).src = "imagenes/thefool.jpg";
		}
		if(id.substring(0,id.length-1) == "thehermit"){
			document.getElementById(id).src = "imagenes/thehermit.jpg";
		}
		if(id.substring(0,id.length-1) == "theTower"){
			document.getElementById(id).src = "imagenes/theTower.jpeg";
		}
        
      
}