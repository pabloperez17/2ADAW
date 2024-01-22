//Ejercicio 4
function eje4() {
    let seguir_comprando;
    let cesta = "";
    let contador = 0;
    let suma = "";

    do {
        let producto = prompt("Dime el nombre del producto");
        cesta += producto + " ";
        contador++;

        let num;
        do {
            num = prompt("Dime el precio del producto");
        } while (isNaN(num) || num < 0);
        cesta += num + " \n";
        //ha faltado parsear el numero antes de sumarlo para que no sume cadenas
        suma = (suma + num);

        do{
            seguir_comprando = prompt("Desea seguir comprando");
            seguir_comprando = seguir_comprando.toLowerCase();
        }while(seguir_comprando != "s" && seguir_comprando != "n")

    } while (seguir_comprando != "n");

    console.log(contador);
    console.log(cesta);
    console.log(suma);
}
//----------------------------------------------------------------------------------

//Ejercicio 5
function eje5() {
    array = [];
    for (let i = 0; i < 10; i++) {
        array[i] = Math.floor(Math.random() * (50 - 2 + 1) + 2);
    }
    let numero;
    //ha fsltsdo hacer un join 
    console.log(array + " ");

    //Apartado 3
    do {
        numero = prompt("Dime un numero");
    } while (isNaN(numero) || numero < 0 || numero > 10);

    esta_numero = false;
    for (let i = 0; i < array.length; i++) {
        if (array[i] == numero) {
            console.log("El número " + numero + " si esta en el array");
            esta_numero = true;
        }
    }
    if (esta_numero == false) {
        console.log("El número " + numero + " no esta en el array");
    }

    //Apartado 4
    let num_max = 0;
    let num_min = 100;
    for (let i = 0; i < array.length; i++) {
        if (array[i] > num_max) {
            num_max = array[i];
        }
        if (array[i] < num_min) {
            num_min = array[i];
        }
    }
    console.log("El valor máximo del array es " + num_max + " y el valor minimo es " + num_min);

    //Apartado 5
    let copia = [];
    for (let i = 0; i < array.length; i++) {
        if (array[i] > 40) {
            copia[i] = 7;
        } else {
            copia[i] = array[i];
        }
    }
    console.log(copia + " ");
}
//----------------------------------------------------------------------------------
