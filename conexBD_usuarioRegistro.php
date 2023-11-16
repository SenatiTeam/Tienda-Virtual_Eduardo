<?php

require_once("conexion.php");

//Variables
$nombre_usuario =$_POST['nombreU'];
$correo_usuario =$_POST['correoU'];
$clave_usuario =$_POST['claveU'];
$roles_usuario =$_POST['rolesU'];

/* Mensaje */
//echo $nombre_usuario.'___'.$correo_usuario. "<br>";
//echo $clave_usuario.'___'.$roles_usuario;

/* Codigo SQL - mediante script */
$sql = "INSERT INTO usuario(name_user,email_user,password_user,roles_user) VALUES('$nombre_usuario','$correo_usuario','$clave_usuario','$roles_usuario')";

$resultado = $conexion->query($sql) or die($conexion->connect_error);
if ($resultado){
    echo"Registro importado exitosamente";
}else{
    echo "Error".$conexion->error;
}

//Cerramos la conexion, siempre utilizamos esto cada vez que usamos un registro
$conexion -> close();

?>