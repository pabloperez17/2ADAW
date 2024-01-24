//Boton generar
document.querySelectorAll("input")[0].addEventListener("click", function(){
    let parrafo = document.createElement("p"); //creo el elemento parrafo en la variable parrafo
    parrafo.textContent = document.querySelectorAll("p")[0].innerText; //metemos en la variable parrafo el contenido de texto que hay en el primer p
    parrafo.setAttribute("class", "clase2"); //le damos el atributo clase al parrafo, en concreto la clase2
    document.body.appendChild(parrafo); //pegamos el parrafo al body

    document.querySelectorAll("input")[2].disabled = false; //habilitamos el tercer boton
})

//boton borrar viejo
document.querySelectorAll("input")[1].addEventListener("click", function(){
    document.body.removeChild(document.querySelectorAll("p")[0]); //se borra el primer p

    document.querySelectorAll("input")[3].disabled = true; //deshabilitamos el boton 4
    this.disabled = true; //deshabilitamos el boton en el que estamos
})

//boton borrar nuevo
document.querySelectorAll("input")[2].addEventListener("click", function(){
    //hacemos un while para buscar todos los elementos con la clase2
    while(document.querySelectorAll(".clase2")){
        //eliminamos todos los elementos con la clase2
        document.body.removeChild(document.querySelector(".clase2"))
    }
})

//boton sustituir
document.querySelectorAll("input")[3].addEventListener("click", function(){

    let tabla = document.createElement("table") //creo una variable tabla del tipo table

    for (let i = 0; i < 2; i++) {
        let tr = document.createElement("tr") //creamos los tr para cada fila
        tabla.appendChild(tr) //pegamos los tr en la tabla
        for (let j = 0; j < 2; j++) {
            let td = document.createElement("td"); //creamos los td para cada celda
            tr.appendChild(td); //pego los td en los tr
            td.textContent= i+1;
        }
    }
    document.body.replaceChild(tabla, document.querySelector(".clase1")) //reemplazamos tabla por el elemento que tiene clase1

})