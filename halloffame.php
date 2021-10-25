<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Hall of Fame</title>
	<link rel="stylesheet" type="text/css" href="style/general.css">
</head>
<body>
	<?php
		$ranking = explode("\n",(file_get_contents("HallOfFame.txt")));
		foreach ($ranking as $jugador) {
				
		}
	?>
	<div class="nav">
		<a href="memory.php"><button>Home</button></a>
		<a href="halloffame.php"><button>Hall of Fame</button></a>
		<a href="juego.php"><button>Play</button></a>
	</div>
	<h1>Hall Of Fame</h1>
	<table>
		<tr>
			<th></th><th>Nombre</th><th>Nivel</th><th>Tiempo</th><th>Intentos</th>
		</tr>
		<?php

			foreach($ranking as $jugador){
				$puesto++;
				$datos = explode(";", $jugador);
				echo"<tr>";
				echo"<td>$puesto</td>";
				foreach ($datos as $dato) {
					echo"<td>$dato</td>";
				}
				echo"<tr>";
			}
		?>
</html>