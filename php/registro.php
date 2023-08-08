<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
//mensaje
// $mensaje="Registado el usuario" . $nombre . "\r\n";
// $mensaje="Registado el apellido" . $apellido . "\r\n";
// $mensaje="Registado el correo" . $contrasenia . "\r\n";

$sql= "INSERT INTO tbregistro (nombre,apellido,correo,contrasenia)
VALUES ('$nombre', '$apellido', '$correo','$contrasenia')";

if (mysqli_query($conn, $sql)) {
  echo "Nuevo registro con exito..!";
  include("login.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>