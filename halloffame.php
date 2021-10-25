<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Memory - Hall of Fame</title>
    <link rel="stylesheet" type="text/css" href="style/general.css">
</head>
<body>
    
    <div class="nav">
        <a href="memory.php"><button>Home</button></a>
        <a href="halloffame.php"><button>Hall of Fame</button></a>
        <a href="juego.php"><button>Play</button></a>
    </div>
    <h1>Hall Of Fame</h1>
    <table>
        <tr>
            <th>Puntos</th><th>Nombre</th><th>Nivel</th><th>Tiempo</th><th>Intentos</th>
        </tr>
        <?php
            $ranking = explode("\n",(file_get_contents("ranking.txt")));

            foreach($ranking as $jugador){
                $datos = explode(";", $jugador);
                echo"<tr>";
                foreach ($datos as $dato) {
                    echo"<td>$dato</td>";
                }
                echo"<tr>";
            }
        ?>
    </table>
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



        


        foreach ($ranking as $jugador) {
        
            $datos=explode(";",$jugador);
            $puntos=algoritmo($datos[1],$datos[2],$datos[3]);
            echo $puntos;

            $resultado=$resultado.$puntos.";".$datos[0].";".$datos[1].";".$datos[2].";".$datos[3]."\n";

            file_put_contents("ranking.txt", $resultado);
            unlink("halloffame,txt");


        }
 ?>




</html>

