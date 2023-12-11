"use strict";
let numero = document.querySelectorAll(".numero");
let resultado = document.querySelector("#resultado");
let sumar = document.querySelector(".item15");
let restar = document.querySelector(".item13");
let multiplicar = document.querySelector(".item9");
let dividir = document.querySelector(".item5");
let igual = document.querySelector(".item16");
let borrarParcial = document.querySelector(".item17");
let borrarTotal = document.querySelector(".item18");
let lista = document.querySelector("#operaciones");
let contador = 0;
let operador = "";
let num1 = 0;
let num2 = 0;

function limpiar() {
  resultado.textContent = "";
}

borrarTotal.addEventListener("click", () => {
  resultado.textContent = "";
  contador = 0;
  num1 = 0;
  num2 = 0;
});

borrarParcial.addEventListener("click", () => {
  resultado.textContent = "";
  if (contador === 0) {
    num1 = 0;
  } else {
    num2 = 0;
  }
});

numero.forEach((element) => {
  element.addEventListener("click", () => {
    resultado.textContent += element.value;
    if (contador === 0) {
      num1 = parseInt(resultado.value);
    } else if (contador === 1) {
      num2 = parseInt(resultado.value);
    }
  });
});

sumar.addEventListener("click", () => {
  resultado.textContent = "";
  contador = 1;
  operador = "+";
});

restar.addEventListener("click", () => {
  resultado.textContent = "";
  contador = 1;
  operador = "-";
});

multiplicar.addEventListener("click", () => {
  resultado.textContent = "";
  contador = 1;
  operador = "*";
});

dividir.addEventListener("click", () => {
  resultado.textContent = "";
  contador = 1;
  operador = "/";
});

igual.addEventListener("click", () => {
  let elemento = document.createElement("li");
  switch (operador) {
    case "+":
      let suma = num1 + num2;

      elemento.innerHTML = `${num1} + ${num2} = ${suma}`;
      lista.appendChild(elemento);
      contador = 0;
      break;
    case "-":
      let resta = num1 - num2;
      elemento.innerHTML = `${num1} - ${num2} = ${resta}`;
      lista.appendChild(elemento);
      contador = 0;
      break;
    case "*":
      let multiplicacion = num1 * num2;
      elemento.innerHTML = `${num1} * ${num2} = ${multiplicacion}`;
      lista.appendChild(elemento);
      contador = 0;
      break;
    case "/":
      let division = num1 / num2;
      elemento.innerHTML = `${num1} / ${num2} = ${division}`;
      lista.appendChild(elemento);
      contador = 0;
      break;
  }
  limpiar();
});
