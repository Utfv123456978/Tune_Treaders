<?php 
include ("conn.php");

$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$query="INSERT INTO carrito( imagen, nombre, precio) VALUES( '$imagen', '$nombre', '$precio')";
$resultado = $conexion->query($query);

if($resultado){
    echo '<script>
        window.history.go(-1)
        </script>';
}
else{
    echo ' No se envio nada';
}
?>