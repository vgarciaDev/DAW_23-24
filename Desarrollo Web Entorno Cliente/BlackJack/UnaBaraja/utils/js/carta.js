//CLASE CARTA

class Carta {
  representacion;
  valor;
  imagen;

  constructor(representacion) {
    this.representacion = representacion;
    this.valor = this.setValor(representacion);
    this.imagen = this.setImagen(representacion);
  }

  setValor(representacion) {
    if (representacion.length == 3) {
      let array1 = representacion.split("");
      this.valor = Number(array1[0] + array1[1]);
      if (this.valor == 12 || this.valor == 13) {
        this.valor = 11;
      }
    } else {
      let array2 = representacion.split("");
      this.valor = Number(array2[0]);
    }
  }

  setImagen(representacion) {
    if (representacion.includes("11")) {
      let arrayJ = representacion.split("");
      arrayJ.shift();
      arrayJ[0] = "J";
      let j = arrayJ.join("");
      this.imagen = `.\\utils\\images\\images\\${j}.png`;
    } else if (representacion.includes("12")) {
      let arrayQ = representacion.split("");
      arrayQ.shift();
      arrayQ[0] = "Q";
      let q = arrayQ.join("");
      this.imagen = `.\\utils\\images\\images\\${q}.png`;
    } else if (representacion.includes("13")) {
      let arrayK = representacion.split("");
      arrayK.shift();
      arrayK[0] = "K";
      let k = arrayK.join("");
      this.imagen = `.\\utils\\images\\images\\${k}.png`;
    } else {
      this.imagen = `.\\utils\\images\\images\\${representacion}.png`;
    }
  }

  get getRepresentacion() {
    return this.representacion;
  }

  get getValor() {
    return this.valor;
  }

  get getImagen() {
    return this.imagen;
  }
}

export { Carta };
