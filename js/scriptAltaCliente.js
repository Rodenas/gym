window.addEventListener('load', inicio);

function inicio() {
    document.getElementById('btn-validacion').addEventListener('click', validacion);
    document.getElementById('val-estatura').addEventListener('blur', calcularIMC);
}

function calcularIMC() {
    let peso = document.getElementById('val-peso').value;
    let estatura = document.getElementById('val-estatura').value;
    let IMC = peso / (estatura * estatura);
    //console.log(peso + estatura);
    console.log("El indice de masa corporal es: " + IMC);
    document.getElementById("imc").value = IMC.toFixed(2);
    mostrarEstado(IMC);
}

function mostrarEstado(IMC) {
    if (IMC < 18.5) { //Peso inferior al normal
        document.getElementById('estado').value = "Peso inferior al normal";
    } else if (IMC >= 18.5 && IMC < 24.9) { //Peso normal
        document.getElementById('estado').value = "Peso normal";
    } else if (IMC >= 25.0 && IMC < 29.9) { //Como has engordado Davidcito
        document.getElementById('estado').value = "Peso superior al normal";
    } else { //obesidad
        document.getElementById('estado').value = "Obesidad";
    }

}

// Example starter JavaScript for disabling form submissions if there are invalid fields
function validacion() {
    //'use strict'
    console.log('hola peter');
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
}