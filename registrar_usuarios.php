<?php session_start();

require 'dbmg/conexion.php';
// setear la variable de usuario para habilitar sesiones
if (isset($_SESSION['usuario'])) {
	header('Location: contenido.php');
}
// consultar el metodo
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Se pasan los valores que llegan del metodo post desde el formulario
	$nombre    = trim(filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING));
	$apellido  = trim(filter_var(strtolower($_POST['apellido']), FILTER_SANITIZE_STRING));
	$email     = trim(filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING));
	$password  = $_POST['password'];
	$password2 = $_POST['conpassword'];
	$fechanac  = $_POST['fechanac'];
	$ciudad    = $_POST['ciudad'];
	$genero    = $_POST['optradio'];

	//variables para almacenar errores
	$errores = '';
	$correct = '';
	// validacion para confirmar contraseña
	if($password != $password2) {
			$errores .= 'Las contraseñas no son iguales.';
	}else{
	// encriptar contraseña
	$pass = hash('sha512', $password);
	// seleccionar la coleccion con la que se trabajara(la crea en caso de que no exista)
	$usuarios = $conexion->selectCollection("SenaMongo","usuarios");
		// se realiza la consulta y se pasa como un arreglo para ejecutarla
		$user = array('Email' => $email);
		$cursor = $usuarios->find($user);
	// condicion para validar que el usuario exista (email)
	if ($cursor->count() == 0 ) {
		// se crea el documento con los parametros y los valores que se almacenaran en la base de datos
		$nuevo_usuario = array(
			'Nombre' => $nombre,
		 	'Apellido' => $apellido,
		 	'Email' => $email,
		 	'Password' => $pass,
		 	'Fechanac' => $fechanac,
		 	'Ciudad' => $ciudad,
		 	'Genero' => $genero
		);
		// se inserta el documento con sus vlaores en la coleccion
		$usuarios->insert($nuevo_usuario);
		$correct .= 'Usuario registrado correctamente.';
	}else{
		echo "El usuario con el correo indicado ya existe.";
	}
	}
}

require 'view/registro.view.php';

?>