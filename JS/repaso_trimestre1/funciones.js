let boton_ej1 = document.querySelectorAll("input")[0];
let boton_ej2 = document.querySelectorAll("input")[1];
let boton_ej3 = document.querySelectorAll("input")[2];
let boton_ej4 = document.querySelectorAll("input")[3];

boton_ej1.addEventListener("click", function(){
    let g
    let kg
    do {
       g = prompt("Introduce un peso en gramos");
    } while (g <= 0 || isNaN(g));
    kg = parseInt(g) * 0.001;

    alert(g+ " gramos es equivalente a "+kg+ " kilogramos");
})

boton_ej2.addEventListener("click", function(){
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
    let supera_media = "";
    let doblemedia;
    let supera_doble_media = "";
    suma = (parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4) + parseInt(num5) + parseInt(num6) + parseInt(num7) + parseInt(num8) + parseInt(num9) + parseInt(num10));
    media = suma/10;
    doblemedia = parseInt(media * 2);

    if(num1 > media){
        supera_media = num1 + ", ";
        if(num1 > doblemedia){
            supera_doble_media = num1 + ", ";
        }
    }

    if(num2 > media){
        supera_media += num2 + ", ";
        if(num2 > doblemedia){
            supera_doble_media += num2 + ", ";
        }
    }

    if(num3 > media){
        supera_media += num3 + ", ";
        if(num3 > doblemedia){
            supera_doble_media += num3 + ", ";
        }
    }

    if(num4 > media){
        supera_media += num4 + ", ";
        if(num4 > doblemedia){
            supera_doble_media += num4 + ", ";
        }
    }

    if(num5 > media){
        supera_media += num5 + ", ";
        if(num5 > doblemedia){
            supera_doble_media += num5 + ", ";
        }
    }

    if(num6 > media){
        supera_media += num6 + ", ";
        if(num6 > doblemedia){
            supera_doble_media += num6 + ", ";
        }
    }

    if(num7 > media){
        supera_media += num7 + ", ";
        if(num7 > doblemedia){
            supera_doble_media += num7 + ", ";
        }
    }

    if(num8 > media){
        supera_media += num8 + ", ";
        if(num8 > doblemedia){
            supera_doble_media += num8 + ", ";
        }
    }

    if(num9 > media){
        supera_media += num9 + ", ";
        if(num9 > doblemedia){
            supera_doble_media += num9 + ", ";
        }
    }

    if(num10 > media){
        supera_media += num10;
        if(num10 > doblemedia){
            supera_doble_media += num10;
        }
    }

    console.log(doblemedia)
    console.log(supera_doble_media)
    alert("La media es: "+media+". Superan la media: "+supera_media+". Supera el doble de la media: "+supera_doble_media);
})

boton_ej3.addEventListener("click", function(){
    let num;
    let array = [];
    let suma = 0;
    let media;
    let mayor_media = " ";
    do {
        num = prompt("Dame un numero entre 5 y 10");
    } while ((num < 5 || num >10) || isNaN(num));

    for (i = 0; i < num; i++) {
        array[i] = (Math.floor(Math.random()*10)*num);
        suma += parseInt(array[i]);
    }
    console.log(suma)
    console.log(array);
    media = suma/num;
    console.log(media)
    for (i = 0; i < array.length; i++) {
        if(array[i]> media){
            mayor_media += array[i] + ", ";
        }
    }
    console.log(mayor_media)
})

boton_ej4.addEventListener("click", function(){
    
    let matriz = []
    let media;
    let suma = 0;

    do{
        n1 = prompt("Dame un numero entre 2 y 5")
    }while((n1 < 2 || n1 > 5) || isNaN(n1))

    for (i = 0; i < n1; i++) {
        matriz[i] = []
        let fila_nueva = " "
        for(j = 0; j < n1; j++){
            matriz[i][j] = (Math.floor(Math.random()*100));
            suma += matriz[i][j];
            media = suma/(n1*n1)
            if(matriz[i][j] < 10){
                fila_nueva += "0"+matriz[i][j]+ " ";
            }else{
                fila_nueva += matriz[i][j]+ " ";
            }
        }
        console.log(fila_nueva)
    }
    console.log("La suma es: " + suma);
    console.log("La media es: " + media);

    let resultado = [[],[]];
    for (let i = 0; i < n1; i++) {
        for (let j = 0; j < n1; j++) {
            if(matriz[i][j] > media){
                resultado[0].push(matriz[i][j])
            } else {
                resultado[1].push(matriz[i][j])
            }
        }
        
    }
    console.log(resultado)

    for (let i = 0; i < resultado.length; i++) {
        fila_nueva = " ";
        for (let j = 0; j < resultado[i].length; j++) {
            if(resultado[i][j] < 10){
                fila_nueva += "0"+resultado[i][j]+ " ";
            }else{
                fila_nueva += resultado[i][j]+ " ";
            }
        }
        console.log(fila_nueva)
    }
    
    do {
        orden = parseInt(prompt("0 (ascendente) o 1 (descendente)"));
        if (orden < 0 || orden > 1 || isNaN(orden)) {
            alert("0 o 1");
        }
    }while (orden < 0 || orden > 1 || isNaN(orden));

    if (orden == 0) {
        resultado[0].sort(function (a, b) { return a - b });
        resultado[1].sort(function (a, b) { return a - b });
    } else {
        resultado[0].sort(function (a, b) { return b - a });
        resultado[1].sort(function (a, b) { return b - a });
    }
    console.log("Orden");
    for (let i = 0; i < resultado.length; i++) {
        console.log(resultado[i].join(" "));
    }
})