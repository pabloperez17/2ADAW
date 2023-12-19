window.onload = function(){

    let boton = document.querySelectorAll("input[type='submit']")[0];
    let caja = document.querySelectorAll("input[type='textarea']")[0];
    boton.onclick = function(){
        
    caja.value = " "
        let cuadraditos = document.querySelectorAll("input[type='checkbox']");
        
        if(cuadraditos[0].checked){
            caja.value += " Futbol";
        }

        if(cuadraditos[1].checked){
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
}