<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion ==''){
    $_SESSION['usuario']= 'INICIA SESION';
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/8.css">
    <link rel="stylesheet" href="../estilos/Catalogo2.css">
</head>
<body>
<div class="menuInvisible" id="menu">
    <button class="iconoCerrar"><img  src="../imagenes/close.png" alt=""></button>
    <div class="enlacesCel">
            <a href="Inicio.php">INICIO</a>
            <a href="#reseñas" class="btnReseñas">RESEÑA</a>
            <a href="catalogo.php">CATÁLOGO</a>
            <a href="sobrenosotros.php">SOBRE NOSOTROS</a>
            <a class="nombreusuario" href="perfil.php"> <?php echo $_SESSION['usuario'] ?></a>
        </div>
    </div>
    <!-- Cambiar -->
    <div class="Logo">
        <img src="../imagenes/logo.png" width="50px" class="imgLogo">
            <p class="Nombre_Tienda">TUNE TREADERS</p>
     
        <a class="carrito" href="carrito.php" ><img src="https://cdn-icons-png.flaticon.com/512/107/107831.png"   width="40px"></a>
        
        <div class="enlaces" >
            <a href="Inicio.php">INICIO</a>
            <a href="#reseñas" class="btnReseñas">RESEÑA</a>
            <a href="catalogo.php">CATÁLOGO</a>
            <a href="sobrenosotros.php">SOBRE NOSOTROS</a>
            <a class="nombreusuario" href="perfil.php"> <?php echo $_SESSION['usuario'] ?></a>
        </div>
        <button class="iconoMenu"><img src="../imagenes/menu.png" alt="" ></button>
        
    </div>
    
    <!-- Seccion albums -->
    <div class="Seccion_Albums">
    <?php 
                include("../conexion/conn.php");
                
                $query = "SELECT * FROM discos";
                $resultado= $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
        ?>


        <div >
            <img class="datos" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="" width="140PX">
            <p class="datos" style="font-size: 25px; "><?php echo $row['nombre']; ?></p> <br>
            <p class="datos"><?php echo $row['descripcion']; ?></p>
            <p  class="datos"class="precio">$<?php echo $row['precio']; ?></p>
            
            <form action="guardarCarrito.php" method="post" class="formulario"  enctype = "multipart/form-data">
            <input type="text" name="imagen" id="imagen" value="<?php echo base64_encode($row['imagen']); ?>">
            
            <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
            <input type="text" name="precio"  id="precio" value="<?php echo $row['precio']; ?>">
            <button class="btnComprar">COMPRAR</button>
            </form> 
        </div>
        <?php }?>
        <script src="../js/menuSistema.js"> 
</script>
</body>
</html>