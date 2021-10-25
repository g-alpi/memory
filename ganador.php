<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Victoria</title>
	<link rel="stylesheet" type="text/css" href="style/general.css">
	<link rel="stylesheet" type="text/css" href="style/exit.css">
</head>
<body>
	<div class="nav">
		<a href="memory.php"><button>Home</button></a>
		<a href="halloffame.php"><button>Hall of Fame</button></a>
		<a href="juego.php"><button>Play</button></a>
	</div>
	<div id="titulo">
		<h1 class ="glow">Victoria</h1>
	</div>
	<img class="bola" src="imagenes/bola-magica.png" alt="bola magica" width="300px">
	
<form method="post">
	<div id="inputs">
		<input id="text "type="text" placeholder="Nombre" name="jugador">
		<input id="submit" type="submit" name="" value="Inscribete">
	</div>
</form>	
	<?php
			$contenido=file_get_contents("HallOfFame.txt");

			$nivel=$_GET['lvl'];
			$time=$_GET['tiempo'];
			$intentos=$_GET['intentos'];
			$jugador=$_POST['jugador'];

			if(empty($contenido)){
				$contenido=$jugador.";".$nivel.";".$time.";".$intentos;
			}
			else{
				$contenido=$contenido."\n".$jugador.";".$nivel.";".$time.";".$intentos;
			}

			if (isset($jugador)) {

				file_put_contents("HallOfFame.txt",$contenido );
			}


    
	?>
	
</form>

 
<?php 
$ranking = explode("\n",(file_get_contents("HallOfFame.txt")));

        function algoritmo($lvl,$timepo,$intentos){
            if ($lvl==1) {
                $timepoMax=60;
                $porcentajeTiempo=100-($timepo/$timepoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.1-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==2){
                $tiempoMax=90;
                $porcentajeTiempo=100-($tiempo/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.2-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==3){
                $tiempoMax=110;
                $porcentajeTiempo=100-($tiempo/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.3-sqrt($porcentajeTiempo*$intentos));
            }
            else if($lvl==4){
                $tiempoMax=140; 
                $porcentajeTiempo=100-($tiempo/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.4-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==5){
                $tiempoMax=190; 
                $porcentajeTiempo=100-($tiempo/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.5-sqrt($porcentajeTiempo*$intentos));
            }
            return $puntuacion;

        }



        $resultado=file_get_contents("ranking.txt");


        foreach ($ranking as $jugador) {
        
            $datos=explode(";",$jugador);
            $puntos=algoritmo($datos[1],$datos[2],$datos[3]);
            echo $puntos;

            $resultado=$resultado.$puntos.";".$datos[0].";".$datos[1].";".$datos[2].";".$datos[3]."\n";

            file_put_contents("ranking.txt", $resultado);


        }
 ?>



</body>
</html>