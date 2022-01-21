const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {

	costo: /^.{1,10}$/, // 7 a 14 numeros.
	duracion: /^.{1,10}$/, // 7 a 14 Letras y espacios, pueden llevar acentos y numeros.
	instructor: /^[a-zA-ZÀ-ÿ\s]{2,16}$/,

	//fecha: /^\d{7,14}$/, // 7 a 14 numeros.

}


const campos = {

	costo: false,
	duracion: false,
	instructor: false,
	//fecha: false,

}

const validarFormulario = (e) => {
	switch (e.target.name) {
	
		case "costo":
			validarCampo(expresiones.costo, e.target, 'costo');
		break;

		case "duracion":
			validarCampo(expresiones.duracion, e.target, 'duracion');
		break;

		case "instructor":
			validarCampo(expresiones.instructor, e.target, 'instructor');
		break;
/*		case "fecha":
			validarCampo(expresiones.fecha, e.target, 'fecha');
		break;*/
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
	if(campos.costo && campos.duracion && campos.instructor ){
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