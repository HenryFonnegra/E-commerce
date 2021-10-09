// Validacion formulario de vendedor
var Marca = document.getElementById('Marca');
var Nombre = document.getElementById('Nombre');
var Modelo = document.getElementById('Modelo');
var Precio = document.getElementById('Precio');
var file = document.getElementById('file');
var Descripción = document.getElementById('Descripción');

var errorProducto = document.getElementById('errorProducto');
errorProducto.style.color = 'red';

var formProducto = document.getElementById('ProductoCreate');

formProducto.addEventListener('submit', function(evtProducto){
    evtProducto.preventDefault();

    var mensajeErrorProducto = [];

    if (Marca.value === null || Marca.value === '') {
        mensajeErrorProducto.push('Por favor ingrese la marca del producto')
    }
    if (Nombre.value === null || Nombre.value === '') {
        mensajeErrorProducto.push('Por favor ingrese el nombre del producto')
    }
    if (Modelo.value === null || Modelo.value === '') {
        mensajeErrorProducto.push('Por favor ingrese el modelo del producto')
    }
    if (Precio.value === null || Precio.value === '') {
        mensajeErrorProducto.push('Por favor ingrese el precio del producto')
    }
    if (Descripción.value === null || Descripción.value === '') {
        mensajeErrorProducto.push('Por favor proporcione una breve descripcion del producto')
    }

    errorProducto.innerHTML = mensajeErrorProducto.join(' - ');

});