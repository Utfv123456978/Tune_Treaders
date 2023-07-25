<?php 
 
include 'conn.php';
session_start();

$usuario = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$_SESSION['usuario']= $usuario;

$consulta = "SELECT * FROM usuario WHERE nombre='$usuario' AND contraseña='$contraseña'";
$resultado= mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("Location: ../secciones/Inicio.php");
    
}
else{
    echo "<script language='javascript'>
    history.go(-1);
    alert('Los datos no son correctos');
     </script>";
    
}

?>