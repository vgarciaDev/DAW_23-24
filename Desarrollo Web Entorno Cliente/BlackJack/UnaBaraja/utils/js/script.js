import { Carta } from "./carta.js";

//PEDIMOS NOMBRE DEL JUGADOR
let nombre = prompt("Introduce tu nombre para jugar: ");

//VARIABLES
let puntuacionBanca = 0;
let puntuacionJugador = 0;
let carta;
let cartaElegida;
let imagenJugada;
let imagenCarta;
let marcador;
let parteAtras;
let imagenAtras;
let contenedorAtras;
let contenedor;
let contenedorCartas;
let final = document.getElementById("puntuacion-final");
let pedir = document.getElementById("pedir");
let plantar = document.getElementById("plantar");
let divPuntuacion = document.querySelector(".puntuacion-final");

//CREAR BARAJA
let palos = ["C", "D", "P", "T"];
let baraja = [];
for (let i = 0; i < palos.length; i++) {
  for (let j = 1; j < 14; j++) {
    baraja.push(`${j}${palos[i]}`);
  }
}

//BARAJARLA
baraja = _.shuffle(baraja);

console.log(baraja);

//ELEGIR CARTA DE LA BARAJA
function elegirCarta() {
  carta = baraja.pop();
  cartaElegida = new Carta(carta);
  cartaElegida.setValor(carta);
  cartaElegida.setImagen(carta);
}

//CREAR LA IMAGEN DE LA CARTA PARA EL DOM
function crearCarta() {
  parteAtras = document.createElement("div");
  parteAtras.classList.add("flip-card-front");
  parteAtras.style.width = "200px";
  imagenAtras = document.createElement("img");
  imagenAtras.src = `.\\utils\\images\\images\\red_back.png`;
  parteAtras.appendChild(imagenAtras);

  imagenJugada = document.createElement("div");
  imagenJugada.classList.add("flip-card-back");
  imagenCarta = document.createElement("img");
  imagenJugada.appendChild(imagenCarta);

  contenedorAtras = document.createElement("div");
  contenedorAtras.classList.add("flip-card-inner");
  contenedorAtras.appendChild(parteAtras);
  contenedorAtras.appendChild(imagenJugada);

  contenedor = document.createElement("div");
  contenedor.classList.add("flip-card");
  contenedor.appendChild(contenedorAtras);
}

// JUGADA DE LA BANCA
function crearCartaBanca() {
  crearCarta();
  contenedorCartas = document.querySelector(".contenedor-cartas-banca");
  contenedorCartas.appendChild(contenedor);
}

function marcadorBanca() {
  marcador = document.getElementById("marcador-banca");
  marcador.innerHTML = `Puntuación Banca: ${puntuacionBanca}`;
}
function girarCarta() {
  contenedorAtras.style.transform = "rotateY(180deg)";
}

function jugadaBanca() {
  if (puntuacionBanca < 17) {
    elegirCarta();
    crearCartaBanca();
    imagenCarta.src = cartaElegida.getImagen;
    puntuacionBanca += cartaElegida.getValor;
    setTimeout(marcadorBanca, 700);
  }
  setTimeout(girarCarta, 500);
  setTimeout(jugadaBanca, 2000);
  if (puntuacionBanca > 21) {
    setTimeout(() => {
      final.innerHTML = `GANA EL JUGADOR ${nombre.toUpperCase()}`;
      divPuntuacion.style.display = "flex";
    }, 1000);
  } else if (puntuacionBanca < 17) {
    pedir.style.display = "none";
    plantar.style.display = "none";
  } else {
    pedir.style.display = "block";
    plantar.style.display = "block";
  }
}

//JUGADA DEL PLAYER

function crearCartaJugador() {
  crearCarta();
  contenedorCartas = document.querySelector(".contenedor-cartas-jugador");
  contenedorCartas.appendChild(contenedor);
}

function marcadorJugador() {
  marcador = document.getElementById("marcador-jugador");
  marcador.innerHTML = `Puntuación ${nombre}: ${puntuacionJugador}`;
}

function jugadaJugador() {
  elegirCarta();
  crearCartaJugador();
  imagenCarta.src = cartaElegida.getImagen;
  puntuacionJugador += cartaElegida.getValor;
  setTimeout(marcadorJugador, 700);
  setTimeout(girarCarta, 500);
  if (puntuacionJugador > 21) {
    pedir.disabled = true;
    plantar.disabled = true;
    setTimeout(() => {
      final.innerHTML = "GANA LA BANCA";
      divPuntuacion.style.display = "flex";
    }, 800);
  }
  setTimeout(marcadorJugador, 700);
}

function resultadoFinal() {
  if (puntuacionBanca <= 21 && puntuacionJugador <= 21) {
    if (puntuacionBanca - puntuacionJugador > 0) {
      final.innerHTML = "GANA LA BANCA";
      pedir.disabled = true;
      plantar.disabled = true;
      divPuntuacion.style.display = "flex";
    } else if (puntuacionBanca - puntuacionJugador < 0) {
      final.innerHTML = `GANA EL JUGADOR ${nombre.toUpperCase()}`;
      pedir.disabled = true;
      plantar.disabled = true;
      divPuntuacion.style.display = "flex";
    } else {
      final.innerHTML = `HAY EMPATE ENTRE BANCA Y ${nombre.toUpperCase()}`;
      pedir.disabled = true;
      plantar.disabled = true;
      divPuntuacion.style.display = "flex";
    }
  }
}

pedir.addEventListener("click", jugadaJugador);
plantar.addEventListener("click", resultadoFinal);
jugadaBanca();
