// Validacion formulario de usuario
var id = document.getElementById('id');
var Tipo_documento = document.getElementById('Tipo_documento');
var P_nombre = document.getElementById('P_nombre');
var S_nombre = document.getElementById('S_nombre');
var P_apellido = document.getElementById('P_apellido');
var S_apellido = document.getElementById('S_apellido');
var email = document.getElementById('email');
var password = document.getElementById('password');

var error = document.getElementById('error');
error.style.color = 'red';

var form = document.getElementById('UsuarioCreate');

form.addEventListener('submit', function(evt){
    evt.preventDefault();

    var mensajeError = [];

    if (id.value === null || id.value === '') {
        mensajeError.push('Por favor ingrese su numero de identificacion')
    }
    if (P_nombre.value === null || P_nombre.value === '') {
        mensajeError.push('Por favor ingrese su nombre')
    }
    if (P_apellido.value === null || P_apellido.value === '') {
         mensajeError.push('Por favor ingrese su apellido')
    }
    if (email.value === null || email.value === '') {
        mensajeError.push('Por favor ingrese una direccion de correo electronico')
    }
   if (password.value === null || password.value === '') {
    mensajeError.push('Por favor ingrese una contraseña')
    }

    error.innerHTML = mensajeError.join(' - ');
});