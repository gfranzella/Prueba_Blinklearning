<?php

try{
	$db = new PDO("mysql:dbname=bdpruebas;host=127.0.0.1", "root", "Carolina123*");

	echo 'Conexion Correcta!';

}catch(PDOException $e){
	echo 'Error al conectarnos' . $e->getMessage();
}


	



?>