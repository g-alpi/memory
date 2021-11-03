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
            flex-direction: column;
            text-align: center;
            justify-content: center;
            border: solid black 5px;
            width: 100%;
            height: 80%;
            
        }
        div#flexbox img {
            border:3px solid #613659;
            color: #452947;
            border-radius: 10px;
            width: 10%;
            height: 90%;
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
        $nivel = $_POST['nivel'];
        $dorso='imagenes/dorso_tarot.jpg';      
    	  $cantidadFotos= [0,0,0,0,0,0];



        for ($i=0; $i < $totalCartas[$nivel-1]/2; $i++) { 
            array_push($cantidadCartas, 0);
         }
        echo $nivel;
        var_dump($cantidadCartas);
    	$contador=0;
        $totalCartas=[8,12,16,20,30,40];
        $dificultad=$_POST['nivel']; // cambiar while ($contador<$totalCartas[$dificultad-1])
    	
    	
    	while ($contador<$totalCartas[$dificultad-1]) {
    		$random= rand(0,$totalCartas[$dificultad/2]);
            
            if ($dificultad==1 ||$dificultad==2 ||$dificultad==3) {
                if ($contador%4==0) {
                    echo"<div style='height: 10%;'>";
                
                }
            }
            elseif($dificultad==4){
                if ($contador%5==0) {
                    echo"<div style='height: 20%;'>";
                
                }

            }
            elseif($dificultad==5){
                if ($contador%6==0) {
                    echo"<div style='height: 10%;'>";
                }

            }
            elseif($dificultad==6){
                if ($contador%8==0) {
                    echo"<div style='height: 20%; width:50%'>";
                }

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

            elseif ($cantidadFotos[4]<2 && $random==4) {
                $cantidadFotos[4]++;
                echo "<img src='$dorso' alt='death' id='death".$cantidadFotos[4].
                "'onclick='voltearCarta(\"death".$cantidadFotos[4]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[5]<2 && $random==5) {
                $cantidadFotos[5]++;
                echo "<img src='$dorso' alt='strenght' id='strenght".$cantidadFotos[5].
                "'onclick='voltearCarta(\"strenght".$cantidadFotos[5]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[6]<2 && $random==6) {
                $cantidadFotos[6]++;
                echo "<img src='$dorso' alt='temperance' id='temperance".$cantidadFotos[6].
                "'onclick='voltearCarta(\"temperance".$cantidadFotos[6]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[7]<2 && $random==7) {
                $cantidadFotos[7]++;
                echo "<img src='$dorso' alt='thedevil' id='thedevil".$cantidadFotos[7].
                "'onclick='voltearCarta(\"thedevil".$cantidadFotos[7]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[8]<2 && $random==8) {
                $cantidadFotos[8]++;
                echo "<img src='$dorso' alt='theemperor' id='theemperor".$cantidadFotos[8].
                "'onclick='voltearCarta(\"theemperor".$cantidadFotos[8]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[9]<2 && $random==9) {
                $cantidadFotos[9]++;
                echo "<img src='$dorso' alt='theempress' id='theempress".$cantidadFotos[9].
                "'onclick='voltearCarta(\"theempress".$cantidadFotos[9]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[10]<2 && $random==10) {
                $cantidadFotos[10]++;
                echo "<img src='$dorso' alt='thehangedman' id='thehangedman".$cantidadFotos[10].
                "'onclick='voltearCarta(\"thehangedman".$cantidadFotos[10]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[11]<2 && $random==11) {
                $cantidadFotos[11]++;
                echo "<img src='$dorso' alt='thehierophant' id='thehierophant".$cantidadFotos[11].
                "'onclick='voltearCarta(\"thehierophant".$cantidadFotos[11]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[12]<2 && $random==12) {
                $cantidadFotos[12]++;
                echo "<img src='$dorso' alt='thehighpriestess' id='thehighpriestess".$cantidadFotos[12].
                "'onclick='voltearCarta(\"thehighpriestess".$cantidadFotos[12]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[13]<2 && $random==13) {
                $cantidadFotos[13]++;
                echo "<img src='$dorso' alt='thejudgement' id='thejudgement".$cantidadFotos[13].
                "'onclick='voltearCarta(\"thejudgement".$cantidadFotos[13]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[14]<2 && $random==14) {
                $cantidadFotos[14]++;
                echo "<img src='$dorso' alt='thejustice' id='thejustice".$cantidadFotos[14].
                "'onclick='voltearCarta(\"thejustice".$cantidadFotos[14]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[15]<2 && $random==15) {
                $cantidadFotos[15]++;
                echo "<img src='$dorso' alt='thelovers' id='thelovers".$cantidadFotos[15].
                "'onclick='voltearCarta(\"thelovers".$cantidadFotos[15]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[16]<2 && $random==16) {
                $cantidadFotos[16]++;
                echo "<img src='$dorso' alt='themagician' id='themagician".$cantidadFotos[16].
                "'onclick='voltearCarta(\"themagician".$cantidadFotos[16]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[17]<2 && $random==17) {
                $cantidadFotos[17]++;
                echo "<img src='$dorso' alt='themoon' id='themoon".$cantidadFotos[17].
                "'onclick='voltearCarta(\"themoon".$cantidadFotos[17]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[18]<2 && $random==18) {
                $cantidadFotos[18]++;
                echo "<img src='$dorso' alt='thestar' id='thestar".$cantidadFotos[18].
                "'onclick='voltearCarta(\"thestar".$cantidadFotos[18]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[19]<2 && $random==19) {
                $cantidadFotos[19]++;
                echo "<img src='$dorso' alt='thesun' id='thesun".$cantidadFotos[19].
                "'onclick='voltearCarta(\"thesun".$cantidadFotos[19]."\")' name='reverso'>";
                $contador++;
            }
            elseif ($cantidadFotos[20]<2 && $random==20) {
                $cantidadFotos[20]++;
                echo "<img src='$dorso' alt='theworld' id='theworld".$cantidadFotos[20].
                "'onclick='voltearCarta(\"theworld".$cantidadFotos[20]."\")' name='reverso'>";
                $contador++;
            }
            

            if ($dificultad==1 ||$dificultad==2 ||$dificultad==3) {
                if ($contador%4==0) {
                    echo"</div>";
                
                }
            }
            elseif($dificultad==4){
                if ($contador%5==0) {
                    echo"</div>";
                
                }

            }
            elseif($dificultad==5){
                if ($contador%6==0) {
                    echo"</div>";
                }

            }
            elseif($dificultad==6){
                if ($contador%8==0) {
                    echo"</div>";
                }

            }

		
    	}
      

        ?>

        <script type="text/javascript">var dificultad = "<?= $dificultad ?>";</script>
        <script type="text/javascript" src="juego.js"></script>
        
        
    </div>
</body>
</html>

﻿