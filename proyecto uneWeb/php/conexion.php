<?php 
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('BD', 'proyecto');
define('PASSWORD', '');

$link = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BD) or die("Error de conexion de base de datos");
 ?>