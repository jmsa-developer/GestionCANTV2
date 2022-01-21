const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	idservicio: /^.{4,10}$/,
	nombre: /^[a-zA-ZÀ-ÿ\s]{2,16}$/, // Letras y espacios, pueden llevar acentos.
	tipo: /^[a-zA-ZÀ-ÿ\s]{2,16}$/, // Letras y espacios, pueden llevar acentos.
	costo: /^.{1,10}$/, // 7 a 14 Letras y espacios, pueden llevar acentos y numeros.
	
}


const campos = {

	idservicio: false,
	nombre: false,
	tipo: false,
	costo: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {

		case "idservicio":
		validarCampo(expresiones.idservicio, e.target, 'idservicio');
		break;
	
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;

		case "tipo":
			validarCampo(expresiones.tipo, e.target, 'tipo');
		break;

		case "costo":
			validarCampo(expresiones.costo, e.target, 'costo');
		break;


	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.idservicio && campos.nombre && campos.tipo && campos.costo ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});