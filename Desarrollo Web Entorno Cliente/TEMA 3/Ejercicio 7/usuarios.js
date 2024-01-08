//PAGINA USERS
let lista = document.querySelector("#lista");
let arrayTotalUsuarios = JSON.parse(localStorage.getItem("usuario"));

window.addEventListener("load", () => {
  arrayTotalUsuarios.forEach((item) => {
    lista.innerHTML += `<li>Usuario: ${item.nombreUsuario} - Contraseña: ${item.contraseña}</li>`;
  });
});

console.log(arrayTotalUsuarios);
