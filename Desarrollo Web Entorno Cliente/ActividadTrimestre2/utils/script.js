let precio = document.querySelector("#precio");
let categoria = document.querySelector("#categoria");
let marca = document.querySelector("#marca");
let filtrar = document.querySelector("#filtrar");
let resultados = document.querySelector("#resultados");
let carrito = document.querySelector(".carrito");
let precioFiltro;
let categoriaFiltro;
let marcaFiltro;
let total = 0;
let totalCarrito = document.querySelector("#totalCarrito");

let url = "https://dummyjson.com/products";

let comprar = document.querySelector("#comprar");

categoria.addEventListener("input", () => {
  getBrand(url);
});

window.addEventListener("load", () => {
  getProducts(url);
  getBrand(url);
});

filtrar.addEventListener("click", () => {
  precioFiltro = parseInt(precio.value);
  categoriaFiltro = categoria.value;
  marcaFiltro = marca.value;
  getFilteredProducts();
  console.log(precioFiltro);
});

//Función para obtener todos los productos cuando carga la página
async function getProducts(url) {
  resultados.innerHTML = "";
  let res = await fetch(url);
  let res1 = await res.json();
  res1.products.forEach((element, index) => {
    resultados.innerHTML += `
            <div class="col-3 mt-4">
              <div class="card carta " style="width: 15rem">
                <img src="${element.images[0]}" class="card-img-top animate__animated animate__fadeIn" alt="..."/>
                <div class="card-body">
                  <h5 class="card-title">${element.title}</h5>
                  <p class="card-text">Precio: ${element.price}€</p>
                  <p class="card-text">Categoría: ${element.category}</p>
                  <a href="#" class="btn btn-primary" id ="anadirCarrito">Añadir al Carrito</a>
                </div>
              </div>
            </div>
    `;
    setTimeout(() => {}, 100 * index);
  });
  addToCartAll(res1);
}

//Función para filtrar productos
async function getFilteredProducts() {
  resultados.innerHTML = "";
  //Si solo hay un precio marcado
  if (categoriaFiltro == "" && marcaFiltro == "") {
    let url = "https://dummyjson.com/products";
    let res = await fetch(url);
    let res1 = await res.json();
    let precio = res1.products.filter((item) => {
      return precioFiltro < item.price;
    });
    console.log(precio);
    precio.forEach((element) => {
      resultados.innerHTML += `
        <div class="col-3 mt-4">
          <div class="card carta " style="width: 15rem">
            <img src="${element.images[0]}" class="card-img-top animate__animated animate__fadeIn" alt="..."/>
            <div class="card-body">
              <h5 class="card-title">${element.title}</h5>
              <p class="card-text">Precio: ${element.price}€</p>
              <p class="card-text">Categoría: ${element.category}</p>
              <a href="#" class="btn btn-primary" id ="anadirCarrito">Añadir al Carrito</a>
            </div>
          </div>
        </div>
        `;
    });
    addToCartFilter(precio);
    //Si hay un precio y una categoria marcada
  } else if (categoriaFiltro != "" && marcaFiltro == "") {
    let url = `https://dummyjson.com/products/category/${categoriaFiltro}`;
    let res = await fetch(url);
    let res1 = await res.json();
    let categoria = res1.products.filter((item) => {
      return precioFiltro < item.price && categoriaFiltro == item.category;
    });
    categoria.forEach((element) => {
      resultados.innerHTML += `
            <div class="col-3 mt-4">
              <div class="card carta " style="width: 15rem">
                <img src="${element.images[0]}" class="card-img-top animate__animated animate__fadeIn" alt="..."/>
                <div class="card-body">
                  <h5 class="card-title">${element.title}</h5>
                  <p class="card-text">Precio: ${element.price}€</p>
                  <p class="card-text">Categoría: ${element.category}</p>
                  <a href="#" class="btn btn-primary" id ="anadirCarrito">Añadir al Carrito</a>
                </div>
              </div>
            </div>
        `;
    });
    addToCartFilter(categoria);
    //Si hay un precio, categoria y marca marcada
  } else if (categoriaFiltro != "" && marcaFiltro != "") {
    let url = `https://dummyjson.com/products/category/${categoriaFiltro}`;
    let res = await fetch(url);
    let res1 = await res.json();
    let todo = res1.products.filter((item) => {
      return precioFiltro < item.price && categoriaFiltro == item.category && marcaFiltro == item.brand;
    });
    todo.forEach((element) => {
      resultados.innerHTML += `
            <div class="col-3 mt-4">
              <div class="card carta " style="width: 15rem">
                <img src="${element.images[0]}" class="card-img-top animate__animated animate__fadeIn" alt="..."/>
                <div class="card-body">
                  <h5 class="card-title">${element.title}</h5>
                  <p class="card-text">Precio: ${element.price}€</p>
                  <p class="card-text">Categoría: ${element.category}</p>
                  <a href="#" class="btn btn-primary" id ="anadirCarrito">Añadir al Carrito</a>
                </div>
              </div>
            </div>
        `;
    });
    addToCartFilter(todo);
    //Si solo hay marca marcada
  } else if (categoriaFiltro == "" && marcaFiltro != "") {
    let url = `https://dummyjson.com/products`;
    let res = await fetch(url);
    let res1 = await res.json();
    let marca = res1.products.filter((item) => {
      return precioFiltro < item.price && marcaFiltro == item.brand;
    });
    marca.forEach((element) => {
      resultados.innerHTML += `
              <div class="col-3 mt-4">
                <div class="card carta " style="width: 15rem">
                  <img src="${element.images[0]}" class="card-img-top animate__animated animate__fadeIn" alt="..."/>
                  <div class="card-body">
                    <h5 class="card-title">${element.title}</h5>
                    <p class="card-text">Precio: ${element.price}€</p>
                    <p class="card-text">Categoría: ${element.category}</p>
                    <a href="#" class="btn btn-primary" id ="anadirCarrito">Añadir al Carrito</a>
                  </div>
                </div>
              </div>
          `;
    });
    addToCartFilter(marca);
  }
}

//Funciones para añadir al carrito
function addToCartAll(item) {
  let botones = document.querySelectorAll("#anadirCarrito");
  botones.forEach((element, index) => {
    element.addEventListener("click", () => {
      totalCarrito.innerHTML = "";
      total += item.products[index].price;
      console.log(total);
      totalCarrito.innerHTML = `Total Carrito: ${total}€`;
      carrito.innerHTML += `<li>${item.products[index].title} - ${item.products[index].price}€</li>`;
      Swal.fire({
        position: "top",
        icon: "success",
        title: "Añadido al carrito",
        showConfirmButton: false,
        timer: 900,
        showClass: {
          popup: `
            animate__animated
            animate__fadeInUp
            animate__faster
          `,
        },
        hideClass: {
          popup: `
            animate__animated
            animate__fadeOutDown
            animate__faster
          `,
        },
      });
    });
  });
}

function addToCartFilter(item) {
  let botones = document.querySelectorAll("#anadirCarrito");
  botones.forEach((element, index) => {
    element.addEventListener("click", () => {
      totalCarrito.innerHTML = "";
      total += item[index].price;
      console.log(total);
      totalCarrito.innerHTML = `Total Carrito: ${total}€`;
      carrito.innerHTML += `<li>${item[index].title} - ${item[index].price}€</li>`;

      Swal.fire({
        position: "top",
        icon: "success",
        title: "Añadido al carrito",
        showConfirmButton: false,
        timer: 900,
        showClass: {
          popup: `
            animate__animated
            animate__fadeInUp
            animate__faster
          `,
        },
        hideClass: {
          popup: `
            animate__animated
            animate__fadeOutDown
            animate__faster
          `,
        },
      });
    });
  });
}

//Realizar Compra
comprar.addEventListener("click", () => {
  let realizarCompra = Swal.fire({
    title: "Realizar Compra",
    text: `Vas a realizar una compra por valor de ${total}€ ¿Estás seguro?`,
    icon: "question",
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
    showCancelButton: true,
    showCloseButton: true,
  });
  realizarCompra.then((resultado) => {
    if (resultado.value) {
      totalCarrito.innerHTML = `Total Carrito: 0€`;
      total = 0;
      carrito.innerHTML = "";
      Swal.fire({
        title: "Compra realizada!",
        text: "Gracias por comprar con nosotros",
        icon: "success",
      });
    }
  });
});

//Esta función hace que te salga la marca del producto acorde con la categoría que has seleccionado, así nunca podrá salir un comestible de marca Apple por ejemplo.
async function getBrand(url) {
  marca.innerHTML = "";
  marca.innerHTML = `<option value="" selected>Seleccione una marca</option>`;
  let res = await fetch(url);
  let res1 = await res.json();
  res1.products.forEach((element) => {
    switch (categoria.value) {
      case "smartphones":
        for (let i = 2; i < 6; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
      case "laptops":
        for (let i = 6; i < 11; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
      case "fragrances":
        for (let i = 11; i < 16; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
      case "skincare":
        for (let i = 16; i < 21; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
      case "groceries":
        for (let i = 21; i < 26; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
      case "home-decoration":
        for (let i = 26; i < 31; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
      case "":
        for (let i = 0; i < res1.products.length; i++) {
          if (element.id == i) {
            marca.innerHTML += `<option value="${element.brand}">${element.brand}</option>`;
          }
        }
        break;
    }
  });
}
