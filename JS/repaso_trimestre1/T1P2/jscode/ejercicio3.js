document.querySelector("input").addEventListener("click", function(){   
    let num_filas;
    let num_celdas;

    do{
        num_filas = prompt("Dime el numero de filas")
    }while(num_filas < 0 || num_filas > 10 || isNaN(num_filas))

    do{
        num_celdas = prompt("Dime el numero de celdas");
    }while (num_celdas < 0 || num_celdas > 10 || isNaN(num_celdas))

    let tabla = document.createElement("table") //creamos el elemento tabla
    document.querySelector("div").appendChild(tabla);  //pegamos tabla al div
    tabla.setAttribute("class", "tabla"); //le añadimos a tabla la clase tabla

    for (let i = 0; i < num_filas; i++) {
        let tr = document.createElement("tr") //creamos los tr para cada fila
        tabla.appendChild(tr) //pegamos los tr en la tabla
        for (let j = 0; j < num_celdas; j++) {
            let td = document.createElement("td"); //creamos los td para cada celda
            tr.appendChild(td); //pegamos los td en los tr
            td.textContent= i+1; //en cada td creamos el contenido de texto
        }
    }
})