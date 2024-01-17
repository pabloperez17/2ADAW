let boton = document.querySelector("input");

boton.addEventListener("click", function(){
    let array_valores = [];
    let array_final = [];
    let numero;
    do {
        numero = prompt("Introduce numeros. Cuando termines escribe *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduce valores por favor")
            }
            else { 
                array_valores.push(parseInt(numero)); 
            }

        }
    } while (numero != "*");

    for (let i = 0; i < array_valores.length; i++) {
        if (i == 0) {
            array_final.push(array_valores[i]);
        } else {
            array_final.push(array_final[i - 1] + array_valores[i]);
        }
    }
    console.log("Para el array [" + array_valores + "], el array resultante sera : [" + array_final + "]");
})