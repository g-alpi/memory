<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Portada</title>
  
	<link rel="stylesheet" type="text/css" href="style/general.css">
	<link rel="stylesheet" type="text/css" href="style/memory.css">
	<style type="text/css">
		

	</style>
</head>
<body>
<div class="nav">
	<a href="memory.php"><button>Home</button></a>
	<a href="halloffame.php"><button>Hall of Fame</button></a>
</div>
<h1 class="titulo">Memory Tarot</h1>
<div class="flexbox">
	<div id="instrucciones"><h2 class="titulo">Instrucciones</h2><ol>
			<li>Seleccionar una carta girada boca abajo.</li>
			<li>Seleccionar la otra carta que creas que tiene la misma imagen que la anterior.</li>
			<li>Ir emparejando consecutivamente hasta emparejar todas.</li>
		</ol>
		<ul>
			<li>Ten en cuenta los intentos que haces</li>
			<li>No puedes voltear mas de 2 cartas a la vez</li>
			<li>Si las 2 cartas volteadas no coinciden, se vuelven a voltean 2 segundos mas tarde.</li>
		</ul>
	</div>
	<img src="fotoportada.jpeg" alt="foto de portada">
</div>
<form method="post" action="juego.php">
	<div class="flexbox">
		<div id="niveles">
			<input type="radio" id="4x2" name="nivel" value="1">
			<label for="4x2">The Fool (4x2)</label>
			<input type="radio" id="4x3" name="nivel" value="2">
			<label for="4x3">The Hermit (4x3)</label><br>
			<input type="radio" id="4x4" name="nivel" value="3">
			<label for="4x4">The Stars (4x4)</label>
			<input type="radio" id="5x4" name="nivel" value="4">
			<label for="5x4">The Moon (5x4)</label><br>
			<input type="radio" id="6x5" name="nivel" value="5">
			<label for="6x5">The Sun (6x5)</label>
			<input type="radio" id="8x5" name="nivel" value="6">
			<label for="8x5">The Devil (8x5)</label>	
		</div>
		<div id="play">
			<input type="submit" id="play"	 value="Play">
		</div>
		<div class="relleno">
		</div>
	</div>
</form>
	
	

</div>
</body>
</html>