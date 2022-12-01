const inputs = document.querySelectorAll('.formulario input');
var mapResultado = new Map();
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    numero: /^([0-9\:])*$/
}
error = 0;
function validar() {
    password = "";
    resultado = false;
    for (let i = 0; i < inputs.length; i++) {
        switch (inputs[i].name) {
            case "nombre":
                resultado = (expresiones.nombre.test(inputs[i].value)) ? true : false;
                break;
            case "apellido":
                resultado = (expresiones.nombre.test(inputs[i].value)) ? true : false;
                break;
            case "fecha_Nac":
                resultado = true;
                break;
            case "correo":
                resultado = (expresiones.correo.test(inputs[i].value)) ? true : false;
                break;
            case "password":
                resultado = (expresiones.password.test(inputs[i].value)) ? true : false;
                password = inputs[i].value;
                break;
            case "password2":
                resultado = (password == inputs[i].value && password != "") ? true : false;
                break;
            default: resultado = true;
                break;
        }
        if (mapResultado.size < 6) {
            mapResultado.set(inputs[i].name, resultado);
            if (!mapResultado.get(inputs[i].name)) {
                incorrecto(inputs[i].name);
                error++;
            }
        } else {
            if (mapResultado.get(inputs[i].name) != resultado) {
                if (resultado) {
                    correcto(inputs[i].name);
                    error--;
                } else {
                    incorrecto(inputs[i].name);
                    error++;
                }
                mapResultado.set(inputs[i].name, resultado);
            }
        }
    }
    resultado = (error == 0) ? true:false;
    return resultado;
}
function incorrecto(name) {
    document.getElementById(`grupo__${name}`).classList.add('formulario__grupo-incorrecto');
    document.querySelector(`#grupo__${name} i`).classList.replace('formulario__error', 'formulario__error-activado');
    document.querySelector(`#grupo__${name} .formulario__grupo-error`).classList.replace('formulario__grupo-error', 'formulario__grupo-error-activado');
}
function correcto(name) {
    document.getElementById(`grupo__${name}`).classList.remove('formulario__grupo-incorrecto');
    document.querySelector(`#grupo__${name} i`).classList.replace('formulario__error-activado', 'formulario__error');
    document.querySelector(`#grupo__${name} .formulario__grupo-error-activado`).classList.replace('formulario__grupo-error-activado', 'formulario__grupo-error');
}