//Crea una función que reciba un array de valores enteros (positivos y negativos), y devuelve otro array con la suma parcial de cada elemento del array que se pasa como parametro.
/*NOTA: La suma parcial de un elemento del array será la suma de ese elemento y todos los anteriores a él.
Ej: Para el array [1,2,3,4,5,6], el array resultante será [1,3,6,10,15,21]*/

function calcular(){
    let elem = document.getElementById("resultado");
    let array = [1,2,3,4,5,6];
    let suma = 0;
    let arraySuma = [];
    array.forEach(function(elemento,indice,array){
        suma +=elemento;
        arraySuma.push(suma);
    });
    elem.innerHTML = arraySuma;
}


/*Crea una función llamada countBY la cual recibirá dos números enteros positivos: X e Y. Esta función debe devolver lo siguiente:
- Si alguno de los dos números es negativo devolerá un array vacío.
- Si no, devolverá con array con los N primeros multi`plos de X empezando por el 1 (incluido)
*/

function countBy() {
    let numx = prompt("Dame un numero");
    let numy = prompt("Dame otro numero");
    let array = [];
    if ((numx || numy) < 0) {
        array = [];
        return  document.getElementById("resultado").innerHTML = array;
    }
    for (i = 1; i <= numy; i++) {
        array.push(i * numx);
    }
    document.getElementById("resultado").innerHTML = array;
}


/*Crea un script que pida al usuario un numero entero positivo N mayor que 2. Hay que controlar que el numero introducido sea correcto. Si no es así se volverá a pedir. A continuación debe crearse una matriz NxN rellena con los resultados de la tabla de multiplicar de N(empezando en 1)
Finalmente, muestra por consola la matriz "en forma de matriz"
Ej: Para el número 3, el programa debe mostrar
3  6  9
12 15 18
21 24 27
*/

function pedirNumero(){
    do{
        filas = prompt("Dime número A ");
        filas = Number(filas);
        if (isNanN(filas)||(filas < 2)){
            alert("Los números introducidos no son válidos")
        }
    } while (isNaN(filas)|| filas < 2);

    var returnedArray = [];
    for (var i = 0; i < filas; i++){
        returnedArray[i] = new Array (filas);
        for(var j = 0; j < filas; j++){
            returnedArray[i][j]=(filas*(i+1))*(j+1);
        }
    }
    console.log(returnedArray);
    
    for (i = 0; i < num; i++) {
        matriz[i] = [];
        let filaNueva = ' ';
        for (j = 0; j < num; j++) {
            matriz[i][j] = random(1,99);
            suma += matriz[i][j];
            if(matriz[i][j] < 10){
                filaNueva +='0' + matriz[i][j] + ' ';
            }else{
                filaNueva +=matriz[i][j] + ' ';
            }
        }
        console.log(filaNueva);
    }
}