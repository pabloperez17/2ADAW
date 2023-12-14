window.onload = function(){

let cajita = document.querySelectorAll("input[type='text']")[0];
cajita.onkeyup = function(){

    let c2 = document.querySelectorAll("input[type='text']")[1];
    c2.value = this.value;
}

}
