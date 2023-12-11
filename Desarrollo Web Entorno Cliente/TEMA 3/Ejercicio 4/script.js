let fecha = document.querySelector("#fecha");
let fondo = document.body;

fecha.addEventListener("input", () => {
  let mes = parseInt(fecha.value.split("-")[1]);
  let dia = parseInt(fecha.value.split("-")[2]);
  let estacion = document.querySelector("#estacion");
  switch (mes) {
    case 1:
      fondo.style.backgroundColor = "rgb(173, 255, 246)";
      estacion.innerHTML = "INVIERNO";
      break;
    case 2:
      fondo.style.backgroundColor = "rgb(173, 255, 246)";
      estacion.innerHTML = "INVIERNO";
      break;
    case 3:
      if (dia >= 21) {
        fondo.style.backgroundColor = "rgb(123, 252, 132)";
        estacion.innerHTML = "PRIMAVERA";
      } else {
        fondo.style.backgroundColor = "rgb(173, 255, 246)";
        estacion.innerHTML = "INVIERNO";
      }
      break;
    case 4:
      fondo.style.backgroundColor = "rgb(123, 252, 132)";
      estacion.innerHTML = "PRIMAVERA";
      break;
    case 5:
      fondo.style.backgroundColor = "rgb(123, 252, 132)";
      estacion.innerHTML = "PRIMAVERA";
      break;
    case 6:
      if (dia >= 21) {
        fondo.style.backgroundColor = "rgb(255, 191, 17)";
        estacion.innerHTML = "VERANO";
      } else {
        fondo.style.backgroundColor = "rgb(123, 252, 132)";
        estacion.innerHTML = "PRIMAVERA";
      }
      break;
    case 7:
      fondo.style.backgroundColor = "rgb(255, 191, 17)";
      estacion.innerHTML = "VERANO";
      break;
    case 8:
      fondo.style.backgroundColor = "rgb(255, 191, 17)";
      estacion.innerHTML = "VERANO";
      break;
    case 9:
      if (dia >= 23) {
        fondo.style.backgroundColor = "rgb(160, 91, 0)";
        estacion.innerHTML = "OTOÑO";
      } else {
        fondo.style.backgroundColor = "rgb(255, 191, 17)";
        estacion.innerHTML = "VERANO";
      }
      break;
    case 10:
      fondo.style.backgroundColor = "rgb(160, 91, 0)";
      estacion.innerHTML = "OTOÑO";
      break;
    case 11:
      fondo.style.backgroundColor = "rgb(160, 91, 0)";
      estacion.innerHTML = "OTOÑO";
      break;
    case 12:
      if (dia >= 22) {
        fondo.style.backgroundColor = "rgb(173, 255, 246)";
        estacion.innerHTML = "INVIERNO";
      } else {
        fondo.style.backgroundColor = "rgb(160, 91, 0)";
        estacion.innerHTML = "OTOÑO";
      }
      break;
  }
});
