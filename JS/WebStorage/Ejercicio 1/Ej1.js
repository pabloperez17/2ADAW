if (document.querySelectorAll("input")[2]) {
  document.querySelectorAll("input")[2].addEventListen("click", function (ev) {
      ev.preventDefault();
      let nombre = document.querySelectorAll("input")[0].value;
      let clave = document.querySelectorAll("input")[1].value;
      let datos = [
        {
          nombre,
          clave,
        },
      ];
      if (localStorage.getItem("usuarios")) {
        const datosLocal = JSON.parse(localStorage.getItem("usuarios"));
        for (let i = 0; i < datosLocal.length; i++) {
          datos.push(datosLocal[i]);
        }
        // datos.push(...datosLocal);
      }
      localStorage.setItem("usuarios", JSON.stringify(datos));
    });
}

if (document.querySelectorAll("input[type='button']")[0]) {
  document
    .querySelectorAll("input[type='button']")[0]
    .addEventListener("click", function () {
      console.log(JSON.parse(localStorage.getItem("usuarios")));
    });
}
