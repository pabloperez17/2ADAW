window.onload;
    
function sumar(){
    let numero=document.querySelector("p");
    numero.textContent=parseInt(numero.textContent)+1;
}

function restar(){
    let numero=document.querySelector("p");
    numero.textContent=parseInt(numero.textContent)-1;
}