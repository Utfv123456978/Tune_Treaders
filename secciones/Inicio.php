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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="../estilos/8.css">
    
</head>
<body>
<div class="menuInvisible" id="menu">
    <button class="iconoCerrar"><img  src="../imagenes/close.png" alt=""></button>
    <div class="enlacesCel">
            <a href="Inicio.php">INICIO</a>
            <a href="#reseñas" class="btnReseñas">RESEÑA</a>
            <a href="catalogo.php">CATÁLOGO</a>
            <a href="sobrenosotros.html">SOBRE NOSOTROS</a>
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
            <a href="sobrenosotros.html">SOBRE NOSOTROS</a>
            <a class="nombreusuario" href="perfil.php"> <?php echo $_SESSION['usuario'] ?></a>
        </div>
        <button class="iconoMenu"><img src="../imagenes/menu.png" alt="" ></button>
        
    </div>
<!-- Cambiar -->
 <div class="novedades">
      <div class="filtro"></div>
    
    <p class="titulo_novedades">NOVEDADES</p>
    <!-- MIDNIGHTS -->
    <div>
    <img class="taylorIMG" src="https://www.lahiguera.net/musicalia/artistas/taylor_swift/disco/12415/taylor_swift_midnights-portada.jpg" alt="" >

    <p class="taylor1" >Midnights</p>
    
    <p class="taylor2" >Artista: Taylor Swift <br>
        Fecha de publicación: 21 de octubre de 2022 <br>
        Géneros: bedroom pop, Dream pop, Synth pop, Electropop <br>
        </p>
    </div>
    
    <!-- HARRY'S HOUSE -->
    
        <img class="harryIMG" src="https://m.media-amazon.com/images/I/61ur3nQ+-mL._UF894,1000_QL80_.jpg" alt="" >

        <p class="harry1" >Harry's House</p>
    
        <p class="harry2" >Publicación	20 de mayo de 2022 <br>
        Grabación	2020-2021<br>
        Género(s)	
        pop rockR&Bsynth pop
        </p>
  
      
    <!-- OTRA ORBITA -->
    <img class="orbitaIMG" src="https://i.scdn.co/image/ab67616d0000b273a40a5e1276f4e5d22377ede2" alt="" >

    <p class="orbita1" >Otra orbita</p>
    
    <p class="orbita2" >Artista: Mario Bautista <br>
        Discográfica: Warner Music México  <br>
        Fecha de publicación: 29 de junio de 2018 <br>
        Géneros: Urbano latino, Pop <br>
        </p>
    <!-- Mañana será bonito -->
        <img class="mañanaIMG" src="https://images.genius.com/a362a7bb16f1e3a8aa70dce057750241.640x640x1.jpg" alt="" >
    
        <p class="mañana1" >Mañana será bonito</p>
        
        <p class="mañana2" >
            Artista: Karol G <br>
                Fecha de publicación: 24 de febrero de 2023
            </p>
</div>

<div class="Convenios" style="position: relative; top:17vh; background-color:rgb(236, 236, 236);">
    <p>TENEMOS CONVENIOS <br><p >CON:</p></p>
    <img src="../imagenes/MarcasConvenio1.PNG" alt="">
    <img src="../imagenes/MarcasConvenio4.PNG" alt="">
    
</div>

<div class="espacio-audifonos" style="background-color: rgb(227,203,170);">
    <img src="../imagenes/audifono-beige.PNG" alt="" class="audifonos">
    <img src="../imagenes/texto-beige.PNG" alt="" class="audifonosText">
    <button class="boton-pedir-audifonos">Pedir ahora</button>
</div>
<div class="reseñas" style="z-index: 3;" id="reseñas">
    <div class="btnIzquierda" >
        <img src="../imagenes/left-arrow.png" alt="" style="width: 50px; z-index: 10; position: relative;">    
    </div>

    <div class="slider-screen">
        <img name="Imagen"  id="Imagen" class="inicial" src="" >
    </div>

    <div class="Puntitos">
        <img src="../imagenes/PuntoMarcado.png" alt="" name="Punto1" >
        <img src="../imagenes/PuntoVacio.png" alt="" name="Punto2" >
        <img src="../imagenes/PuntoVacio.png" alt="" name="Punto3" >
    </div>

    <div class="btnDerecho">
        <img src="../imagenes/right-arrow.png" alt="" style="width: 50px; z-index: 10; position: relative;">
    </div>
</div>
<!-- Cambiar -->
<div class="espacio-x">
</div>
<!-- Cambiar -->
<div class="MandarMail">
    <p class="mensajito">Mantente conentado</p>
    <p class="tituloMail"  >Email*</p>
     <form action="">
        <input type="email"  class="textoMail"  required  >
        <button class="suscribirse">Suscribirse</button>
    </form>
</div>




<script src="../js/index2.js"> 
</script>
</body>
</html>