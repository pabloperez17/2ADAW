let enlace1 = document.getElementsByTagName("a")[0];
let enlace2 = document.getElementsByTagName("a")[1];


enlace1.addEventListener("mouseover", function(){
    let nuevodiv = document.createElement('div');
    nuevodiv.className = "uno";
    let textodiv = document.createTextNode("La URL de este enlace es: https://getbootstrap.com/");
    nuevodiv.appendChild(textodiv);
    document.body.appendChild(nuevodiv);
});

enlace1.addEventListener("mouseleave", function(){
    eliminarDiv();
});

enlace2.addEventListener("mouseover", function(){
    let nuevodiv2 = document.createElement('div');
    nuevodiv2.className = "uno";
    let textodiv2 = document.createTextNode("La URL de este enlace es: https://github.com/");
    nuevodiv2.appendChild(textodiv2);
    document.body.appendChild(nuevodiv2);
});

enlace2.addEventListener("mouseleave", function(){
    eliminarDiv();
});

function eliminarDiv(){
    document.body.removeChild(document.querySelector("div"))
}