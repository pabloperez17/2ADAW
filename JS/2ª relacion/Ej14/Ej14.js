document.querySelectorAll("li")[0].addEventListener("click", function(){
    visibles(0);
});
document.querySelectorAll("li")[4].addEventListener("click", function(){
    visibles(1);
});
document.querySelectorAll("li")[8].addEventListener("click", function(){
    visibles(2);
});
function visibles(numero){
    if(document.querySelectorAll("body>ul>li")[numero].nextElementSibling.style.display == "block"){
        document.querySelectorAll("body>ul>li")[numero].nextElementSibling.style.display = "none"
    } else {
        document.querySelectorAll("li + ul").forEach((elemento) => {
            elemento.style.display = "none";
        })
        document.querySelectorAll("body>ul>li")[numero].nextElementSibling.style.display = "block";
    }
}