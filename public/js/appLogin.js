// validacion de login
var email = document.getElementById('email');
var password = document.getElementById('password');

var error = document.getElementById('error');
error.style.color = 'red';

var form = document.getElementById('Login');

form.addEventListener('submit', function(evet){
    evet.preventDefault();

    var mensajeError = [];

    if (email.value === null || email.value === '') {
        mensajeError.push('Por favor ingrese una direccion de correo electronico valida')
    }

    if (password.value === null || password.value === '') {
        mensajeError.push('Por favor ingrese su contraseña')
    }
    
    error.innerHTML = mensajeError.join(' - ');
});
