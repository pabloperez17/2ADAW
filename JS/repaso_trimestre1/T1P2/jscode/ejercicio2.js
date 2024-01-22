document.querySelectorAll("input")[0].addEventListener("click", function(){
    document.querySelectorAll("input")[1].disabled = false; //habilitamos el boton de abajo
    foto = "./img/";
    foto += prompt("Dime la ruta de la imgaen");

    if(foto == "./img/"){ //si nos deja el prompt vacio entra por aqui y nos pone terra
        foto += "terra.jpg";
        let imagen = document.createElement("img"); //creamos el elemento img
        imagen.setAttribute("src", foto); //le damos el atributo src a la foto
        imagen.setAttribute("class", "foto"); //le damos la clase foto a la imagen
        document.querySelector("div").appendChild(imagen); //pegamos la imagen en el div
    } else {
        foto += ".jpg"
        let imagen = document.createElement("img");
        imagen.setAttribute("src", foto);
        imagen.setAttribute("class", "foto");
        document.querySelector("div").appendChild(imagen);
    }
})

//BOTON LIMPIAR
document.querySelectorAll("input")[1].addEventListener("click", function(){
    let midiv = document.querySelector("div");
    //si el div tiene un hijo entra al while y lo elimina
    while(midiv.firstChild){
        midiv.removeChild(midiv.firstElementChild)
    }
})