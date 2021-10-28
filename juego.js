
var cartasEmparejadas=[];
var contCartas = 0;
var intentos = 0;
var parejas=0;


function voltearCarta(id) {
	

	if (document.getElementById(id).name!='emparejada') {
		contCartas++;
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
			contarIntentos();
			
		}    

		comprobarVictoria();
	}



	
}

function compararCartas(cartas){

	if(cartas[0].substring(0,cartas[0].length-1) == cartas[1].substring(0,cartas[1].length-1)){

		for (var i = 0; i < cartas.length; i++) {
			document.getElementById(cartas[i]).name = "emparejada";	
		}

		parejas++;
		borrarLista();
	}
	else{
		
		setTimeout(girarCartas,2000);
		setTimeout(borrarLista,2010)
	}	
}


function girarCartas(){

	for (var i = 0; i < cartasEmparejadas.length; i++) {
		document.getElementById(cartasEmparejadas[i]).src = "imagenes/dorso_tarot.jpg";
	}
		
}

function borrarLista(){
	cartasEmparejadas.splice(0, cartasEmparejadas.length);
	contCartas = 0;
}

function contarIntentos(){
	intentos++;
	document.getElementById('contador').innerHTML  = "Intentos: "+intentos;
	
}

function comprobarVictoria(){

	if (parejas==4) {
		setTimeout(function(){location.replace("ganador.php?lvl="+1+"&tiempo="+25+"&intentos="+intentos);},2000)
	}
}