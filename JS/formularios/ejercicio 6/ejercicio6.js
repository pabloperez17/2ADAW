window.onload = function(){
    let check1 = document.querySelectorAll("input[type='checkbox']")[0];
    let check2 = document.querySelectorAll("input[type='checkbox']")[1];
    let check3 = document.querySelectorAll("input[type='checkbox']")[2];
    let check4 = document.querySelectorAll("input[type='checkbox']")[3];

    let select = document.querySelector("select");

    check1.addEventListener("click" , function(){
        if(check1.checked){
            select.add(new Option(check1.value, check1.value));
        } else {
            for (let i = 0; i < select.length; i++) {
                if (select[i].value == check1.value){
                    select.remove(i);
                }
            }
        }
    })
    check2.addEventListener("click" , function(){
        if(check2.checked){
            select.add(new Option(check2.value, check2.value));
        } else {
            for (let i = 0; i < select.length; i++) {
                if (select[i].value == check2.value){
                    select.remove(i);
                }
            }
        }
    })
    check3.addEventListener("click" , function(){
        if(check3.checked){
            select.add(new Option(check3.value, check3.value));
        } else {
            for (let i = 0; i < select.length; i++) {
                if (select[i].value == check3.value){
                    select.remove(i);
                }
            }
        }
    })
    check4.addEventListener("click" , function(){
        if (check4.checked){
            select.add(new Option(check4.value, check4.value));
        } else {
            for (let i = 0; i < select.length; i++) {
                if (select[i].value == check4.value){
                    select.remove(i);
                }
            }
        }
    })
}