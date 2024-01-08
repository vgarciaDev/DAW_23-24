let seleccion1 = document.querySelector("#select1");
let seleccion2 = document.querySelector("#select2");
let boton = document.querySelector("#boton");
let resultado = document.querySelector(".resultado");

boton.addEventListener("click", () => {
  let input = document.querySelector("#num1").value;
  let li = document.createElement("li");
  if (seleccion1.value == "tonelada") {
    switch (seleccion2.value) {
      case "tonelada":
        let valorTon = 1;
        li.innerHTML = `${input} Tonelada = ${valorTon * input} Tonelada`;
        resultado.appendChild(li);
        break;
      case "kilogramo":
        let valorKg = 1000;
        li.innerHTML = `${input} Tonelada = ${valorKg * input} Kilogramo`;
        resultado.appendChild(li);
        break;
      case "gramo":
        let valorGr = 1e6;
        li.innerHTML = `${input} Tonelada = ${valorGr * input} Gramo`;
        resultado.appendChild(li);
        break;
      case "miligramo":
        let valorMg = 1e9;
        li.innerHTML = `${input} Tonelada = ${valorMg * input} Miligramo`;
        resultado.appendChild(li);
        break;
      case "microgramo":
        let valorMcg = 1e12;
        li.innerHTML = `${input} Tonelada = ${valorMcg * input} Microgramo`;
        resultado.appendChild(li);
        break;
      case "toneladaLarga":
        let valorTL = 1.016;
        li.innerHTML = `${input} Tonelada = ${input / valorTL} Tonelada Larga`;
        resultado.appendChild(li);
        break;
      case "toneladaCorta":
        let valorTC = 1.102;
        li.innerHTML = `${input} Tonelada = ${valorTC * input} Tonelada Corta`;
        resultado.appendChild(li);
        break;
      case "stone":
        let valorStone = 157.5;
        li.innerHTML = `${input} Tonelada = ${valorStone * input} Stone`;
        resultado.appendChild(li);
        break;
      case "libra":
        let valorLib = 2205;
        li.innerHTML = `${input} Tonelada = ${valorLib * input} Libra`;
        resultado.appendChild(li);
        break;
      case "onza":
        let valorOn = 35270;
        li.innerHTML = `${input} Tonelada = ${valorOn * input} Onza`;
        resultado.appendChild(li);
        break;
    }
  } else if (seleccion1.value == "kilogramo") {
    switch (seleccion2.value) {
      case "tonelada":
        let valorTon = 0.001;
        li.innerHTML = `${input} Kilogramo = ${valorTon * input} Tonelada`;
        resultado.appendChild(li);
        break;
      case "kilogramo":
        let valorKg = 1;
        li.innerHTML = `${input} Kilogramo = ${valorKg * input} Kilogramo`;
        resultado.appendChild(li);
        break;
      case "gramo":
        let valorGr = 1000;
        li.innerHTML = `${input} Kilogramo = ${valorGr * input} Gramo`;
        resultado.appendChild(li);
        break;
      case "miligramo":
        let valorMg = 1e6;
        li.innerHTML = `${input} Kilogramo = ${valorMg * input} Miligramo`;
        resultado.appendChild(li);
        break;
      case "microgramo":
        let valorMcg = 1e9;
        li.innerHTML = `${input} Kilogramo = ${valorMcg * input} Microgramo`;
        resultado.appendChild(li);
        break;
      case "toneladaLarga":
        let valorTL = 1016;
        li.innerHTML = `${input} Kilogramo = ${input / valorTL} Tonelada Larga`;
        resultado.appendChild(li);
        break;
      case "toneladaCorta":
        let valorTC = 907.2;
        li.innerHTML = `${input} Kilogramo = ${input / valorTC} Tonelada Corta`;
        resultado.appendChild(li);
        break;
      case "stone":
        let valorStone = 6.35;
        li.innerHTML = `${input} Kilogramo = ${input / valorStone} Stone`;
        resultado.appendChild(li);
        break;
      case "libra":
        let valorLib = 2.205;
        li.innerHTML = `${input} Kilogramo = ${valorLib * input} Libra`;
        resultado.appendChild(li);
        break;
      case "onza":
        let valorOn = 35.274;
        li.innerHTML = `${input} Kilogramo = ${valorOn * input} Onza`;
        resultado.appendChild(li);
        break;
    }
  } else if (seleccion1.value == "gramo") {
    switch (seleccion2.value) {
      case "tonelada":
        let valorTon = 1e6;
        li.innerHTML = `${input} Gramo = ${input / valorTon} Tonelada`;
        resultado.appendChild(li);
        break;
      case "kilogramo":
        let valorKg = 1000;
        li.innerHTML = `${input} Gramo = ${input / valorKg} Kilogramo`;
        resultado.appendChild(li);
        break;
      case "gramo":
        let valorGr = 1;
        li.innerHTML = `${input} Gramo = ${valorGr * input} Gramo`;
        resultado.appendChild(li);
        break;
      case "miligramo":
        let valorMg = 1000;
        li.innerHTML = `${input} Gramo = ${valorMg * input} Miligramo`;
        resultado.appendChild(li);
        break;
      case "microgramo":
        let valorMcg = 1e6;
        li.innerHTML = `${input} Gramo = ${valorMcg * input} Microgramo`;
        resultado.appendChild(li);
        break;
      case "toneladaLarga":
        let valorTL = 1.016e6;
        li.innerHTML = `${input} Gramo = ${input / valorTL} Tonelada Larga`;
        resultado.appendChild(li);
        break;
      case "toneladaCorta":
        let valorTC = 907200;
        li.innerHTML = `${input} Gramo = ${input / valorTC} Tonelada Corta`;
        resultado.appendChild(li);
        break;
      case "stone":
        let valorStone = 6350;
        li.innerHTML = `${input} Gramo = ${input / valorStone} Stone`;
        resultado.appendChild(li);
        break;
      case "libra":
        let valorLib = 453.6;
        li.innerHTML = `${input} Gramo = ${input / valorLib} Libra`;
        resultado.appendChild(li);
        break;
      case "onza":
        let valorOn = 28.35;
        li.innerHTML = `${input} Gramo = ${input / valorOn} Onza`;
        resultado.appendChild(li);
        break;
    }
  }
});
