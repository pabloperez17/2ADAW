Window.onload = function () {

    let texto = document.querySelectorAll("input[type='textarea']")[0];
    let boton = document.querySelectorAll("input[type='button']")[0];

    boton.addEventListener("click", function(){
        console.log(texto);
        if(texto.length <= 0){
            alert("Escribe algo polla")
        } else if (texto.length > 100){
            alert("No tan largo socio")
        } else{
            let div = document.createElement("div");
            div.appendChild(texto);
            document.body.appendChild(div)
        }
    })
}