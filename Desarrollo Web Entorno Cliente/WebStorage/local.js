window.addEventListener("load", obtenerClaves);
window.addEventListener("load", claveValor);
//CLAVES

let claveLocal = document.querySelector("#clave-local");
let valorLocal = document.querySelector("#valor-local");
let botonClavesLocal = document.querySelector("#agregar-par");

botonClavesLocal.addEventListener("click", () => {
  localStorage.setItem(claveLocal.value, valorLocal.value);
  obtenerClaves();
  claveValor();
  location.reload();
});

//OBJETOS
let nombreLocal = document.querySelector("#nombre-local");
let apellidoLocal = document.querySelector("#apellido-local");
let telefonoLocal = document.querySelector("#telefono-local");
let disponibilidadLocal = document.querySelector("#disponibilidad-local");
let botonObjetoLocal = document.querySelector("#agregarObjeto");
let valorCheckLocal;

disponibilidadLocal.addEventListener("change", () => {
  if (disponibilidadLocal.checked) {
    valorCheckLocal = true;
  } else {
    valorCheckLocal = false;
  }
});

class ContactoLocal {
  nombreLocal;
  apellidoLocal;
  telefonoLocal;
  disponibilidadLocal = false;
  constructor(nombreLocal, apellidoLocal, telefonoLocal, disponibilidadLocal) {
    this.nombreLocal = nombreLocal;
    this.apellidoLocal = apellidoLocal;
    this.telefonoLocal = telefonoLocal;
    this.disponibilidadLocal = disponibilidadLocal;
  }
}

botonObjetoLocal.addEventListener("click", () => {
  let contacto = new ContactoLocal(nombreLocal.value, apellidoLocal.value, telefonoLocal.value, valorCheckLocal);
  localStorage.setItem(nombreLocal.value, JSON.stringify(contacto));
  obtenerClaves();
  location.reload();
});

//BORRAR
let borrarLocal = document.querySelector("#borrar-local");
let botonBorrarLocal = document.querySelector("#borrarClaveLocal");
let totalClaves = [];

function obtenerClaves() {
  borrarLocal.innerHTML = "";
  totalClaves = Object.keys(localStorage);
  totalClaves.forEach(function (item) {
    let option = document.createElement("option");
    option.value = item;
    option.innerHTML = item;
    borrarLocal.appendChild(option);
  });
}

botonBorrarLocal.addEventListener("click", () => {
  localStorage.removeItem(borrarLocal.value);
  obtenerClaves();
  claveValor();
  location.reload();
});

//ACTUALES
let divActuales = document.querySelector("#actualesLocal");
//Obtener clave-valor
function claveValor() {
  divActuales.innerHTML = "";
  totalClaves = Object.keys(localStorage);
  totalClaves.forEach((item) => {
    let actualLocal = document.createElement("h6");
    actualLocal.classList.add("mt-3");
    actualLocal.innerHTML = item;

    divActuales.appendChild(actualLocal);
  });
}
