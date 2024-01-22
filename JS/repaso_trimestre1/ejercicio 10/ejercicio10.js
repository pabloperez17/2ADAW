document.querySelector("input").addEventListener("click", function () {

    let numero;
    let array1 = [];
    let array2 = [];
    let array_res = [];
    do {
        numero = prompt("Introduzca numeros. Cuando haya terminado escriba *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduzca valores")
            }
            else {
                array1.push(parseInt(numero));
            }

        }

    } while (numero != "*");
    console.log("Array 1: " + array1);
    do {
        numero = prompt("Introduzca numeros. Cuando haya terminado escriba *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduzca valores")
            }
            else {
                array2.push(parseInt(numero));
            }

        }

    } while (numero != "*");
    console.log("Array 2: " + array2);

    array_res = array1.concat(array2)
    console.log("El array conjunto es: " + array_res);

    array_final = [];
    let contador = 0;

    for (let i = 0; i < array_res.length; i++) {
        for (let j = 0; j < array_res.length; j++) {
            if (array_res[i] == array_res[j]) {
                contador++;
            }
        }
        if (contador == 1) {
            array_final.push(array_res[i]);
        }
        contador = 0;
    }
    console.log("El array final es: " + array_final);
})