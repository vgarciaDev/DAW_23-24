let caracteres = document.querySelector("#caracteres");
let formulario = document.forms.mandarTweet;
let elementoTweet = formulario.elements.tweet;
let boton = document.querySelector("#enviar");
let cantidadCaracteres = 0;
boton.disabled = true;
function deshabilitarBoton() {
  if (cantidadCaracteres.length > 0) {
    boton.disabled = false;
  } else {
    boton.disabled = true;
  }
}
elementoTweet.addEventListener("input", () => {
  cantidadCaracteres = formulario.elements.tweet.value;
  caracteres.innerHTML = `${cantidadCaracteres.length}/255`;
  deshabilitarBoton();
});

boton.addEventListener("click", () => {
  let enviar = confirm("¿Enviar tweet?");
  if (enviar) {
    alert("Tweet mandado correctamente");
    console.log(cantidadCaracteres);
    formulario.reset();
    cantidadCaracteres = formulario.elements.tweet.value;
    caracteres.innerHTML = `0/255`;
    deshabilitarBoton();
  } else {
    alert("Operación cancelada por el usuario");
  }
});
