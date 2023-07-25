var imagenes = [
    "Reseña1.PNG","Reseña2.PNG","Reseña3.PNG",
]

document.Imagen.src = imagenes[0];



var SliderDerecha = document.querySelector(".btnDerecho");
var SliderIzquierdo = document.querySelector(".btnIzquierda");
var screen= document.querySelector(".slider-screen");
var carrito= document.querySelector(".carrito");
var iconoOcultar = document.querySelector(".iconoOcultar");
var enlaceReseña = document.querySelector(".btnReseñas");
var inicio = document.querySelector(".btninicio");
var Contador = 0;
var btnMenu = document.querySelector(".iconoMenu");
var menu = document.querySelector(".menuInvisible");

btnMenu.addEventListener("click", function(){
    MostrarMenu()
})

// Activador carrito
function MostrarMenu(){
    document.querySelector(".menuInvisible").className="menu";
}

carrito.addEventListener("click", function(){
    MostrarCarrito()
})


//Desactivador Carrito
function OcultarCarrito(){
    document.querySelector(".SeccionCarritoVisible").className="SeccionCarrito";
    
    
}





function MoverDerecha(){
    clearInterval(Intervalo);
    Intervalo=setInterval(MoverDerecha, 3000);
    if(document.Imagen.className == "secundaria"){
        document.Imagen.className= "inicial";
        
    }
    else{
        document.Imagen.className= "secundaria";
    }
    
    Contador++;
    if(Contador > imagenes.length - 1){
        Contador=0;
    }
    document.Imagen.src = imagenes[Contador];
    if(Contador == 0){
        document.Punto1.src = "PuntoMarcado.png";
        document.Punto2.src = "PuntoVacio.png";
        document.Punto3.src = "PuntoVacio.png";
    }else{
        if(Contador == 1){
            document.Punto2.src = "PuntoMarcado.png";
            document.Punto1.src = "PuntoVacio.png";
        document.Punto3.src = "PuntoVacio.png";
        }
        else{
            if(Contador == 2){
                document.Punto3.src = "PuntoMarcado.png";
                document.Punto2.src = "PuntoVacio.png";
        document.Punto1.src = "PuntoVacio.png";
            }
        }
    }
    
}
var Intervalo=setInterval(MoverDerecha, 3500);
SliderDerecha.addEventListener("click", function(){
    MoverDerecha();
   
})

function MoverIzquierda(){
    if(document.Imagen.className == "secundariaiz"){
        document.Imagen.className= "inicializ";
    }
    else{
        document.Imagen.className= "secundariaiz";
    }
    Contador--;
    if(Contador < 0){
        Contador = imagenes.length - 1
    }
    document.Imagen.src = imagenes[Contador];

    if(Contador == 0){
        document.Punto1.src = "PuntoMarcado.png";
        document.Punto2.src = "PuntoVacio.png";
        document.Punto3.src = "PuntoVacio.png";
    }else{
        if(Contador == 1){
            document.Punto2.src = "PuntoMarcado.png";
            document.Punto1.src = "PuntoVacio.png";
        document.Punto3.src = "PuntoVacio.png";
        }
        else{
            if(Contador == 2){
                document.Punto3.src = "PuntoMarcado.png";
                document.Punto2.src = "PuntoVacio.png";
        document.Punto1.src = "PuntoVacio.png";
            }
        }
    }
}

SliderIzquierdo.addEventListener("click", function(){
    clearInterval(Intervalo);
    MoverIzquierda();
    Intervalo=setInterval(MoverIzquierda, 3500);
});

screen.addEventListener("mouseover", function(){
    clearInterval(Intervalo)
   
        document.Imagen.className= "aniPaused"
    
})
screen.addEventListener("mouseout", function(){
    Intervalo=setInterval(MoverDerecha, 1000);
    
        document.Imagen.className= "aniRunning"
    
})
// Activador carrito
function MostrarCarrito(){
    document.querySelector(".SeccionCarrito").className="SeccionCarritoVisible";
}

carrito.addEventListener("click", function(){
    MostrarCarrito()
})


//Desactivador Carrito
function OcultarCarrito(){
    document.querySelector(".SeccionCarritoVisible").className="SeccionCarrito";
    
    
}




