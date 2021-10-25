<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory - Game</title>
    <link rel="stylesheet" type="text/css" href="style/general.css">
    <link rel="stylesheet" type="text/css" href="style/juego.css">
</head>
<body>
	<script type="text/javascript" src="juego.js"></script>
    <div class="nav">
    <a href="memory.php"><button>Home</button></a>
    <a href="halloffame.php"><button>Hall of Fame</button></a>
</div>
    <div id="flex">
        <div></div>
        <h1>Memory</h1>
        <div><h3 id="contador">Intentos: 0</h3></div>
    </div>
    <div id="flexbox">

        <?php 
        
        $dorso='imagenes/dorso_tarot.jpg';
      
    	$cantidadFotos= [0,0,0,0];


    	$contador=0;
    	
    	
    	while ($contador<8) {
    		$random= rand(0,3);
            if ($contador==0||$contador==4) {
                echo "<div>";
            }
            if ($contador==4||$contador==8) {
                echo"</div>";
            }

    		if ($cantidadFotos[0]<2 && $random==0) {
                $cantidadFotos[0]++;
    			echo "<img src='$dorso' alt='thechariot' id='thechariot".$cantidadFotos[0].
                "'onclick='voltearCarta(\"thechariot".$cantidadFotos[0]."\")'>";
    			$contador++;
                
    		}
    		elseif ($cantidadFotos[1]<2 && $random==1) {
                $cantidadFotos[1]++;
    			echo "<img src='$dorso' alt='thefool' id='thefool".$cantidadFotos[1].
                "'onclick='voltearCarta(\"thefool".$cantidadFotos[1]."\")'>";
    			$contador++;
    		}
    		elseif ($cantidadFotos[2]<2 && $random==2) {
                $cantidadFotos[2]++;
    			echo "<img src='$dorso' alt='thehermit' id='thehermit".$cantidadFotos[2].
                "'onclick='voltearCarta(\"thehermit".$cantidadFotos[2]."\")'>";
    			$contador++;
    		}
    		elseif ($cantidadFotos[3]<2 && $random==3) {
                $cantidadFotos[3]++;
    			echo "<img src='$dorso' alt='theTower' id='theTower".$cantidadFotos[3].
                "'onclick='voltearCarta(\"theTower".$cantidadFotos[3]."\")'>";
    			$contador++;
    		}
		
    	}
      

        ?>
            
        
        
    </div>
</body>
</html>

﻿