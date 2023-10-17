function Sumar(){
    let a = prompt("Dime número A: ");
    let b = prompt("Dime número B: ");

    a = Number(a);
    b = Number(b);

    if (isNaN(a)||isNaN(b)){
        alert("No es un número");
    }

    alert("La suma es: " + (a+b));
}

var func = new Function("a", "b", "return a * b");
var resultado = func(10,10);

function miConcatenador(separator){
    var result = ""; //lista
    var i;
    //itera a traves de arguments
    for (i = 1; i < arguments.length; i++){
        result += arguments[i]+separator;
    }
    console.log(result);
    return result;
}
//Devuelve "red, orange, blue"
miConcatenador(",","red","orange","blue");