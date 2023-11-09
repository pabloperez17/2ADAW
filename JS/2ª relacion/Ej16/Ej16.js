let descarga = document.getElementsByTagName("input")[0];
let barra_descarga = document.getElementsByTagName("meter")[0];
let carga = document.getElementsByTagName("input")[1];
let barra_carga = document.getElementsByTagName("progress")[0];
let intervalo; 

descarga.addEventListener("click", function(){
    intervalo = setInterval("cargar_barra_descarga()", 200);
    
});

carga.addEventListener("click", function(){
    intervalo = setInterval("cargar_barra_carga()", 200);
});

function random(min, max) {
    return Math.random() * (max - min) + min;
}

function cargar_barra_descarga(){
    let barra_estado = barra_descarga.getAttribute("value");
    console.log(barra_estado);
    barra_descarga.setAttribute("value" , parseInt(barra_estado) + parseInt(random(2,5)));
    console.log(barra_estado);
    if(parseInt(barra_descarga.getAttribute("value")) > 100){
        clearInterval(intervalo);
    }
}

function cargar_barra_carga(){
    let barra_estado_carga = barra_carga.getAttribute("value");
    console.log(barra_estado_carga);
    barra_carga.setAttribute("value" , parseInt(barra_estado_carga) + parseInt(random(2,5)));
    console.log(barra_estado_carga);
    if(parseInt(barra_carga.getAttribute("value")) > 100){
        clearInterval(intervalo);
    }
}