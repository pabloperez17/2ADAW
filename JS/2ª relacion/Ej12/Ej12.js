let div = document.getElementsByTagName("div")[0];

document.getElementsByTagName("input")[0].addEventListener("click",function(){
    let posicion_izquierda = window.getComputedStyle(div).left;
    let valor = parseInt(posicion_izquierda) + 50;

    if (valor + div.offsetWidth <= window.innerWidth ){
        div.style.left = valor + "px";
    } else {
        div.style.left = window.innerWidth - div.offsetWidth - 5;
        document.getElementsByTagName("input")[0].disabled = true
    } 

});

document.getElementsByTagName("input")[1].addEventListener("click",function(){
    let posicion_derecha = window.getComputedStyle(div).left;
    let valor = parseInt(posicion_derecha) - 5;
    if (valor >= 0){
        div.style.left = valor + "px";
    }
});
