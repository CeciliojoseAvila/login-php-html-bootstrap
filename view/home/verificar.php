<?php
require_once("c://xampp/htdocs/login/controller/homeController.php");
session_start();

$obj = new homeController();
$correo = $obj->limpiarCorreo($_POST['correo']);
$contraseña = $obj->limpiarCadena($_POST['contraseña']);
$bandera = $obj-> verificarUsuario($correo, $contraseña);
if ($bandera) {
    $_SESSION['usuario'] = $correo;
    header("Location:panel_control.php");
} else {
    $error = "<li> Las claves son incorrectas </li>";
    header("Location:login.php?error=" . $error);
}
?>