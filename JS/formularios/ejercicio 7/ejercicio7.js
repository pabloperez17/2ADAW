Window.onload = function () {

    document.querySelector("input").addEventListener("click",function(ev){
    
        ev.preventDefault();
    
        let texto = document.querySelector("textarea").value;
        console.log(texto);
        let midiv = document.createElement("div");
    
        if(texto.length<= 50){
            midiv.textContent = texto;
            midiv.style.setProperty("color", "blue");
            document.body.appendChild(midiv);
        }else{
            let textobueno = texto.split('',50);
            textobueno.join('');
            midiv.textContent = textobueno;
            midiv.style.setProperty("color", "blue");
            document.body.appendChild(midiv);
        } 
    })
    
    document.querySelector("textarea").addEventListener("keydown",function(ev){
        if(document.querySelector("textarea").value.length>100){
            document.querySelector("textarea").disabled = true;
        }else{
            document.querySelector("textarea").disabled = false;
        }
    })
}