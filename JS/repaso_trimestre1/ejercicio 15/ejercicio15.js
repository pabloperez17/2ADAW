function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}

document.querySelector("input").addEventListener("click", function(){
    let mesas = [];
    let nmesas;
    let mesacogida = false; 
    do{
        nmesas = prompt("Introduce un numero de mesas");
    }while(isNaN(nmesas)||nmesas<0);
    
    for(let i = 0; i< nmesas;i++){
        mesas[i] = random(0,4);
        console.log(mesas[i]);
    }
    do{
        comensales = parseInt(prompt("Dime un numero de comensales, ten en cuenta que las mesas son maximo de 4 comensales"));
        if(comensales>4){
            alert("Lo siento, no admitimos grupos de 6, haga grupos de 4 personas como máximo e intente de nuevo");
            salir = true;
        }else{
            if(comensales>0){
                for(let i = 0;i<mesas.length;i++){
                    if((mesas[i] == 0)&&!mesacogida){
                        alert("sientese en la mesa: " + (i+1));
                        mesas[i] += comensales;
                        mesacogida = true;
                    }
                }
                if (!mesacogida) {
                    for(let i = 0;i<mesas.length;i++){
                        if(((comensales+mesas[i])<=4) && !mesacogida){
                            alert("sientese en la mesa: " + (i+1));
                            mesas[i] += comensales;
                            mesacogida = true;
                        }
                    }
                }
                
                if(!mesacogida){
                    alert("no hay mesas libres")
                }
            }
            mesacogida = false;
            console.log("Las mesas estan asi ahora");
            for(let i = 0; i< nmesas;i++){
                console.log(mesas[i]);
            }
            }
    }while(isNaN(comensales)||comensales>0);
})