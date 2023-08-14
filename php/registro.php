<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$opci=$_POST['opci'];
//mensaje
// $mensaje="Registado el usuario" . $nombre . "\r\n";
// $mensaje="Registado el apellido" . $apellido . "\r\n";
// $mensaje="Registado el correo" . $contrasenia . "\r\n";
include("conexion.php");
$sql= "INSERT INTO tbguatemala (nombre,correo,opci)
VALUES ('$nombre','$correo','$opci')";

if (mysqli_query($conn, $sql)) {
  echo "Nuevo registro con exito..!";
  include("/html/index.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>