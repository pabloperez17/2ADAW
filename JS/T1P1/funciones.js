function ejercicio1(){
    let g
    let kg
    do {
        g = prompt("Introduce un peso en gramos");
    } while (g <= 0 || isNaN(g));
    kg = parseInt(g) * 0.001;

    alert(g+ "gramos es equivalente a "+kg+ "kilogramos");
}

function ejercicio2(){
    let num1
    do {
        num1 = prompt("Dame un numero entero mayor que 0");
    } while (num1 <= 0 || isNaN(num1));

    let num2
    do {
        num2 = prompt("Dame un numero entero mayor que 0");
    } while (num2 <= 0 || isNaN(num2));

    let num3
    do {
        num3 = prompt("Dame un numero entero mayor que 0");
    } while (num3 <= 0 || isNaN(num3));

    let num4
    do {
        num4 = prompt("Dame un numero entero mayor que 0");
    } while (num4 <= 0 || isNaN(num4));

    let num5
    do {
        num5 = prompt("Dame un numero entero mayor que 0");
    } while (num5 <= 0 || isNaN(num5));

    let num6
    do {
        num6 = prompt("Dame un numero entero mayor que 0");
    } while (num6 <= 0 || isNaN(num6));

    let num7
    do {
        num7 = prompt("Dame un numero entero mayor que 0");
    } while (num7 <= 0 || isNaN(num7));

    let num8
    do {
        num8 = prompt("Dame un numero entero mayor que 0");
    } while (num8 <= 0 || isNaN(num8));

    let num9
    do {
        num9 = prompt("Dame un numero entero mayor que 0");
    } while (num9 <= 0 || isNaN(num9));

    let num10
    do {
        num10 = prompt("Dame un numero entero mayor que 0");
    } while (num10 <= 0 || isNaN(num10));

    let suma;
    let media;
    let doblemedia;
    suma = (parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4) + parseInt(num5) + parseInt(num6) + parseInt(num7) + parseInt(num8) + parseInt(num9) + parseInt(num10));
    media = suma/10;
    doblemedia = media * media;

    alert("La media es: "+media);

}

function ejercicio3(){
    let num;
    let array;
    let suma;
    let media;
    do {
        num = prompt("Dame un numero entre 5 y 10");
    } while ((num < 5 || num >10) || isNaN(num));

        array = [];
        for (i = 0; i < num; i++) {
            array[i] = (Math.floor(Math.random()*10)*num);
            suma += [i];
        }
        console.log(array);
        media = suma/num;
        console.log(parseInt(media));
}

function ejercicio4(){
    matriz = []
    let n1;
    let suma = 0
    do{
        n1 = prompt("Dame un numero entre 2 y 5")
    }while((n1 < 2 || n1 > 5) || isNaN(n1))

    let cont = 0;
    for (i = 0; i < n1; i++) {
        matriz[i] = []
        let siguiente_fila = " ";
        for(j = 0; j < n1; j++){
            matriz[i][j] = (Math.floor(Math.random()*100));
            suma += matriz[i][j];
            cont++
            if (matriz[i][j] < 10){
                siguiente_fila += "0" + matriz[i][j] + " ";
            }else{
                siguiente_fila += matriz[i][j];
            }
        }
        console.log(siguiente_fila);
    }
    console.log(matriz);
    console.log("la suma es: " + suma);
    let media;
    media = suma / cont;
    console.log("La media es: " + media);
}

