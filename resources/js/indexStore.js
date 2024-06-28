//alert('Hola mundo');

const btnCart = document.querySelector('.container-cart-icon');
const containerCartProducts = document.querySelector('.container-cart-products')

btnCart.addEventListener('click', () => {
    //alert('Funciona')
    containerCartProducts.classList.toggle('hidden-cart')
});

/* =================================================================================== */
const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');

// Product Container (List)
const productList = document.querySelector('.container-items');

// Product Array (Variable)
let allProducts = [];
const valorTotal = document.querySelector('.total-pagar');
const contadorProductos = document.querySelector('#contador-productos')



















productList.addEventListener('click', (e) => {
    //console.log(e);
    //console.log(e.target);              // Muetra el elemento del html ('click)
    //console.log(e.target.classList);            // Muestra la clase del elemento
    //console.log(e.target.classList.contains('price'));  // Devuelve False or true (class='price')
    console.log(e.target.classList.contains('btn-add-cart'));   // Devuelve False or true (class='btn-add-cart')

    if (e.target.classList.contains('btn-add-cart')) {
        console.log(e.target.parentElement); // Obtine datos del <div> Padre
        const product = e.target.parentElement;
        //console.log(product.querySelector('h2'));    // Muestra el h2 del <div> Padre
        //console.log(product.querySelector('h2').textContent);   // Muestra el texto de <h2>
        //console.log(product.querySelector('p').textContent);    // Muestra el texto de <p>
        const infoProduct = {
            cantidad: 1,
            titulo: product.querySelector('h2').textContent,
            precio: product.querySelector('p').textContent,
            precioProducto: product.querySelector('p').textContent,
        }
        const infoPrecio = product.querySelector('p').textContent;
        console.log("Precio: "+infoPrecio);


        const exits = allProducts.some(product => product.titulo === infoProduct.titulo) //Compra existencia - return false or true
        console.log("Existencia: "+exits); //Return false or true

        
        if (exits) {
            const productos = allProducts.map(product => {
                if (product.titulo === infoProduct.titulo) {
                    product.cantidad++;
                    // begin price
                    console.log("PRECIO INPUT: "+infoPrecio);
                    subtotal = parseFloat(infoPrecio.slice(1)) * product.cantidad;
                    console.log("Subtotal: "+subtotal);
                    product.precio = "$"+subtotal.toFixed(2);
                    console.log("PRECIO OUTPUT: "+product.precio);
                    // end price
                    return product;
                } else {
                    return product;
                }
            });
            allProducts = [...productos];
        } else {
            allProducts = [...allProducts, infoProduct];
        }
        showHTML(); //Insertando html
        console.log(infoProduct);
        console.log(allProducts);
    }
});



// Eliminar elemento del carrito
rowProduct.addEventListener('click', (e) => {
    if (e.target.classList.contains('icon-close')) {
        const product__ = e.target.parentElement;
        //console.log(product);
        const titulo__ = product__.querySelector('p').textContent;
        //console.log(titulo);

        allProducts = allProducts.filter( product => product.titulo !== titulo__);
        console.log(allProducts);
        showHTML();
    }
});




// Funcion para insertar al HTML
const showHTML = () => {

    rowProduct.innerHTML='';    // borra el 1er elememto del carrito

    if (!allProducts.length) {
        rowProduct.innerHTML = `<p class="cart-empty">El carrito está vacio</p>`;
    }

    let total = 0;
    let totalOfProducts = 0;

    allProducts.forEach(product => {
        const containerProduct = document.createElement('div');
        containerProduct.classList.add('cart-product');

        containerProduct.innerHTML = `
        <div class="info-cart-product">
        <span class="cantidad-producto-carrito">${product.cantidad}</span>
        <p class="titulo-producto-carrito">${product.titulo}</p>
        <span class="precio-producto-carrito">${product.precio}</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        `
        // inseta elemento HTML
        rowProduct.append(containerProduct);
        // operacion
        total = total + parseFloat(/*product.cantidad */ product.precio.slice(1));
        totalOfProducts = totalOfProducts + product.cantidad;
    });
    valorTotal.innerText = `$${total.toFixed(2)}`
    console.log(total);
    contadorProductos.innerText = totalOfProducts;
}