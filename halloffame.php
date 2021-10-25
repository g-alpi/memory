<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Hall of Fame</title>
	<link rel="stylesheet" type="text/css" href="style/general.css">
</head>
<body>
	<?php
		$ranking = explode("\n",(file_get_contents("HallOffame.txt")));
	?>
	<div class="nav">
		<a href="memory.php"><button>Home</button></a>
		<a href="halloffame.php"><button>Hall of Fame</button></a>
		<a href="juego.php"><button>Play</button></a>
	</div>
	<ol>
		<?php
		var_dump($ranking)
			foreach($ranking as $partida) {
				$dades = explode(";",$partida);
				echo"<li>".$dades[0].",".."</li>";
			}	
		?>
	</ol>
</body>
</html>