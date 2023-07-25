<?php 
include '../conexion/conn.php';

$nombre = $_POST ['nombre'];
$apellidos = $_POST ['apellidos'];
$contraseña = $_POST ['contraseña'];
$calle = $_POST ['calle'];
$municipio = $_POST ['municipio'];
$cp = $_POST ['cp'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];


$insertar ="INSERT INTO usuario  VALUES ('$nombre', '$apellidos', '$contraseña', '$calle', '$municipio', '$cp', '$email', '$telefono')";

$query= mysqli_query($conexion, $insertar);

if ($query){
    header("Location: iniciosesion.html");
}
else{
    header("Location: Registro.php");
    echo "<script language='javascript'>Alert('Los datos no son correctos') </script>";
}
?>