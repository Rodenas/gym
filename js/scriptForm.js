window.addEventListener('load', inicio);

function inicio() {
    //console.log('Hola Peter');
    document.getElementById('btn-form').addEventListener('click', llamarOtraPagina);
}

function llamarOtraPagina(e) {
    e.preventDefault();
    window.location = 'form_registro.html';
}