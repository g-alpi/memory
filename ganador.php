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
	


 




</body>
</html>