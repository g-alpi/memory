<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
</head>
<body>
	

<form method="post">
	<input type="text" placeholder="Nombre" name="jugador">
	<input type="submit" name="">
	
</form>

 
<?php
$contenido=file_get_contents("HallOfFame.txt");

$nivel=$_GET['lvl'];
$time=$_GET['tiempo'];
$intentos=$_GET['intentos'];
$jugador=$_POST['jugador'];

$contenido=$contenido.$jugador.";".$nivel.";".$time.";".$intentos."\n";



file_put_contents("HallOfFame.txt",$contenido );



?>



</body>
</html>