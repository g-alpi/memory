
var cartasEmparejadas=[];
var contCartas = 0;
function voltearCarta(id) {
	contCartas++;


		
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

	cartasEmparejadas.push(id);
	document.getElementById('test').innerHTML=contCartas;
	if (contCartas==2) {
		contCartas = 0;
		compararCartas(cartasEmparejadas);
		
	}

    
    
    	
    
}
function compararCartas(cartas){
	if(cartas[0].substring(0,cartas[0].length-1) != cartas[1].substring(0,cartas[1].length-1)){
		setTimeout(girarCartas(cartas),2000);
	}
	else{
		for (var i = 0; i < cartas.length; i++) {
			document.getElementById(cartas[i]).name = "emparejada";
		}
		
	}

	cartas.splice(0, cartas.length);
	
}
function girarCartas(cartas){
	for (var i = 0; i < cartas.length; i++) {
		document.getElementById(cartas[i]).src = "imagenes/dorso_tarot.jpg";
	}
	
	
}