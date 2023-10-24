/*
    Boton a1. un botón que pida al usuario la altura, la anchura y se la pone al boton
    Boton b1. añadir lo que diga el usuario 
    Boton 2 otro botón que cambie el border al que diga el usuario
    Boton 3 otro botón que cada vez que se pulse mueva la alineación de la tabla siguiendo el orden: der, izq, centro
    Boton 4 Creo 2 clases en css: pakita, chichio para la tabla. Botón para que al pulsarlo se alterne entre esas dos clases.
*/
let tabla = document.getElementsByClassName("pakita")[0];

function botona1(){
    let num1;
    let num2;
    do {
        num1 = prompt("Dime un numero entero mayor que 0");
    } while (num1 <= 0 || isNaN(num1));

    do {
        num2 = prompt("Dime un numero entero mayor que 0");
    } while (num2 <= 0 || isNaN(num2));

    tabla.setAttribute("width" , num1);
    tabla.setAttribute("height" , num2);
}

function botonb1(){
    do {
        num1 = parseInt(prompt("Dime un numero entero mayor que 0"));
    } while (num1 <= 0 || isNaN(num1));

    do {
        num2 = parseInt(prompt("Dime un numero entero mayor que 0"));
    } while (num2 <= 0 || isNaN(num2));

    let num3 = parseInt(tabla.setAttribute("width"));
    let num4 = parseInt(tabla.setAttribute("eight"));

    tabla.setAttribute("width" , (num1+num3));
    tabla.setAttribute("height" , (num2+num4));
}

function boton2(){
    let num1;
    do {
        num1 = parseInt(prompt("Dime un numero entero mayor que 0"));
    } while (num1 <= 0 || isNaN(num1));

    tabla.setAttribute("border" , num1);
}

function boton3(){
    if(tabla.getAttribute("align") == "left"){
        tabla.setAttribute("align" , "center");
    } else if (tabla.getAttribute("align") == "center"){
        tabla.setAttribute("align", "right");
    } else {
        tabla.setAttribute("align" , "left")
    }
}

function boton4(){
    if(tabla.getAttribute("class") == "pakita"){
        tabla.setAttribute("class" , "chichio");
    } else {
        tabla.setAttribute("class" , "pakita");
    }
}