//Boton generar
document.querySelectorAll("input")[0].addEventListener("click", function(){
    let parrafo = document.createElement("p");
    parrafo.textContent = document.querySelectorAll("p")[0].innerText;
    parrafo.setAttribute("class", "clase2");
    document.body.appendChild(parrafo);

    document.querySelectorAll("input")[2].disabled = false;
})

//boton borrar viejo
document.querySelectorAll("input")[1].addEventListener("click", function(){
    document.body.removeChild(document.querySelectorAll("p")[0]);

    document.querySelectorAll("input")[3].disabled = true;
    this.disabled = true;
})

//boton borrar nuevo
document.querySelectorAll("input")[2].addEventListener("click", function(){
    while(document.querySelectorAll(".clase2")){
        document.body.removeChild(document.querySelector(".clase2"))
    }
})

//boton sustituir
document.querySelectorAll("input")[3].addEventListener("click", function(){

    let tabla = document.createElement("table")
    document.body.appendChild(tabla)

    for (let i = 0; i < 2; i++) {
        let tr = document.createElement("tr") //creamos los tr para cada fila
        tabla.appendChild(tr) //pegamos los tr en la tabla
        for (let j = 0; j < 2; j++) {
            let td = document.createElement("td"); //creamos los td para cada celda
            tr.appendChild(td);
            td.textContent= i+1;
        }
    }
    document.body.replaceChild(tabla, document.querySelector(".clase1"))

})