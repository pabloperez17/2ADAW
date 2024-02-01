/*window.onload = function () {
  let imagen = document.createElement("img");
  document.querySelector("div").appendChild(imagen);
  foto = "./img/fondoAzul.png";
  imagen.setAttribute("src", foto);

  let intervalo;
  intervalo = setInterval(function () {
    if (foto == "./img/fondoAzul.png") {
      let imagen2 = document.createElement("img");
      document.querySelector("div").appendChild(imagen2);
      foto = "./img/fondoVerde.png";
      imagen2.setAttribute("src", foto);
      document.querySelector("div").removeChild(imagen);
    } else if (foto == "./img/fondoVerde.png") {
      let imagen3 = document.createElement("img");
      document.querySelector("div").appendChild(imagen3);
      foto = "./img/fondoRojo.png";
      imagen3.setAttribute("src", foto);
      document.querySelector("div").removeChild(imagen2);
    } else if (foto == "./img/fondoRojo.png") {
      let imagen4 = document.createElement("img");
      document.querySelector("div").appendChild(imagen4);
      foto = "./img/fondoNegro.png";
      imagen4.setAttribute("src", foto);
      document.querySelector("div").removeChild(imagen3);
    } else {
      let imagen5 = document.createElement("img");
      document.querySelector("div").appendChild(imagen5);
      foto = "./img/fondoAzul.png";
      imagen5.setAttribute("src", foto);
      document.querySelector("div").removeChild(imagen4);
    }
  }, 1000);

  document.querySelector("div").addEventListener("click", function () {
    clearInterval(intervalo);
  });
};
*/

document.querySelector("div").addEventListener("click", function () {

  foto = document.querySelector("div")
  console.log(foto.style.src);
  if(foto.style.src == "undefined"){
    foto = "./img/fondoAzul.png";
    document.querySelector("div").setAttribute("src", foto)
  }else if (foto == "./img/fondoAzul.png") {
    foto = "./img/fondoVerde.png";
    document.querySelector("div").setAttribute("src", foto);
  }else if(foto == "./img/fondoVerde.png") {
    foto = "./img/fondoRojo.png";
    document.querySelector("div").setAttribute("src", foto);
  } else if (foto == "./img/fondoRojo.png") {
    foto = "./img/fondoNegro.png";
    document.querySelector("div").setAttribute("src", foto);
  } else {
    foto = "./img/fondoAzul.png";
    document.querySelector("div").setAttribute("src", foto);
  }

});