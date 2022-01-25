$(document).ready(function () {
	//Listar usuarios en la tabla
	table = $('#datatable').DataTable({
		serverSide: false,
		ordering: false,
		searching: true,
		ajax: {
			method: 'POST',
			url: "?pagina=ver_usuarios&metodo=listar"
		},
		columns: [
			{ data: 'usuario' },
			{ data: 'nombre' },
			{ data: 'cedula' },
			{ data: 'rol' },
			{ data: 'button' }
		],

		language: {
			"decimal": "",
			"emptyTable": "No hay Registros Disponibles",
			"info": "Mostrando _START_ de _END_ para _TOTAL_ Entradas",
			"infoEmpty": "Mostrando 0 de 0 para 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ Entradas en Total)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "No se encontraron coincidencias",
			"paginate": {
				"first": "Primero",
				"last": "Último",
				"next": "Siguiente",
				"previous": "Atrás"
			},
			"aria": {
				"sortAscending": ": activate to sort column ascending",
				"sortDescending": ": activate to sort column descending"
			}
		}
	});
})

function cambiarEstado(accion, id) {
	$.ajax({
		type: 'POST',
		url: `?pagina=ver_usuarios&metodo=${accion}&id=${id}`,
		success: function (respuesta) {
			console.log(respuesta)
			var json = JSON.parse(respuesta);
			if (json.tipo == "success") {
				Swal.fire(
					json.titulo, json.mensaje, json.tipo
				)
				table.ajax.reload();
			}
			else {
				Swal.fire(
					json.titulo, json.mensaje, json.tipo
				)
			}
		},
		error: function (respuesta) {
			Swal.fire(
				"Error",
				"Intente otra vez",
				"error"
			)
		}
	})
}

$('body').on('click', '.inactivar', function (e) {//Al presionar inactivar
	e.preventDefault();
	Swal.fire({
		title: '¿Desea continuar?',
		text: "El Usuario será inactivado en el sistema",
		type: 'warning',
		showCancelButton: true,
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si'
	}).then((result) => {
		if (result.value) {
			cambiarEstado('inactivar', $(this).attr('data-id'));
		}
	})
});
$('body').on('click', '.activar', function (e) {//Al presionar activar
	e.preventDefault();
	Swal.fire({
		title: '¿Desea continuar?',
		text: "El Usuario será activado en el sistema",
		type: 'warning',
		showCancelButton: true,
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si'
	}).then((result) => {
		if (result.value) {
			cambiarEstado('activar', $(this).attr('data-id'));
		}
	})
});