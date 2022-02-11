<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$metodo = $_GET['metodo'];
	if ($metodo == "listar") {//Proceso para registrar
		require_once "modelo/PagoCita.php";
		$pag = new PagoCita; //Instanciar PagoCita
		$pagos = $pag->listar(); //Función para obtener los pagos

		foreach ($pagos as $pago) {
			$pago->cita = "<a href=?pagina=modificacion_cita&id=" . $pago->cita_id . " class='editar btn btn-sm btn-info mr-1 mb-1' title='Ver Cita'><i class='fas fa-search'></i></a>";
			$pago->button = "<a href=?pagina=modificacion_pagocita&id=" . $pago->id . " class='editar btn btn-sm btn-warning mr-1 mb-1' title='Editar'><i class='fas fa-pencil-alt'></i></a>";
			if ($pago->estado == "1") {
				$pago->button .= "<button data-id=" . $pago->id . " class='inactivar btn btn-sm btn-danger mr-1 mb-1' title='Eliminar'><i class='fas fa-trash-alt'></i></a>";
			} else {
				$pago->button .= "<button data-id=" . $pago->id . " class='activar btn btn-sm btn-outline-success mr-1 mb-1' title='Activar'><i class='fas fa-trash-restore'></i></button>";
			}
		}

		http_response_code(200);
		echo json_encode([
			'data' => $pagos
		]);
	}
	if ($metodo == "inactivar") {//Proceso para inactivar registro
		$id = $_GET['id'];
		require_once "modelo/PagoCita.php";
		$pago = new PagoCita; //Instanciar PagoCita
		$pago->setId($id);
		$res = $pago->inactivar();//Función para cambiar el estado del registro a 0
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
				'mensaje' => $pago->getError(),
				'tipo' => 'error'
			]);
		}
	}
	if ($metodo == "activar") {//Proceso para activar registro
		$id = $_GET['id'];
		require_once "modelo/PagoCita.php";
		$pago = new PagoCita; //Instanciar PagoCita
		$pago->setId($id);
		$res = $pago->activar();//Función para cambiar el estado del registro a 1
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
				'mensaje' => $pago->getError(),
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
