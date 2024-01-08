window.onload = function() {

    let boton = document.getElementById("boton");

boton.addEventListener("click", function () {
    let palabra1 = document.querySelectorAll("input[type='text']")[0].value;
    let palabra2 = document.querySelectorAll("input[type='text']")[1].value;

    if (palabra1 == "" || palabra2 == "") {
        alert("No has introducido ninguna palabra");
        return;
    }
    palabra1 = palabra1.toUpperCase();
    palabra2 = palabra2.toUpperCase();
    
    //Corto las palabras y las ordeno
    let carPal1 = palabra1.split("").sort().join("");
    let carPal2 = palabra2.split("").sort().join("");

    if (carPal1 == carPal2) {
        alert("Son anagramas");
        return;
    }
    alert("No son anagramas");
});
}