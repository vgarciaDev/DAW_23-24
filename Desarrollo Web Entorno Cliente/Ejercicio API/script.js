let genero = document.querySelector("#genero");
let pais = document.querySelector("#pais");
let numero = document.querySelector("#numero");
let filtrar = document.querySelector("#filtrar");
let resultados = document.querySelector(".resultados");
let boton;
let detalles = document.querySelector(".detalles");
let url = "https://randomuser.me/api/?results=100";

//Al cargar la página se cargan 100 resultados
window.addEventListener("load", () => {
  resolverApi(url);
});

//Evento del filtro de búsqueda
filtrar.addEventListener("click", (e) => {
  url = `https://randomuser.me/api/?results=${numero.value}&gender=${genero.value}&nat=${pais.value}`;
  resultados.innerHTML = "";
  resApi(url);
});

//Cualquiera de las dos es válida, están usadas ambas en el ejercicio
//PROMESAS
function resolverApi(url) {
  return fetch(url)
    .then((res) => {
      return res.json();
    })
    .then((res1) => {
      res1.results.forEach((item) => {
        resultados.innerHTML += `<div class="col mt-4">
        <div class="card col" style="width: 18rem">
        <img src='${item.picture.large}' class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">${item.name.first} ${item.name.last}</h5>
          <button class="btn btn-primary botonPersona">Ver Detalle</button>
        </div>
        </div>
        </div>`;
      });
      botonesPersona = document.querySelectorAll(".botonPersona");
      botonesPersona.forEach((item, index) => {
        item.addEventListener("click", () => {
          detalles.innerHTML = `<div class="col mt-4">
            <div class="card col" style="width: 25rem">
            <img src='${res1.results[index].picture.large}' class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Nombre: ${res1.results[index].name.first} ${res1.results[index].name.last}</h5>
              <h5 class="card-title">Email: ${res1.results[index].email}</h5>
              <h5 class="card-title">Tel: ${res1.results[index].phone}</h5>
            </div>
            </div>
            </div>`;
        });
      });
    });
}

//ASYNC AWAIT
async function resApi(url) {
  let res = await fetch(url);
  let res1 = await res.json();
  res1.results.forEach((element, index) => {
    resultados.innerHTML += `<div class="col mt-4">
    <div class="card col" style="width: 18rem">
    <img src='${element.picture.large}' class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="card-title">${element.name.first} ${element.name.last}</h5>
      <button class="btn btn-primary botonPersona">Ver Detalle</button>
    </div>
    </div>
    </div>`;
  });
  botonesPersona = document.querySelectorAll(".botonPersona");
  botonesPersona.forEach((item, index) => {
    item.addEventListener("click", () => {
      detalles.innerHTML = `<div class="col mt-4">
          <div class="card col" style="width: 25rem">
          <img src='${res1.results[index].picture.large}' class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Nombre: ${res1.results[index].name.first} ${res1.results[index].name.last}</h5>
            <h5 class="card-title">Email: ${res1.results[index].email}</h5>
            <h5 class="card-title">Tel: ${res1.results[index].phone}</h5>
          </div>
          </div>
          </div>`;
    });
  });
}
