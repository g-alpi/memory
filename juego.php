<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory - Game</title>
    <style>
        body{
            background-color: #211522;
            color: #d9d21a;
            
        }
        h1{
            text-align: center;
        }
        div#flex{
            display: flex;
        }
        div#flex div{
            width: 45%;
            content: ;
        }
        div#flexbox{
            display: flex;
            flex-wrap: wrap;
            text-align: center;
            justify-content: center;
            margin: 20px;
        }
        div#flexbox img {
            width: 150px;
            border:3px solid #613659;
            color: #452947;
            border-radius: 10px;
            width: 10%;
            margin: 3px;

        }
        h3#contador{
            float: right;
            padding-right: 10%;
        }
    </style>
</head>
<body>
	<script type="text/javascript" src="juego.js"></script>
    <div id="flex">
        <div></div>
        <h1>Memory</h1>
        <div><h3 id="contador">Intentos: 0</h3><h3 id="countdown">Tiempo: 0</h3></div>
    </div>
    <div id="flexbox">

        <?php 
        
        $dorso='imagenes/dorso_tarot.jpg';
      
    	$cantidadFotos= [0,0,0,0];


    	$contador=0;
        $totalCartas=[8,12,16,20,30,40];
        $dificultad=1; // cambiar while ($contador<$totalCartas[$dificultad-1])
    	
    	
    	while ($contador<8) {
    		$random= rand(0,$totalCartas[$dificultad/2]);
            if ($contador==0||$contador==4) {
                echo "<div>";
            }
            if ($contador==4||$contador==8) {
                echo"</div>";
            }

    		if ($cantidadFotos[0]<2 && $random==0) {
                $cantidadFotos[0]++;
    			echo "<img src='$dorso' alt='thechariot' id='thechariot".$cantidadFotos[0].
                "'onclick='voltearCarta(\"thechariot".$cantidadFotos[0]."\")' name='reverso'>";
    			$contador++;
                
    		}
    		elseif ($cantidadFotos[1]<2 && $random==1) {
                $cantidadFotos[1]++;
    			echo "<img src='$dorso' alt='thefool' id='thefool".$cantidadFotos[1].
                "'onclick='voltearCarta(\"thefool".$cantidadFotos[1]."\")' name='reverso'>";
    			$contador++;
    		}
    		elseif ($cantidadFotos[2]<2 && $random==2) {
                $cantidadFotos[2]++;
    			echo "<img src='$dorso' alt='thehermit' id='thehermit".$cantidadFotos[2].
                "'onclick='voltearCarta(\"thehermit".$cantidadFotos[2]."\")' name='reverso'>";
    			$contador++;
    		}
    		elseif ($cantidadFotos[3]<2 && $random==3) {
                $cantidadFotos[3]++;
    			echo "<img src='$dorso' alt='theTower' id='theTower".$cantidadFotos[3].
                "'onclick='voltearCarta(\"theTower".$cantidadFotos[3]."\")' name='reverso'>";
    			$contador++;
    		}
		
    	}
      

        ?>

        <script type="text/javascript">var dificultad = "<?= $dificultad ?>";</script>
        <script type="text/javascript" src="juego.js"></script>
        
        
    </div>
</body>
</html>

﻿