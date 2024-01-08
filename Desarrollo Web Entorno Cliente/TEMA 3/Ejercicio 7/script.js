//PAGINA FORMULARIO
let usuario = document.querySelector("#usuario");
let pass = document.querySelector("#pass");
let boton = document.querySelector("#enviar");
let totalUsuarios = [];

boton.addEventListener("click", (e) => {
  let nuevoUsuario = new Usuario(usuario.value, pass.value);
  totalUsuarios.push(nuevoUsuario);
  localStorage.setItem("usuario", JSON.stringify(totalUsuarios));
  console.log(totalUsuarios);
});
