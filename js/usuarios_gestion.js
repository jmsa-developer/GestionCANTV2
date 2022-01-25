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