let enlace1 = document.getElementsByTagName("a")[0]; //primer a
let enlace2 = document.getElementsByTagName("a")[1]; //segundo a


enlace1.addEventListener("mouseover", function(){ //cuando el raton entre del primer a 
    let nuevodiv = document.createElement('div'); //creamos un div y lo metemos en la variable nuevodiv
    nuevodiv.className = "uno"; //a nuevodiv le ponemos la clase uno
    let textodiv = document.createTextNode("La URL de este enlace es: https://getbootstrap.com/"); //creamos un contenido de texto y lo metemos en la variable textodiv
    nuevodiv.appendChild(textodiv); //metemos el texto en el div
    document.body.appendChild(nuevodiv); //metemos el div en el body
});

enlace1.addEventListener("mouseleave", function(){ //cuando el raton salga del primer a 
    eliminarDiv(); //se llama a la funcion eliminar div
});

enlace2.addEventListener("mouseover", function(){ //cuando el raton entre del segundo a
    let nuevodiv2 = document.createElement('div'); //creamos un div y lo metemos en la variable nuevodiv2
    nuevodiv2.className = "uno"; //a nuevodiv2 le ponemos la clase uno
    let textodiv2 = document.createTextNode("La URL de este enlace es: https://github.com/"); //creamos un contenido de texto y lo metemos en la variable textodiv2
    nuevodiv2.appendChild(textodiv2); //metemos el texto en el div
    document.body.appendChild(nuevodiv2); //metemos el div en el body
});

enlace2.addEventListener("mouseleave", function(){ //cuando el raton salga del segundo a 
    eliminarDiv(); //se llama a la funcion eliminar div
});

function eliminarDiv(){ //funcion eliminar div
    document.body.removeChild(document.querySelector("div")) //nos vamos al body y eliminamos el div
}