let intervalo; //Variable para el tiempo

document.querySelectorAll("input")[0].addEventListener("click", function(){ //Cuando se pulsa el boton generar
    let div1 = document.querySelectorAll("div")[0]; 
    let div2 = document.querySelectorAll("div")[1];

    intervalo = setInterval(function(){
        let random1 = Math.floor(Math.random() * (50 - 1 + 1) + 1);
        let random2 = Math.floor(Math.random() * (50 - 1 + 1) + 1);

        div1.textContent = random1; //en el div1 añadimos el valor del random1
        div2.textContent = random2; //en el div2 añadimos el valor del random2
    }, 1000) //para que cambie cada segunso

    this.disabled = true; //ponemos el boton 1 en disabled
    document.querySelectorAll("input")[1].disabled = false; //habilitamos el segundo boton
    document.querySelectorAll("div")[2].textContent=""; //el div3 lo ponemos vacio
})

document.querySelectorAll("input")[1].addEventListener("click", function(){
    let div3 = document.querySelectorAll("div")[2];
    let num1 = document.querySelectorAll("div")[0].textContent; //nos traemos el texto del div1
    let num2 = document.querySelectorAll("div")[1].textContent;

    if(num1 > num2){ //si el numero 1 es mayor
        div3.textContent = num1; //añadimos el texto del div1
    }else {
        div3.textContent = num2;
    }

    this.disabled = true; // ponemos el boton disabled
    document.querySelectorAll("input")[0].disabled = false; //habilitamos el boton1

    clearInterval(intervalo) //limpiamos el intervalo
})