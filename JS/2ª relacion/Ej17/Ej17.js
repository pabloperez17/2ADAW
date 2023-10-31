document.querySelectorAll("button")[0].addEventListener("click", function () {

});

document.querySelectorAll("button")[1].addEventListener("click", function () {


});

function correr() {
//mover divs a la derecha aleatoriamente
    document.querySelectorAll("div").style.left = Math.floor(Math.random() * 100) + "%";
}