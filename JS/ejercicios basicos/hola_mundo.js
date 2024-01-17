var nombre = null;
let a = 2;
let b = '3';
let hora = 10;
console.log(typeof nombre);
console.log(typeof a);

let ok = true;
console.log(typeof ok);
// en JavaScript podemos definir una variable sin la palabra reservada var, let o const
//var está obsoleto y lo que se utiliza es let y const para definir una variable
console.log(a + nombre);

let simbolo = Symbol("mi simbolo");
console.log(typeof simbolo);

if (a >= 18){
    console.log("Persona adulta");
}else{
    console.log("Persona no adulta");
}

/*EJERCICIOS DE PRÁCTICA*/
if (hora <= 12){
    console.log("Buenos dias. Son las "+ hora);
}else if (hora > 12 && hora <= 20){
    console.log("Buenas tardes. Son las "+ hora);
}else {
    console.log("Buenas noches. Son las "+ hora);
}
//para llamar a Quokka presionamos ctrl + shift + P

if (a % 2 == 0){
    console.log("El "+a+" es par");
}else{
    console.log("El "+a+" es impar");
}

let resultado = (a % 2 == 0) ? "El "+a+" es par" : "El "+a+" esimpar";
console.log(resultado);

if (isNaN(a)){
    console.log("no es un número");
}else{
    console.log("es un número");
}

//WHILE
let contador = 0;
while (contador < 3){
    console.log(contador);
    contador++;
}

//DO WHILE
let cont = 0;
do{
    console.log(cont);
    cont++;
}while(cont < 4);

//FOR
for (cont = 0; cont < 3; cont++){
    console.log(cont);
}

//INCREMENTO
//PRE-INCREMENTO (el operador ++ antes de la variable)
z = a++;
console.log(a);
console.log(z);

//POST-INCREMENTO (el operador ++ despues de la variable)
z = b++;
console.log(b);
console.log(z);

//DECREMENTO
//Predecremento
z = --a;
console.log(a);
console.log(z);

//Postdecremento
z = b--;
console.log(b);
console.log(z);

let c = 1;

c += 3; //c = c + 3
console.log(c);

c -= 2 // c = c - 2
console.log(c);

let xx = 5;
let yy = 10;
let zz = ++xx + yy--;
console.log(xx);
console.log(yy);
console.log(zz);

let result = 4 + 5 * 6 /3;
console.log(result);

resultadoo = (4 + 5)* 6 / 3;
console.log(resultadoo);

//SWITCH
let mes = 11;
let estacion = "desconocida";
switch(mes){
    case 1: case 2: case 3:
        estacion = "invierno";
        break;
    case 4: case 5: case 6:
        estacion = "primavera"
        break;
    case 7: case 8: case 9:
        estacion = "verano"
        break;
    case 10: case 11: case 12:
        estacion = "otoño"
        break;
    default:
        estacion = "Valor incorrecto";
}
console.log ("La estación es: "+estacion);

for(let contador = 0; contador <= 10; contador++){
    if (contador % 2 !== 0){
        console.log(contador);
        break; //termina la ejecución del ciclo por completo
    }
}

let objeto = {
    nombre: "Pablo",
    apellido : "Pérez",
}

//ARRAY
let marcaCoches = ['BMW','Audi','Renault','Ford'];
console.log(typeof marcaCoches);

//Definimos una clase
class Persona{
    constructor(nombre,apellido){
        this.nombre = nombre;
        this.apellido = apellido;
    }
}
console.log(Persona);
console.log(typeof Persona);

console.log(typeof objeto);


function Saludar(){
    console.log("Saludos desde la función.")
}
xx = 9;
yy = 10;
//Tipo de dato funcion
function miFuncion(xx,yy){
    console.log("Suma: "+ (xx+yy));
}
console.log(typeof miFuncion);

miFuncion(xx,yy);

//Funcion random
function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}