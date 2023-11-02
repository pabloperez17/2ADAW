let intervalo;

document.querySelectorAll("button")[0].addEventListener("click", function () {
  this.disabled = true;
  intervalo = setInterval(correr, 200);

  function correr() {
    posiciones[0] += random(0, 50);
    posiciones[1] += random(0, 50);
    posiciones[2] += random(0, 50);
    posiciones[3] += random(0, 50);
    document
      .querySelectorAll("div")[0]
      .style.setProperty("transform", `translateX(${posiciones[0]}px)`);
    document
      .querySelectorAll("div")[1]
      .style.setProperty("transform", `translateX(${posiciones[1]}px)`);
    document
      .querySelectorAll("div")[2]
      .style.setProperty("transform", `translateX(${posiciones[2]}px)`);
    document
      .querySelectorAll("div")[3]
      .style.setProperty("transform", `translateX(${posiciones[3]}px)`);

    if (posiciones[0] >= window.innerWidth - 100) {
      posiciones[0] = window.innerWidth - 100;
      alert("Ha ganado el verde");
      clearInterval(intervalo);
    } else if (posiciones[1] >= window.innerWidth - 100) {
      posiciones[1] = window.innerWidth - 100;
      alert("Ha ganado el rojo");
      clearInterval(intervalo);
    } else if (posiciones[2] >= window.innerWidth - 100) {
      posiciones[2] = window.innerWidth - 100;
      alert("Ha ganado el azul");
      clearInterval(intervalo);
    } else if (posiciones[3] >= window.innerWidth - 100) {
      posiciones[3] = window.innerWidth - 100;
      alert("Ha ganado el amarillo");
      clearInterval(intervalo);
    }
  }
});
let posiciones = [0, 0, 0, 0];

document.querySelectorAll("button")[1].addEventListener("click", function () {
  document.querySelectorAll("button")[0].disabled=false;
  posiciones = [0, 0, 0, 0];
  document
    .querySelectorAll("div")[0]
    .style.setProperty("transform", `translateX(${posiciones[0]}px)`);
  document
    .querySelectorAll("div")[1]
    .style.setProperty("transform", `translateX(${posiciones[1]}px)`);
  document
    .querySelectorAll("div")[2]
    .style.setProperty("transform", `translateX(${posiciones[2]}px)`);
  document
    .querySelectorAll("div")[3]
    .style.setProperty("transform", `translateX(${posiciones[3]}px)`);

  clearInterval(intervalo);
});

function random(min, max) {
  return Math.random() * (max - min) + min;
}
