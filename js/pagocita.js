const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	fecha: /^.{5,20}$/,
	hora: /^.{5,20}$/,
	nro_comprobante: /^[0-9]{4,14}$/,
	pago_total: /[0-9]/,
}
const expresionId = /^[0-9]{1,11}$/
var campoInicial = false
if(typeof id != 'undefined'){
	campoInicial = true;
}
const campos = {
	cita_id: campoInicial,
	fecha: campoInicial,
	hora: campoInicial,
	nro_comprobante: campoInicial,
	pago_total: campoInicial,

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
	validarCampo(expresionId, document.getElementById('cita_id'),'cita_id')
	if(campos.cita_id && campos.fecha && campos.hora && campos.pago_total && campos.nro_comprobante){
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
					window.location = "?pagina=ver_pagoscitas";
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