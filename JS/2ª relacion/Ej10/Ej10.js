const divs = document.querySelectorAll("div");
console.log(divs);
for (let div of divs){
    div.addEventListener("mouseover", function(){
        cambiarfondo(window.getComputedStyle(div).getPropertyValue("background-color"));
    });
    div.addEventListener("mouseleave",function(){
        document.getElementsByTagName("body")[0].style.setProperty("background-color","white");
    });
}

function cambiarfondo(color){
    document.getElementsByTagName("body")[0].style.setProperty("background-color", color);
}