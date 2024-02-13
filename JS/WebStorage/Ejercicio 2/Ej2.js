document.querySelectorAll("input")[0].addEventListener("click", function () {
  let elemento = prompt("Que quieres añadir");
  let cosa = document.createElement("li");
  cosa.textContent = elemento;

  let datos = [elemento];

  document.querySelector("ol").appendChild(cosa);

  if (localStorage.getItem("datos")) {
    const datosLocal = JSON.parse(localStorage.getItem("datos"));
    for (let i = 0; i < datosLocal.length; i++) {
      datos.push(datosLocal[i]);
    }
    // datos.push(...datosLocal);
  }
  localStorage.setItem("datos", JSON.stringify(datos));
});

document.querySelectorAll("input")[1].addEventListener("click", function () {
  let elemento = parseInt(prompt("Que elemento quieres borrar"));
  let posicion = document.querySelector("ol").children[elemento - 1];
  document.querySelector("ol").removeChild(posicion);
  
  if (localStorage.getItem("datos")) {
    const datosLocal = JSON.parse(localStorage.getItem("datos"));
    for (let i = 0; i < datosLocal.length; i++) {
      datos.push(datosLocal[i]);
    }
    // datos.push(...datosLocal);
  }
  localStorage.setItem("datos", JSON.stringify(datos));
});
