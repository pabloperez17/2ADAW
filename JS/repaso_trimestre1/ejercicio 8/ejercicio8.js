document.querySelector("input").addEventListener("click", function(){
    let num1;
    let num2;
    num1 = prompt("Dame un numero positivo");
    num2 = prompt("Dame un numero positivo");
    if (isNaN(num1) || isNaN(num2)) {
        alert("No estas poniendo numeros validos");
    }

    let array = [];

    if(num1 < 0 || num2 < 0){
        console.log(array);
    } else {
        for (let i = 1; i <= num1; i++) {
            array[i-1] = i * num2;
        }
        console.log(array);
    }
})