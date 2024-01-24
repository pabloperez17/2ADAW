document.querySelectorAll("input")[0].addEventListener("click", function () { //cuando se pulse el boton 1
    let opciones = document.querySelector("select");
    if (opciones.value.toLowerCase() == "align") {
        let alineacion;
        do {
            alineacion = prompt("¿donde quieres el texto?")
        } while (alineacion != izquierda || alineacion != derecha || alineacion != centro)

        if (alineacion == izquierda) {
            document.querySelector("h1").style.setAttribute("text-align", "left")
        } else if (alineacion == derecha) {
            document.querySelector("h1").style.setAttribute("text-align", "right")
        } else {
            document.querySelector("h1").style.setAttribute("text-align", "center")
        }
    } else if (opciones.value.toLowercase() == "position") {
        let posicion;
        do {
            posicion = prompt("1 = top y 2= left")
        } while (posicion <= 0 || posicion > 2 || isNaN(posicion))

        if (parseInt(posicion) == 1) {
            document.querySelector("h1").style.setAttribute("text-align", "top")
        } else {
            document.querySelector("h1").style.setAttribute("text-align", "left")
        }

    } else {
        let tamaño;
        do {
            tamaño = prompt("¿que tamaño quieres de letra?")
        } while (tamaño <= 0 || isNaN(tamaño))

        document.querySelector("h1").style.setAttribute("font-size", tamaño)
    }

})