<?php session_start();
// setear la variable de usuario para habilitar sesiones
if (isset($_SESSION['usuario'])) {
	require 'view/contenido.view.php';
} else {
	header('Location: login.php');
}

?>