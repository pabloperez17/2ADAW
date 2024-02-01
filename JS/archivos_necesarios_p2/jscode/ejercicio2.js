document.querySelector("input").addEventListener("click", function () {
  this.disabled = true;
  let intervalo;
  let valor_meter;

  valor_meter = document.querySelector("meter").value;
  do {
    intervalo = setInterval(function () {
      document.querySelector("meter").value += 25;
      console.log(valor_meter);
    }, 1000);
  } while (valor_meter > 100);
  clearInterval(intervalo);

  if (valor_meter == 100) {
    this.disabled = false;
    valor_meter = 0;
  } else {
    intervalo = setInterval(function () {
      valor_meter = document.querySelector("meter").value;
      do {
        document.querySelector("meter").value += 25;
        console.log(valor_meter);
      } while (valor_meter > 100);
    }, 1000);
  }
});
