<?php 

try {// conexion a mongodb
	$conexion = new MongoClient();
	// selecion de la base de datos(la crea en caso de que no exista)
	$db = $conexion->selectDB("SenaMongo");	
} catch (MongoConnectionException $e) {
	die("No es posible conectarnos a la base de datos:".$e->getMessage());
}

?>