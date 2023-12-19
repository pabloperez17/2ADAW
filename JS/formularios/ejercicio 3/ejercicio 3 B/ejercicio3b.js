window.onload = function(){

    let caja = document.querySelectorAll("input[type='textarea']")[0];
    let cuadraditos = document.querySelectorAll("input[type='checkbox']");

    if(cuadraditos[0].onclick.checked){
        caja.value += " Futbol";
    }

    if(cuadraditos[1].onclick.checked){
        caja.value += " Baloncesto";
    }

    if(cuadraditos[2].checked){
        caja.value += " Tenis";
    }

    if(cuadraditos[3].checked){
        caja.value += " Padel";
    }

    if(cuadraditos[4].checked){
        caja.value += " Atletismo";
    }
}