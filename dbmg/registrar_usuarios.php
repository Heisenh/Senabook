<?php session_start();

require '../conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre    = $_POST['nombre'];
	$apellido  = $_POST['apellido'];
	$email     = $_POST['email'];
	$password  = $_POST['password'];
	$password2 = $_POST['conpassword'];
	$fechanac  = $_POST['fechanac'];
	$ciudad    = $_POST['ciudad'];
	$genero    = $_POST['optradio'];

	$errores = '';

	$pass = hash('sha512', $password);
	if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}

	$usuarios = $conexion->selectCollection("SenaMongo","usuarios");

		$user = array('Email' => $email);
		$cursor = $usuarios->find($user);

	if ($cursor->count() == 0 ) {
		$nuevo_usuario = array(
			'Nombre' => $nombre,
		 	'Apellido' => $apellido,
		 	'Email' => $email,
		 	'Password' => $pass,
		 	'Fechanac' => $fechanac,
		 	'Ciudad' => $ciudad,
		 	'Genero' => $genero
		);
		$usuarios->insert($nuevo_usuario);	
	}else{
		echo "<li>El usuario con el correo indicado ya existe.</li>";
	}
}

require '';

?>