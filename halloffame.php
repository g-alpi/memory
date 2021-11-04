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
        <a href="juego.php"><button>Play</button></a>
    </div>
    <h1>Hall Of Fame</h1>
    
        <?php
            

            $ranking = explode("\n",(file_get_contents("HallOfFame.txt")));
                    

            $lista=[];

            foreach($ranking as $jugador){
                $datos = explode(";", $jugador);
                $puntos=algoritmo($datos[1],$datos[2],$datos[3]);

                $lista2=['puntos'=>$puntos,'nombre'=>$datos[0],'lvl'=>$datos[1],'tiempo'=>$datos[2],'intentos'=>$datos[3]];
                
                if (isset($puntos)) {
                      array_push($lista, $lista2); 
                  }  


            }

            usort($lista, 'sort_by_orden');
            function sort_by_orden ($a, $b) {
                return $b['puntos'] - $a['puntos'];
            }  

        ?>
    



    <table>
        <tr>
            <th>Puntos</th><th>Nombre</th><th>Nivel</th><th>Tiempo</th><th>Intentos</th>
        </tr>
        <?php 
            foreach($lista as $jugador){
               

                echo "<tr>";
                
                foreach ($jugador as $key=>$dato) {
                    
                    echo"<td>$dato</td>";

                }
                echo"</tr>";

            }
         ?>
    </table>

<?php 
        

        function algoritmo($lvl,$tiempo,$intentos){
            if ($lvl==1) {
                $tiempoMax=60;
                $tiempoJugado=$tiempoMax-$tiempo;
                $porcentajeTiempo=100-($tiempoJugado/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.1-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==2){
                $tiempoMax=90;
                $tiempoJugado=$tiempoMax-$tiempo;
                $porcentajeTiempo=100-($tiempoJugado/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.2-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==3){
                $tiempoMax=150;
                $tiempoJugado=$tiempoMax-$tiempo;
                $porcentajeTiempo=100-($tiempoJugado/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.3-sqrt($porcentajeTiempo*$intentos));
            }
            else if($lvl==4){
                $tiempoMax=190;
                $tiempoJugado=$tiempoMax-$tiempo;
                $porcentajeTiempo=100-($tiempoJugado/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.4-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==5){
                $tiempoMax=230;
                $tiempoJugado=$tiempoMax-$tiempo;
                $porcentajeTiempo=100-($tiempoJugado/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.5-sqrt($porcentajeTiempo*$intentos));
            }
            else if ($lvl==6){
                $tiempoMax=320;
                $tiempoJugado=$tiempoMax-$tiempo;
                $porcentajeTiempo=100-($tiempoJugado/$tiempoMax)*100;
                $puntuacion=round(($lvl*$porcentajeTiempo)*1.6-sqrt($porcentajeTiempo*$intentos));
            }
            return $puntuacion;

        }

        


 ?>




</html>

