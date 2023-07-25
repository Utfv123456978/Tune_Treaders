<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion ==''){
    $_SESSION['usuario']= 'INICIA SESION';
} 

 require '../vendor/autoload.php';
 MercadoPago\SDK::setAccessToken('TEST-2427886902661319-070915-ee42efdd4d02831069674e9eb2a5e25a-1050303894');
 $productos_mp=array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/8.css">
    <link rel="stylesheet" href="../estilos/carrito1.css">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
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
    <div class="cabecera"><p>Productos</p></div>
    <div class="panelCarrito"> 
        <?php 
                include("../conexion/conn.php");
                
                $query = "SELECT * FROM carrito";
                $resultado= $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                    
                 
        ?>
    
        
            
            <img  src="data:image/jpg;base64,<?php $img=($row['imagen']);  echo $img ?>" alt="">
            <p  class="datos" ><?php $nombre= $row['nombre']; echo $nombre  ?></p>
           
            <p  class="datos" style=" bottom:5.7vw;  left:33vw ;">$<?php $precio= $row['precio'];  echo $precio?>.00</p>

       
        
            <?php 
            
           
            $preference = new MercadoPago\Preference();
            
            $item = new MercadoPago\Item();
            $item->id='0001';
            $item->title= $nombre;
            $item->quantity= 1;
            $item->unit_price= $precio;
            $item->currency_id= "MXN";
            
           
    
            
            array_push($productos_mp, $item);
            unset($item);
           
        }?>
      
        <?php 
         $preference->items=$productos_mp;
         $preference->save();
        ?>
    </div>
    <div class="checkout-btn"></div>

 
    <script>
        const mp = new MercadoPago('TEST-0a4816a6-9924-4f29-a03d-85b8826c3b7d', {
            locale: 'es-MX'
        });

        mp.checkout({
            preference: {
                id: '<?php echo $preference->id;?>'
            },
            render: {
                container: '.checkout-btn', 
                label: 'Pagar Ahora'
            }
        });

    </script>
    
    <script src="../js/menuSistema.js"> 
</script>
</body>
</html>