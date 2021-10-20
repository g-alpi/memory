Para poder jugar a nuestro Memory, ambientado en el mundo de las cartas del Tarot, necesitarás tener instalado apache/Xampp.

El juego consiste en hacer parejas de cartas, encontrarás las reglas en la pantalla principal.

En caso de estar utilizando apache realizaremos las siguientes acciones:
-Nos ubicamos en la carpeta donde hayamos descargado el juego.
-Abrimos una terminal en el directorio.
-Ejecutamos el comando "$php -S 0:1024" en este caso hemos decidido que realizaremos una conexión php por el puerto 1024.
-Abrimos un navegador e introducimos "localhost:1024/memory.php"(1024=puerto php).
-En algunos casos hay que introducir "http://localhost:1024/memory.php"(1024=puerto php).

En caso de estar utilizando Xampp debemos realizar las siguientes acciones:
-Ubicar el archivo descargado en la carpeta htdocs.
-Abrimos un navegador e introducimos "localhost/memory/memory.php".
