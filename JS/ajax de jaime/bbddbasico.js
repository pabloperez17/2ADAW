document.querySelector("button").onclick = function (e) {
  e.preventDefault();

  const origen = "http://localhost/ajax/addAlumno.php";

  //OBJETO FORMDATA
  let formu = document.querySelector("form");

  //FORMA 1: algunos campos

  let nicoFD = new FormData();
  nicoFD.append("nombre", "Srta Inmaculada");
  nicoFD.append("dni", "11111122N");
  nicoFD.append("apel", "Concepcion Pura");
  nicoFD.append("edad", 23);

  console.log(nicoFD);

  //FORMA 2: todos los campos del formulario
/*
  let nicoFD = new FormData(formu);
  console.log(nicoFD);
*/
  //1 - creo el objeto
  xhr = new XMLHttpRequest();

  //Paso 2 - hago la peticion
  xhr.open("POST", origen);

  //Paso 3
  xhr.addEventListener("load", function (respuesta) {
    console.log("TODO OK");
    //console.log(respuesta);
    let resultado = JSON.parse(respuesta.target.response);

    console.log(resultado);
  });

  xhr.addEventListener("error", function (respuesta) {
    console.log("ERROR");
    console.log(respuesta);
  });

  //Paso 5
  xhr.send(nicoFD);
};
