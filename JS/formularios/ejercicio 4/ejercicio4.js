window.onload = function() {

    let boton = document.getElementById("boton");

boton.addEventListener("click", function () {
    let cantidad = parseFloat(document.getElementById("cantidad").value);
    let opcion = document.getElementById("seleccion").value;
    let resultado = document.getElementById("resultado");
    let resultadoCantidad = 0;
    if(opcion === "DolarEuro"){
        resultadoCantidad = (cantidad * 0.83)+" €";
    }else if(opcion === "EuroDolar"){
        resultadoCantidad = cantidad / 0.83 +" $";
    }
    resultado.value = resultadoCantidad;
});

}