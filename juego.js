
var cartasEmparejadas=[];
var contCartas = 0;
function voltearCarta(id) {
	contCartas++;
	console.log(contCartas);
	if (contCartas<=2) {
		if(id.substring(0,id.length-1) == "thechariot"){
	        document.getElementById(id).src = "imagenes/thechariot.jpg";
		}
		else if(id.substring(0,id.length-1) == "thefool"){
			document.getElementById(id).src = "imagenes/thefool.jpg";
		}
		else if(id.substring(0,id.length-1) == "thehermit"){
			document.getElementById(id).src = "imagenes/thehermit.jpg";
		}
		else if(id.substring(0,id.length-1) == "theTower"){
			document.getElementById(id).src = "imagenes/theTower.jpeg";
		}	
	}

		
	

	cartasEmparejadas.push(id);


	if (contCartas==2) {
		
		compararCartas(cartasEmparejadas);
		setTimeout(borrarLista,2010)
		
	}    
}

function compararCartas(cartas){
	console.log(cartas);
	if(cartas[0].substring(0,cartas[0].length-1) == cartas[1].substring(0,cartas[1].length-1)){
		for (var i = 0; i < cartas.length; i++) {
			document.getElementById(cartas[i]).name = "emparejada";
		}
	}
	else{
		
		setTimeout(girarCartas,2000);
	}	
}


function girarCartas(){
	console.log(cartasEmparejadas);
	for (var i = 0; i < cartasEmparejadas.length; i++) {
		document.getElementById(cartasEmparejadas[i]).src = "imagenes/dorso_tarot.jpg";
	}
		
}

function borrarLista(){
	cartasEmparejadas.splice(0, cartasEmparejadas.length);
	contCartas = 0;
}
