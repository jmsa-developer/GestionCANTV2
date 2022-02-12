const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {

	nombre: /^[a-zA-ZÀ-ÿ\s]{1,50}$/, // Letras y espacios, pueden llevar acentos.
	fecha: /^.{5,20}$/,
	horario: /^.{5,20}$/,
	duracion: /^.{1,30}$/, // 7 a 14 Letras y espacios, pueden llevar acentos y numeros.
	costo: /^[0-9]{1,11}$/, // solo numeros numeros, maximo 11 digitos.
}
const expresionId = /^[0-9]{1,11}$/
var campoInicial = false
if(typeof id != 'undefined'){
	campoInicial = true;
}
const campos = {
	nombre: campoInicial,
	empleado_id: campoInicial,
	fecha: campoInicial,
	horario: campoInicial,
	duracion: campoInicial,
	costo: campoInicial,

}

const validarFormulario = (e) => {
	let campo = e.target.name
	validarCampo(expresiones[campo], e.target, campo)
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
	validarCampo(expresionId, document.getElementById('empleado_id'),'empleado_id')
	if(campos.nombre && campos.empleado_id && campos.fecha && campos.horario &&  campos.duracion && campos.costo ){
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
					window.location = "?pagina=ver_cursos";
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