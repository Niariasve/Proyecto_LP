document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    actualizarCarrito();
    asginarOperaciones();
    comprar();
}

function actualizarCarrito() {
    calcularSubtotal();
    asignarCantidad();
    calcularTotal();
}

function calcularSubtotal() {
    const precios = document.querySelectorAll('.producto-total');
    const subTotal = document.querySelector('.producto-subtotal');
    let subTotalInt = 0;

    precios.forEach(precio => {
        subTotalInt += parseInt(precio.innerHTML);
    })

    subTotal.innerHTML = subTotalInt;
}

function asginarOperaciones() {
    const cantidadBoton = document.querySelectorAll('.cantidad-boton');
    const precioFinal = document.querySelectorAll('.producto-total');
    const precioOriginal = document.querySelectorAll('.producto-precio');
    let c = 0;
    cantidadBoton.forEach(div => {
        const botonSuma = div.children[0];
        const valor = div.children[1];
        const botonResta = div.children[2];
        let total = precioFinal[c];
        let precio = precioOriginal[c];
        let cantidad = parseInt(valor.innerHTML);

        botonSuma.addEventListener('click', function() {
            valor.innerHTML = parseInt(valor.innerHTML) + 1;
            total.innerHTML = parseInt(valor.innerHTML) * parseInt(precio.innerHTML);
            calcularSubtotal();
            asignarCantidad();
            calcularTotal();
        })

        botonResta.addEventListener('click', function() {
            if (cantidad > 0) {
                valor.innerHTML = parseInt(valor.innerHTML) - 1;                
                total.innerHTML = parseInt(valor.innerHTML) * parseInt(precio.innerHTML);
                calcularSubtotal();
                asignarCantidad();
                calcularTotal();
            }
        })
        c++;
    })
}

function asignarCantidad() {
    const botonCantidad = document.querySelectorAll('.cantidad-boton');
    let itemsTotales = 0;

    const itemsTotalesHTML = document.querySelector('.total-productos');
    botonCantidad.forEach(div => {
        const cantidad = div.children[1].innerHTML;
        itemsTotales += parseInt(cantidad);
    })

    itemsTotalesHTML.innerHTML = itemsTotales;
}

function calcularTotal() {
    const totalesPorProducto = document.querySelectorAll('.producto-total');
    let valorTotal = 0;
    
    const valorTotalHTML = document.querySelector('.total');

    totalesPorProducto.forEach(html => {
        valorTotal += parseInt(html.innerHTML);
    })

    valorTotalHTML.innerHTML = valorTotal + valorTotal * 0.12;
}

function comprar() {
    const comprar = document.getElementById('comprar');
    comprar.addEventListener('click', () => {
        alert('La compra se ha realizado correctamente');
    });
}