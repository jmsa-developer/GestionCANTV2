<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$metodo = $_GET['metodo'];
	if ($metodo == "listar") {//Proceso para registrar
		require_once "modelo/Cliente.php";
		$cli = new Cliente; //Instanciar Cliente
		$clientes = $cli->listar(); //Función para obtener los clientes

		foreach ($clientes as $cliente) {
			$cliente->button = "<a href=?pagina=modificacion_cliente&id=" . $cliente->id . " class='editar btn btn-sm btn-warning mr-1 mb-1' title='Editar'><i class='fas fa-pencil-alt'></i></a>";
			if ($cliente->estado == "1") {
				$cliente->button .= "<button data-id=" . $cliente->id . " class='inactivar btn btn-sm btn-danger mr-1 mb-1' title='Eliminar'><i class='fas fa-trash-alt'></i></a>";
			} else {
				$cliente->button .= "<button data-id=" . $cliente->id . " class='activar btn btn-sm btn-outline-success mr-1 mb-1' title='Activar'><i class='fas fa-trash-restore'></i></button>";
			}
		}
		http_response_code(200);

		echo json_encode([
			'data' => $clientes
		]);
	}
	if ($metodo == "inactivar") {//Proceso para inactivar registro
		$id = $_GET['id'];
		require_once "modelo/Cliente.php";
		$cliente = new Cliente; //Instanciar Cliente
		$cliente->setId($id);
		$res = $cliente->inactivar();//Función para cambiar el estado del registro a 0
		if ($res) {
			http_response_code(200);

			echo json_encode([
				'titulo' => 'Registro Inactivado',
				'mensaje' => 'El Registro fue inactivado exitosamente',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Error',
				'mensaje' => $cliente->getError(),
				'tipo' => 'error'
			]);
		}
	}
	if ($metodo == "activar") {//Proceso para activar registro
		$id = $_GET['id'];
		require_once "modelo/Cliente.php";
		$cliente = new Cliente; //Instanciar Cliente
		$cliente->setId($id);
		$res = $cliente->activar();//Función para cambiar el estado del registro a 1
		if ($res) {
			http_response_code(200);

			echo json_encode([
				'titulo' => 'Registro Activado',
				'mensaje' => 'El Registro fue activado exitosamente',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Error',
				'mensaje' => $cliente->getError(),
				'tipo' => 'error'
			]);
		}
	}
} else {
	if (is_file("vista/" . $pagina . ".php")) {
		require_once("vista/" . $pagina . ".php");
	} else {
		echo "pagina en construcion";
	}
}
