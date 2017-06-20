<?php 

try {
	$conexion = new MongoClient();
	$db = $conexion->selectDB("SenaMongo");	
} catch (MongoConnectionException $e) {
	die("No es posible conectarnos a la base de datos:".$e->getMessage());
}

?>