
var cartasEmparejadas=[];
var contCartas = 0;
var intentos = 0;
var parejas=0;
var bandera=false;
var totalCartas=[8,12,16,20,30,40]
var tiempos=[60,90,110,140,190,210]



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

			else if(id.substring(0,id.length-1) == "death"){
				document.getElementById(id).src = "imagenes/death.jpg";
			}
			else if(id.substring(0,id.length-1) == "strenght"){
				document.getElementById(id).src = "imagenes/strength.jpg";
			}
			else if(id.substring(0,id.length-1) == "temperance"){
				document.getElementById(id).src = "imagenes/temperance.jpg";
			}
			else if(id.substring(0,id.length-1) == "thedevil"){
				document.getElementById(id).src = "imagenes/thedevil.jpg";
			}
			else if(id.substring(0,id.length-1) == "theemperor"){
				document.getElementById(id).src = "imagenes/theemperor.jpg";
			}
			else if(id.substring(0,id.length-1) == "theempress"){
				document.getElementById(id).src = "imagenes/theempress.jpg";
			}
			else if(id.substring(0,id.length-1) == "thehangedman"){
				document.getElementById(id).src = "imagenes/thehangedman.jpg";
			}
			else if(id.substring(0,id.length-1) == "thehierophant"){
				document.getElementById(id).src = "imagenes/thehierophant.jpg";
			}
			else if(id.substring(0,id.length-1) == "thehighpriestess"){
				document.getElementById(id).src = "imagenes/thehighpriestess.jpg";
			}
			else if(id.substring(0,id.length-1) == "thejudgement"){
				document.getElementById(id).src = "imagenes/thejudgement.jpeg";
			}
			else if(id.substring(0,id.length-1) == "thejustice"){
				document.getElementById(id).src = "imagenes/thejustice.jpg";
			}
			else if(id.substring(0,id.length-1) == "thelovers"){
				document.getElementById(id).src = "imagenes/thelovers.jpeg";
			}
			else if(id.substring(0,id.length-1) == "themagician"){
				document.getElementById(id).src = "imagenes/themagician.jpg";
			}
			else if(id.substring(0,id.length-1) == "themoon"){
				document.getElementById(id).src = "imagenes/themoon.jpg";
			}
			else if(id.substring(0,id.length-1) == "thestar"){
				document.getElementById(id).src = "imagenes/thestar.jpg";
			}
			else if(id.substring(0,id.length-1) == "thesun"){
				document.getElementById(id).src = "imagenes/thesun.jpg";
			}
			else if(id.substring(0,id.length-1) == "theworld"){
				document.getElementById(id).src = "imagenes/theworld.jpg";
			}
			else if(id.substring(0,id.length-1) == "wheeloffortune"){
				document.getElementById(id).src = "imagenes/wheeloffortune.jpg";
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

	if (parejas==(totalCartas[dificultad-1]/2)) {
		bandera=true;
		setTimeout(function(){location.replace("ganador.php?lvl="+1+"&tiempo="+totalTime+"&intentos="+intentos);},2000)
	}
	
}


window.onload = updateClock;

var totalTime = tiempos[dificultad-1];

function updateClock() {
	document.getElementById('countdown').innerHTML = "Tiempo: "+totalTime;
	if(totalTime==0){
		alert('Has perdido :c');
		location.replace("memory.php");
	}
	else if(bandera==true){

		return totalTime;
	}
	else{
		totalTime-=1;
		setTimeout("updateClock()",1000);
	}
}





