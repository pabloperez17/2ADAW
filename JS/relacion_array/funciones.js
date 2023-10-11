//Ejercicio 1
function alert_desde_funcion() {
    alert("Alert desde una funcion en un archivo a parte");
}

//Ejercicio 4
function saludar() {
    let nom;
    nom = prompt("Hola, ¿Cual es tu nombre?");
    alert("Bienveni@ a mi página " + nom);
}

//Ejercicio 5
function pedir_valores() {
    let num1;
    let num2;
    num1 = prompt("Dame un numero");
    num2 = prompt("Dame otro numero");
    suma = alert("La suma es: " + (parseInt(num1) + parseInt(num2)));
    resta = alert("La resta es: " + (num1 - num2));
    multiplicacion = alert("La multiplicacion es: " + (num1 * num2));
    division = alert("La division es: " + (num1 / num2));
    resto = alert("El resto es: " + (num1 % num2));
}

//Ejercicio 6
function pedir_num() {
    let num = 0;
    let cuadrado = 0;
    let res = 0;
    do {
        num = prompt("Dime un numero entero mayor que 0");
    } while (num <= 0 || isNaN(num));

    for (i = 1; i <= parseInt(num); i++) {
        if (parseInt(num) % i == 0) {
            console.log("El numero: " + i + " es divisor de " + num);
            cuadrado = i ** 2;
            console.log(i + " elevado a 2 es: " + cuadrado);
            res += cuadrado;
        }
    }
    console.log("La suma de los cuadrados es: " + res);
    if (res % 2 == 0) {
        alert(res + " es un cuadrado");
    } else {
        alert(res + " no es un cuadrado")
    }
}

//Ejercicio 7 
function ejercicio7() {
    var array_valores = [];
    var array_final = [];
    var numero;
    do {
        numero = prompt("Introduzca numeros. Cuando haya acabado escriba *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduce valores por favor")
            }
            else { 
                array_valores.push(parseInt(numero)); 
            }

        }
    } while (numero != "*");

    for (i = 0; i < array_valores.length; i++) {
        if (i == 0) {
            array_final.push(array_valores[i]);
        } else {
            array_final.push(array_final[i - 1] + array_valores[i]);
        }
    }
    console.log("Para el array " + array_valores + " , el array resultante sera : " + array_final);

}

//Ejercicio 8
function countBy() {
    let numX;
    let numY;
    numX = prompt("Dame un numero positivo");
    numY = prompt("Dame un numero positivo");
    if (isNaN(numX) || isNaN(numY)) {
        alert("No estas poniendo numeros validos");
    }
    parseInt(numX);
    parseInt(numY);
    let array = [];
    if (numX <= 0 || numY <= 0) {
        array = [];
    } else {
        for (i = 1; i <= numY; i++) {
            array.push(numX * i);
        }
    }
    console.log(array);
}

//Ejercicio 9
function ejercicio9() {
    let num;
    let array1 = [];
    let cont = 1;
   
    do {
        num = prompt("Dime un numero positivo mayor que dos");
        parseInt(num);
    } while (num <= 2 || isNaN(num));
    for (i = 0; i < num; i++) {
        array1[i] = []
        for(j=0;j< num;j++){
            array1[i][j] = num*cont;
            cont++;
        }
    }
    console.log(array1);
}

//Ejercicio 10
function ejercicio10() {
    var array1 = [];
    var array2 = [];
    var array3 = [];
    var array_final = [];
    var numero;
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

    array3 = array1.concat(array2);
    console.log("Este es el array junto: " + array3);

    let cont = 0;
    do {
        let repetido = false
        let numero = array3[cont];
        for (let i = array3.indexOf(numero) + 1; i < array3.length; i++) {
            if (numero == array3[i]) {
                repetido = true;
                break;
            }
        }
        if (!repetido){
            array_final.push(numero);
        }
        cont++;
    } while (cont < array3.length);

    console.log(array_final);
}