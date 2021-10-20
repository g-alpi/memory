<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Portada</title>
	<style type="text/css">
		body{
			background-color: #211522;
			color: #d9d21a;
		}
		img {
			margin: 0 auto;
			width: 35%;
			border-radius: 5px;
		}
		button{
			width: 100px;
			height: 40px;
			color: #d9d21a;
			background-color: #452947;
			border-color: #613659;
			border-radius: 3px;
		}
		a {
			text-decoration: none;
			color: inherit;
			margin-top: 4%;
			margin-left: auto;
			margin-right: auto;
		}
		div#instrucciones{
			border: 5px solid #613659;
			border-radius: 5px;
			padding: 15px;
			width: 45%;
			background-color: #452947;
			vertical-align: center;
			display: flex;
			flex-wrap: wrap;
		}
		h1.titulo{
			margin: 3% auto 3%;
		}
		div.flexbox{
			display: flex;
		}
		.titulo{
			text-align: center;
		}


	</style>
</head>
<body>
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
<div class="flexbox">
	<a href="juego.php"><button>Play</button></a>
</div>
</body>
</html>