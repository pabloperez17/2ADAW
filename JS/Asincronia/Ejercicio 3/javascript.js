document.querySelector("button").onclick = function (e) {
    e.preventDefault();

    const url = "https://fakestoreapi.com/products";

    fetch(url)
        .then((respuesta) => {
            return respuesta.json();
        })
        .then((datos) => {
            for ( const dato of datos) {
                let entrada_datos = document.createElement("p");
                entrada_datos.textContent = dato.title; // Solo obtener el título
                entrada_datos.addEventListener("mouseover", function () {
                    document.querySelectorAll("section")[1].innerHTML="";
                    let img = document.createElement("img");
                    img.setAttribute("src", dato.image);
                    document.querySelectorAll("section")[1].appendChild(img);
                }

                )
                document.querySelector("section").appendChild(entrada_datos);
            }
        }
        )
        .catch ((respError) => {
    alert("Problema con el fetch: " + respError)
});
};


