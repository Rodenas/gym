window.addEventListener("load", inicio);

function inicio() {
    console.log("Que hace nene");
    //window.addEventListener("click", envioMensaje(evento));
    document.getElementById("btn-enviar").addEventListener("click", envioMensaje);
    document.getElementById("btn-volver").addEventListener("click", volverAInicio);
}

function pruebaExterna() {
    alert('al actualizar Un mensaje de prueba desde un archivo externo');
}

function envioMensaje(e) {
    e.preventDefault();
    console.log("HOLA");
    let txtNombre = document.getElementById('txtNombre');
    let txtEmail = document.getElementById('txtEmail');
    let txtConsulta = document.getElementById('txtConsulta');
    if (txtNombre.value == "") {
        txtNombre.value = "Este campo no puede estar vacio";
    }
    if (txtEmail.value == "") {
        txtEmail.value = "Este campo no puede estar vacio";
    }
    if (txtConsulta.value == "") {
        txtConsulta.value = "Este campo no puede estar vacio";
    }

}

function volverAInicio() {
    window.location = "index.html";
}