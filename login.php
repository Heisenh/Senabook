<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require 'dbmg/conexion.php';
// setear la variable de usuario para habilitar sesiones
if (isset($_SESSION['usuario'])) {
	header('Location: contenido.php');
}

$errores = '';
// consultar el metodo
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Se pasan los valores que llegan del metodo post desde el formulario
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];

	// encriptar contraseña
	$password = hash('sha512', $password);

	// seleccionar la coleccion con la que se trabajara(la crea en caso de que no exista)
	$usuarios = $conexion->selectCollection("SenaMongo","usuarios");

	// se crea un arreglo para comparar usuario y contraseña en base de datos, luego se ejecuta la consulta
	$iniciar = array('Email' => $usuario, 'Password' => $password);
	$cursor = $usuarios->find($iniciar);

	// condicion para confirmar el resultado de la consulta y habilitar la sesion en caso de ser correctos
	if ($cursor->count() != 0) {
		$_SESSION['usuario'] = $usuario;
		header('Location: contenido.php');
	// } elseif ($cursor->count() = 0) {
	// 	$errores .= '<li>El usuario no existe</li>';
	}else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'view/login.view.php';

?>