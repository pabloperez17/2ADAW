function Sumar(){
    let comprobar = true;
    do{
        let a = prompt("Dime número A ");
        let b = prompt("Dime número B ");

        if (isNaN(a)||isNaN(b)){
            alert("No has metido un número ");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);
            alert("La suma es: " + (a + b));
            document.getElementById("resultado").innerHTML="La suma de "+a+" y "+b+ " es: "+(a+b);
            comprobar = true;
        }
    }while(comprobar == false)
}

function Restar(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");
        let b = prompt("Dime número B ");

        if (isNaN(a)||isNaN(b)){
            alert("No has metido un número ");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);
            alert("La resta es: " + (a - b));
            document.getElementById("resultado").innerHTML="La resta de "+a+" y "+b+ " es: "+(a-b);
            comprobar = true;
        }
    }while(comprobar == false)
}

function Multiplicar(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");
        let b = prompt("Dime número B ");

        if (isNaN(a)||isNaN(b)){
            alert("No has metido un número ");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);
            alert("La multiplicación es: " + (a * b));
            document.getElementById("resultado").innerHTML="La multiplicación de "+a+" y "+b+ " es: "+(a*b);
            comprobar = true;
        }
    }while(comprobar == false)
}

function Dividir(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");
        let b = prompt("Dime número B ");

        if (isNaN(a)||isNaN(b)){
            alert("No has metido un número ");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);
            alert("La división es: " + (a / b));
            document.getElementById("resultado").innerHTML="La división de "+a+" y "+b+ " es: "+(a/b);
            comprobar = true;
    }
    }while(comprobar == false)
}

function Pontencia(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");
        let b = prompt("Dime número B ");

        if (isNaN(a)||isNaN(b)){
            alert("No has metido un número ");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);
            alert("La potencia es: " + (a ** b));
            document.getElementById("resultado").innerHTML="La potencia de "+a+" y "+b+ " es: "+(a**b);
            comprobar = true;
        }
    }while(comprobar == false)
}

function Modulo(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");
        let b = prompt("Dime número B ");

    if (isNaN(a)||isNaN(b)){
        alert("No has metido un número ");
        comprobar = false;
    } else {
        a = Number(a);
        b = Number(b);
        alert("El módulo es: " + (a % b));
        document.getElementById("resultado").innerHTML="El modulo de "+a+" y "+b+ " es: "+(a%b);
        comprobar = true;
    }
    }while(comprobar == false)
}

function Incremento(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");

    if (isNaN(a)){
        alert("No has metido un número ");
        comprobar = false;
    } else {
        a = Number(a);
        alert("El incremento es: " + (++a));
        document.getElementById("resultado").innerHTML="El incremento de "+a+ " es: "+(++a);
        comprobar = true;
    }
    }while(comprobar == false)
}

function Decremento(){
    comprobar = true;
    do{
        let a = prompt("Dime número A ");

        if (isNaN(a)){
            alert("No has metido un número ");
            comprobar = false;
        } else {
            a = Number(a);
            alert("El decremento es: " + (--a));
            document.getElementById("resultado").innerHTML="El decremento de "+a+" es: "+(--a);
            comprobar = true;
        }
    }while (comprobar == false)
}