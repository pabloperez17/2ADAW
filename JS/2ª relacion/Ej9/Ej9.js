let div = document.getElementsByTagName("div")[0];
let estilo = window.getComputedStyle(div);

document.getElementsByTagName("div")[0].addEventListener("click", function(){
    div.style.setProperty("background-color", "blue");
    div.style.setProperty("border", "3px solid lightskyblue");
    div.style.setProperty("color", "wheat");
    div.style.setProperty("font-size", "22");
});
