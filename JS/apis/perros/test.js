document.querySelector("input").addEventListener("click", function(){
    const origen = "https://dog.ceo/api/breeds/image/random"

    //1 - creo el objeto
    xhr = new XMLHttpRequest();

    //2 - hago la petición
    xhr.open("GET", origen);

    //3 - si esta todo bien
    xhr.addEventListener("load", function(respuesta) {
        let resultado = JSON.parse(respuesta.target.response);
        console.log("TODO OK");
        console.log(resultado);
        let imagen = document.createElement("img");
        imagen.setAttribute("src", resultado.message);

        let section = document.querySelector("section")
        section.appendChild(imagen)
    });

    //4 - si algo ha salido mal
    xhr.addEventListener("error", function(respuesta) {
        console.log("ERROR");
        console.log(respuesta);
    });

    //5 - enviar
    xhr.send();
})
