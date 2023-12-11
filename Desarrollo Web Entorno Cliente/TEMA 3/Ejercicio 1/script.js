let formulario = document.forms.datos;

//COMPROBACIÓN NOMBRE
let nom = document.getElementById("nombre");
let nombreValido = true;
let nombre;
function comprobarNombre() {
  nombre = formulario.elements.nombre.value;
  if (!isNaN(nombre) || nombre == undefined) {
    let errorNombre = document.getElementById("errorNombre");
    errorNombre.innerHTML = " <span style='color:red'> Existe algún número en el nombre</span>";
    nombreValido = false;
  } else {
    errorNombre.innerHTML = "";
    nombreValido = true;
  }
}
nom.addEventListener("keyup", comprobarNombre);

//COMPROBACIÓN APELLIDOS
let ape = document.getElementById("apellido");
let apellidoValido = true;
let apellido;
function comprobarApellido() {
  apellido = formulario.elements.apellido.value;
  if (!isNaN(apellido)) {
    let errorApellido = document.getElementById("errorApellido");
    errorApellido.innerHTML = "<span style='color:red'> Existe algún número en el Apellido</span>";
    apellidoValido = false;
  } else {
    errorApellido.innerHTML = "";
    apellidoValido = true;
  }
}
ape.addEventListener("keyup", comprobarApellido);

//COMPROBACION TELEFONO
let tel = document.getElementById("tel");
let telefonoValido = true;
let telefono;
function comprobarTelefono() {
  telefono = formulario.elements.tel.value;
  if (telefono.length == 9) {
    let errorTelefono = document.getElementById("errorTelefono");
    errorTelefono.innerHTML = "";
    telefonoValido = true;
  } else {
    errorTelefono.innerHTML = "<span style='color:red'> La longitud del teléfono no es correcta</span>";
    telefonoValido = false;
  }
}
tel.addEventListener("keyup", comprobarTelefono);

//COMPROBACION DNI
let dni = document.getElementById("dni");
let dniValido = true;
let datoDni;
function comprobarDNI() {
  datoDni = formulario.elements.dni.value;
  let numDni = parseInt(datoDni.substring(0, datoDni.length - 1));
  let letraDni = datoDni.charAt(datoDni.length - 1);
  if (!isNaN(numDni) && isNaN(letraDni) && datoDni.length == 9) {
    let errorDNI = document.getElementById("errorDNI");
    errorDNI.innerHTML = "";
    dniValido = true;
  } else {
    errorDNI.innerHTML = "<span style='color:red'> El formato del DNI no es correcto</span>";
    dniValido = false;
  }
}
dni.addEventListener("keyup", comprobarDNI);

//COMPROBACION FORMULARIO

formulario.addEventListener("submit", function (event) {
  event.preventDefault();
  let error = document.getElementById("error");
  let resultado = document.getElementById("resultado");
  let elementoLista = document.createElement("li");
  if (nombre == undefined || apellido == undefined || telefono == undefined || datoDni == undefined) {
    error.innerHTML = "<p style='color:red'>Hay algún campo vacío, por favor rellénalo</p>";
  } else if (nombreValido && apellidoValido && telefonoValido && dniValido) {
    error.innerHTML = "";
    elementoLista.innerHTML = `<p>Nombre: ${nombre} - Apellido: ${apellido} - Teléfono: ${telefono} - DNI: ${datoDni}</p>`;
    resultado.appendChild(elementoLista);
    formulario.reset();
    nombre = undefined;
    apellido = undefined;
    datoDni = undefined;
    telefono = undefined;
  } else {
    error.innerHTML = "<p style='color:red'>Revise el formulario, hay algún campo que no es válido</p>";
  }
});
