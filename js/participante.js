const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {

	nombre: /^[a-zA-ZÀ-ÿ\s]{2,30}$/, // Letras y espacios, pueden llevar acentos.
	apellido: /^[a-zA-ZÀ-ÿ\s]{2,30}$/, // Letras y espacios, pueden llevar acentos.
	cedula: /^\d{7,8}$/,  // 7 a 14 numeros.
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	direccion: /^.{1,60}$/, // 7 a 14 Letras y espacios, pueden llevar acentos y numeros.
	correo:  /^[a-zA-Z0-9_.+*$%-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,//correo

	//fecha: /^\d{7,14}$/, // 7 a 14 numeros.

}
var campoInicial = false
if(typeof id != 'undefined'){
	campoInicial = true;
}
const campos = {
	nombre: campoInicial,
	apellido: campoInicial,
	cedula: campoInicial,
	telefono: campoInicial,
	direccion: campoInicial,
	correo: campoInicial,
	//fecha: campoInicial,

}
const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;

		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;

		case "cedula":
			validarCampo(expresiones.cedula, e.target, 'cedula');
		break;

		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;

		case "direccion":
			validarCampo(expresiones.direccion, e.target, 'direccion');
		break;

		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
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

	if(campos.nombre && campos.apellido && campos.cedula && campos.telefono && campos.direccion && campos.correo ){
		// formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
		let datos = new FormData(document.getElementById('formulario'));
		if(typeof id != 'undefined'){
			datos.append('id', id);
		}
		enviarDatos(datos);
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});

const enviarDatos = (datos) => {
	$.ajax({
		type: "POST",
		url: "",
		data: datos,
		contentType: false,
		processData: false,
		success: function (response) {
			let res = JSON.parse(response);
			if (res.tipo == 'success') {
				Swal.fire(
					res.titulo,
					res.mensaje,
					res.tipo
				);
				setTimeout(() => {
					window.location = "?pagina=ver_participantes";
				}, 900);
			} else {
				Swal.fire(
					res.titulo,
					res.mensaje,
					res.tipo
				);
			}
		},
		error: (response) => {
			console.log(response);
			Swal.fire(
				'Error',
				'Intente otra vez',
				'error'
			)
		}
	});
}