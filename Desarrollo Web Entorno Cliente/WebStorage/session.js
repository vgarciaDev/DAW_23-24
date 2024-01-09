window.addEventListener("load", obtenerClaves);
window.addEventListener("load", claveValor);
//CLAVES

let claveSesion = document.querySelector("#clave-sesion");
let valorSesion = document.querySelector("#valor-sesion");
let botonClavesSesion = document.querySelector("#agregar-par-sesion");

botonClavesSesion.addEventListener("click", () => {
  sessionStorage.setItem(claveSesion.value, valorSesion.value);
  obtenerClaves();
  claveValor();
  location.reload();
});

//OBJETOS
let nombreSesion = document.querySelector("#nombre-sesion");
let apellidoSesion = document.querySelector("#apellido-sesion");
let telefonoSesion = document.querySelector("#telefono-sesion");
let disponibilidadSesion = document.querySelector("#disponibilidad-sesion");
let botonObjetoSesion = document.querySelector("#agregarObjetoSesion");
let valorCheckSesion;

disponibilidadSesion.addEventListener("change", () => {
  if (disponibilidadSesion.checked) {
    valorCheckSesion = true;
  } else {
    valorCheckSesion = false;
  }
});

class ContactoSesion {
  nombreSesion;
  apellidoSesion;
  telefonoSesion;
  disponibilidadSesion = false;
  constructor(nombreSesion, apellidoSesion, telefonoSesion, disponibilidadSesion) {
    this.nombreSesion = nombreSesion;
    this.apellidoSesion = apellidoSesion;
    this.telefonoSesion = telefonoSesion;
    this.disponibilidadSesion = disponibilidadSesion;
  }
}

botonObjetoSesion.addEventListener("click", () => {
  let contacto = new ContactoSesion(nombreSesion.value, apellidoSesion.value, telefonoSesion.value, valorCheckSesion);
  sessionStorage.setItem(nombreSesion.value, JSON.stringify(contacto));
  obtenerClaves();
  location.reload();
});

//BORRAR
let borrarSesion = document.querySelector("#borrar-sesion");
let botonBorrarSesion = document.querySelector("#borrarClaveSesion");
let totalClavesSesion = [];

function obtenerClaves() {
  borrarSesion.innerHTML = "";
  totalClavesSesion = Object.keys(sessionStorage);
  totalClavesSesion.forEach(function (item) {
    let option = document.createElement("option");
    option.value = item;
    option.innerHTML = item;
    borrarSesion.appendChild(option);
  });
}

botonBorrarSesion.addEventListener("click", () => {
  sessionStorage.removeItem(borrarSesion.value);
  obtenerClaves();
  claveValor();
  location.reload();
});

//CLAVES ACTUALES
let divActualesSesion = document.querySelector("#actualesSesion");
function claveValor() {
  divActualesSesion.innerHTML = "";
  totalClavesSesion = Object.keys(sessionStorage);
  totalClavesSesion.forEach((item) => {
    let actualSesion = document.createElement("h6");
    actualSesion.classList.add("mt-3");
    actualSesion.innerHTML = item;
    divActualesSesion.appendChild(actualSesion);
  });
}
