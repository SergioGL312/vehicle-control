window.onload = init;
var paramURL = new URLSearchParams(window.location.search);
var rol = paramURL.get('rol');
localStorage.setItem("rol", rol);
const insertar  = document.getElementsByClassName('insertar');
const consultar  = document.getElementsByClassName('consultar');
const editar  = document.getElementsByClassName('editar');
const borrar  = document.getElementsByClassName('borrar');

function init() {
    if (rol == 'U') {
        for (const key of insertar) {
            key.classList.toggle('hide');
        }
        for (const key of editar) {
            key.classList.toggle('hide');
        }
        for (const key of borrar) {
            key.classList.toggle('hide');
        }
    }
}


