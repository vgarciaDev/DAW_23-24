let nombre = prompt("Introduce tu nombre para jugar: ");
let baraja = {
  palo: ["C", "D", "P", "T"],
  carta: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
};
let puntuacionBanca = 0;
let puntuacionJugador = 0;
let paloAleatorio;
let cartaAleatoria;
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

function elegirCarta() {
  paloAleatorio = baraja.palo[Math.floor(Math.random() * 4)];
  cartaAleatoria = baraja.carta[Math.floor(Math.random() * 11)];
}

// JUGADA DE LA BANCA

function crearCartaBanca() {
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
  contenedorCartas = document.querySelector(".contenedor-cartas-banca");
  contenedorCartas.appendChild(contenedor);
}

function marcadorBanca() {
  marcador = document.getElementById("marcador-banca");
  marcador.innerHTML = `Puntuación Banca: ${puntuacionBanca}`;
}

function jugadaBanca() {
  if (puntuacionBanca < 17) {
    elegirCarta();
    crearCartaBanca();
    if (baraja.carta[10] == cartaAleatoria) {
      puntuacionBanca += 11;
      let valor11 = ["J", "Q", "K"];
      let cartaValor11 = valor11[Math.floor(Math.random() * 3)];
      imagenCarta.src = `.\\utils\\images\\images\\${cartaValor11}${paloAleatorio}.png`;
    } else {
      puntuacionBanca += cartaAleatoria;
      imagenCarta.src = `.\\utils\\images\\images\\${cartaAleatoria}${paloAleatorio}.png`;
    }
    setTimeout(marcadorBanca, 700);
  }
  function girarCarta() {
    contenedorAtras.style.transform = "rotateY(180deg)";
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

// //JUGADA DEL PLAYER

function crearCartaJugador() {
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
  if (baraja.carta[10] == cartaAleatoria) {
    puntuacionJugador += 11;
    let valor11 = ["J", "Q", "K"];
    let cartaValor11 = valor11[Math.floor(Math.random() * 3)];
    imagenCarta.src = `.\\utils\\images\\images\\${cartaValor11}${paloAleatorio}.png`;
  } else {
    puntuacionJugador += cartaAleatoria;
    imagenCarta.src = `.\\utils\\images\\images\\${cartaAleatoria}${paloAleatorio}.png`;
  }
  function girarCarta() {
    contenedorAtras.style.transform = "rotateY(180deg)";
  }
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
