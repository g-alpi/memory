

var contador=0;

function voltearCarta(id) {
	contador++;
		
		if (contador<=2) {
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

	else {
		contador=0;

		document.getElementById('test').innerHTML='Se han seleccionado dos cartas';


	}
	
        
      
}