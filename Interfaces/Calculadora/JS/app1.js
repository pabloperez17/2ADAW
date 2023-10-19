function Sumar(){
    console.log("aplicación calculador. Suma");
    const formu = document.getElementById("formulario");

    let opA = formu['operandoA'];
    let opB = formu['operandoB'];

    let resultado = parseInt(opA.value) + parseInt(opB.value);

    if (isNaN(resultado)){
        document.getElementById('resultado').innerHTML = "Datos introducidos no son correctos"
    } else {
        document.getElementById('resultado').innerHTML = `El resultado es: ${resultado}`
    }
}