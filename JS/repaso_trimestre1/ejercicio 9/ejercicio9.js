document.querySelector("input").addEventListener("click", function(){
    let num;

    do{
        num = prompt("dame un munero mayor que 2")
    }while(isNaN(num)||(num < 2))

    let matriz = [];
    let contador = 1;
    for (let i = 0; i < num; i++) {
        let filanueva = " ";
        matriz[i] = [];
        for (let j = 0; j < num; j++) {
            matriz[i][j] = num*contador;
            filanueva += matriz[i][j] + " ";
            contador++;
        }
        console.log(filanueva)
    }
})