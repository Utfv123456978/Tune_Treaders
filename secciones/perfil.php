<?php 
session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];
if($_SESSION['usuario']=='INICIA SESION'){
    header("Location: iniciosesion.html");
} 

include("../conexion/conn.php");
                
                $query = "SELECT * FROM usuario WHERE nombre='$varsesion'";
                $resultado= $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/8.css">
    <link rel="stylesheet" href="../estilos/perfil.css">
</head>
<body>
<div class="menuInvisible" id="menu">
    <button class="iconoCerrar"><img  src="close.png" alt=""></button>
    <div class="enlacesCel">
            <a href="Inicio.php">INICIO</a>
            <a href="#reseñas" class="btnReseñas">RESEÑA</a>
            <a href="Catalogo.html">CATÁLOGO</a>
            <a href="sobrenosotros.html">SOBRE NOSOTROS</a>
            <a class="nombreusuario" href="perfil.php"> <?php echo $_SESSION['usuario'] ?></a>
        </div>
    </div>
    <!-- Cambiar -->
    <div class="Logo">
        <img src="logo.png" width="50px" class="imgLogo">
            <p class="Nombre_Tienda">TUNE TREADERS</p>
     
        <a class="carrito" href="carrito.php" ><img src="https://cdn-icons-png.flaticon.com/512/107/107831.png"   width="40px"></a>
        
        <div class="enlaces" >
            <a href="Inicio.php">INICIO</a>
            <a href="#reseñas" class="btnReseñas">RESEÑA</a>
            <a href="Catalogo.html">CATÁLOGO</a>
            <a href="sobrenosotros.html">SOBRE NOSOTROS</a>
            <a class="nombreusuario" href="perfil.php"> <?php echo $_SESSION['usuario'] ?></a>
        </div>
        <button class="iconoMenu"><img src="menu.png" alt="" ></button>
        
    </div>
<div class="cuadro1">
    <img src="https://assets.stickpng.com/images/585e4beacb11b227491c3399.png" alt="">
    <p>Cambiar imagen</p>
    <a href="cerrarSesion.php" class="btnCerrarSesion">Cerrar Sesión</a>
</div>

<div class="cuadro2">
<?php while($row = $resultado->fetch_assoc()){
    ?>
              
         <p class="PerfilNombre"><?php echo $varsesion?></p>
         <p class="PerfilApellido"><?php echo $row['apellido']?></p>

         <div class="PerfilDatos">
         <p class="PerfilCorreo"><b>Correo: </b>   <?php echo $row['email']?> </p>
         <p class="PerfilCalle"><b> Calle: </b>  <?php echo $row['calle']?> </p>
         <p class="PerfilMunicipio"><b>Municipio: </b>   <?php echo $row['municipio']?> </p>
         <p class="PerfilCP"><b> Código Postal:</b>   <?php echo $row['cp']?> </p>
         <p class="PerfilTelefono"><b> Teléfono:  </b> <?php echo $row['telefono']?> </p>
         </div>
     
            <?php }?>


</div>
</body>
</html>