window.addEventListener("load", agregarListaCookies);

let clave = document.querySelector("#clave-cookies");
let valor = document.querySelector("#valor-cookies");
let expiracion = document.querySelector("#expiracion-cookies");
let botonCookies = document.querySelector("#agregar-cookies");

botonCookies.addEventListener("click", (e) => {
  document.cookie = `${clave.value}=${valor.value};max-age=${Date() * 24 * 60 * 60 * expiracion.value};path=/`;
  agregarListaCookies();
});

function agregarListaCookies() {
  let cookies = document.cookie.split(";");
  let unaCookie;
  let actualesCookies = document.querySelector("#actualesCookies");
  actualesCookies.innerHTML = "";
  let borrarCookies = document.querySelector("#borrar-cookies");
  borrarCookies.innerHTML = "";
  cookies.forEach((item) => {
    //Agregar a la lista de actuales
    unaCookie = item.split("=");
    let elemento = document.createElement("h6");
    elemento.classList.add("mt-3");
    elemento.innerHTML = unaCookie[0];
    actualesCookies.appendChild(elemento);
    //Agregar a la lista de borrar
    let elemento2 = document.createElement("option");
    elemento2.value = unaCookie[0];
    elemento2.innerHTML = unaCookie[0];
    borrarCookies.appendChild(elemento2);
  });
}

let listaBorrarCookies = document.querySelector("#borrarCookies");

listaBorrarCookies.addEventListener("click", (e) => {
  let borrarCookies = document.querySelector("#borrar-cookies");
  document.cookie = `${borrarCookies.value}=""; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
  agregarListaCookies();
});
