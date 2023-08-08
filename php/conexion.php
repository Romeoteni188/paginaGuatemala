<?php 
$servername = "localhost";
$username = "root";
$password = "Romeo188+";
$database="escuela";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("La Conexion fallo: " . $conn->connect_error);
}
//echo "Conectado Exitosamente";

?>