let contenedor = document.querySelector("#contenedor");
let rangos = document.querySelector("#rangos");

rangos.addEventListener("input", () => {
  let redValor = document.querySelector("#r").value;
  let greenValor = document.querySelector("#g").value;
  let blueValor = document.querySelector("#b").value;
  contenedor.style.backgroundColor = `rgb(${redValor}, ${greenValor}, ${blueValor})`;
  contenedor.innerHTML = `<h3 style="text-align:center;">RGB: ${redValor}/${greenValor}/${blueValor}</h3>`;
  if (redValor < 100 && greenValor < 100 && blueValor < 100) {
    contenedor.style.color = "white";
  } else {
    contenedor.style.color = "black";
  }
});
