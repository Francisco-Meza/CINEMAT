const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    numero: /^([0-9\:])*$/
}
const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}
const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
        case "idioma":
            validarCampo(expresiones.nombre, e.target, 'idioma');
        break;
        case "duración":
            validarCampo(expresiones.numero, e.target, 'duración');
        break;
        case "clasificacion":
            validarCampo(expresiones.nombre, e.target, 'clasificacion');
        break;
        case "genero":
            validarCampo(expresiones.nombre, e.target, 'genero');
        break;
        case "formato":
            validarCampo(expresiones.nombre, e.target, 'formato');
        break;case "formato":
            validarCampo(expresiones.nombre, e.target, 'formato');
        break;
        case "precio":
            validarCampo(expresiones.numero, e.target, 'precio');
        break;
	}
}
const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
        document.getElementById(campo).style.border = '5px solid green';
		/*document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;*/
	} else {
        document.getElementById(campo).style.border = '5px solid RED';
		/*document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;*/
	}
}
inputs.forEach((input) =>{
    input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});
formulario.addEventListener('submit',(e) =>{
    e.preventDefault();
});