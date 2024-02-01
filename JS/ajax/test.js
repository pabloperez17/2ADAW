window.onload = function(){
    const origen = "http://http://localhost/2ADAW/JS/ajax/consulta.php"

    //1 - creo el objeto
    xhr = new XMLHttpRequest();

    //2 - hago la petición
    xhr.open("POST", origen);

    let section = document.querySelector("section")
    let persona = new FormData();
    
    //3 - si esta todo bien
    xhr.addEventListener("load", function(respuesta) {
        let resultado = JSON.parse(respuesta.target.response);
        console.log("TODO OK");
        console.log(resultado);
        
        persona.append("nombre", resultado.nombre.value);
        console.log(resultado.nombre.value);
        persona.append("exp_curso", resultado.exp_curso.value);
        
        section.appendChild(persona)
    });

    //4 - si algo ha salido mal
    xhr.addEventListener("error", function(respuesta) {
        console.log("ERROR");
        console.log(respuesta);
    });

    //5 - enviar
    xhr.send(persona);
}