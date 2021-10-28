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
        $nivel = $_POST['nivel'];
        $dorso='imagenes/dorso_tarot.jpg';
        $totalCartas=[8,12,16,20,30,40];
        $cantidadCartas = [];
        $fotos = ["themagician"=>0,
"highpriestess"=>,
"theempress"=>,
"theemperor"=>,
"thehierofant",
"thelovers",
"thechariot",
"justice",
"thehermit",
"wheeloffortune",
"strength",
"thehangedman",
"death",
"thedevil",
"temperance",
"thetower",
"thestar",
"themoon",
"thesun",
"thejudgement",
"theworld",
"thefool",
"joker",
"jokerblack"];


        for ($i=0; $i < $totalCartas[$nivel-1]/2; $i++) { 
            array_push($cantidadCartas, 0);
         }
        echo $nivel;
        var_dump($cantidadCartas);
    	$contador=0;
    	$limite = 8;
    	
    	while ($contador<$totalCartas[$nivel-1]) {
    		$random = rand(0,($totalCartas[$nivel-1]/2)-1);
            //Cada 4 cartas salta de linea
            if ($contador%4==0 && $contcol%2 == 0) {
                echo "<div>";
                $contcol++;
            }
            else if ($contador%4==0 && $contcol%2 == 1) {
                echo "</div>";
                $contcol++;
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
        
    </div>
</body>
</html>

