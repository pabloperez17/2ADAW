document.getElementsByTagName("img")[0].addEventListener("mouseover", function(){
    console.log("hola")
    this.src = "img/coche2.jpg";
});
document.getElementsByTagName("img")[0].addEventListener("mouseleave", function(){
    this.src = "img/coche1.webp";
});