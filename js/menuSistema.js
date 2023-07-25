var btnMenu = document.querySelector(".iconoMenu");
var menuInvisible = document.querySelector(".menuInvisible");
var reseñasLink= document.querySelector(".btnReseñas");
var cerrarMenu= document.querySelector(".iconoCerrar");

reseñasLink.addEventListener("click", function(){
    document.querySelector(".menu").className="menuInvisible";
})

//Activar Menu
btnMenu.addEventListener("click", function(){
    menuInvisible.className="menu";
})

// Desactivar Menu
cerrarMenu.addEventListener("click", function(){
    document.querySelector(".menu").className="menuInvisible";
})