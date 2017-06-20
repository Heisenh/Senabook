<?php session_start();
// Destruir la sesion y redireccionar al inicio de sesion
session_destroy();
$_SESSION = array();

header('Location: login.php');

?>