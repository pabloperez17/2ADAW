document.querySelector("button").onclick = function (e) {
    e.preventDefault();

    const url = "https://jsonplaceholder.typicode.com/comments";

    fetch(url)
        .then((respuesta) => {
            return respuesta.json();
        })
        .then((datos) => {
            let section = document.querySelector("section");
            for (dato of datos) {
                let entrada_datos = document.createElement("p");
                entrada_datos.textContent = "";
                for (valor in dato) {
                    entrada_datos.textContent += `${valor}: ${dato[valor]}`+"\n";
                    console.log(entrada_datos);
                }
                section.appendChild(entrada_datos);
            }
        })
        .catch((respError) => {
            alert("Problema con el fetch: "+respError)
        });
};