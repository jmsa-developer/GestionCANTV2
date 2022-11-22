<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$metodo = $_GET['metodo'];
	if ($metodo == "listar") {//Proceso para registrar
		require_once "modelo/ServicioEstetico.php";
		$serv = new ServicioEstetico; //Instanciar ServicioEstetico
		$servicios = $serv->listar(); //Función para obtener los servicios
		$element = "a";
		$disabled = "";
		if($_SESSION['ac_rol'] != 'Administrador'){
			$disabled = "disabled";
			$element = "button";
		}
		foreach ($servicios as $servicio) {
			$servicio->button = "<$element href=?pagina=modificacion_servicio&id=" . $servicio->id . " class='editar btn btn-sm btn-warning mr-1 mb-1' title='Editar' $disabled ><i class='fas fa-pencil-alt'></i></$element>";
			if ($servicio->estado == "1") {
				$servicio->button .= "<button data-id=" . $servicio->id . " class='inactivar btn btn-sm btn-danger mr-1 mb-1' title='Eliminar' $disabled ><i class='fas fa-trash-alt'></i></a>";
			} else {
				$servicio->button .= "<button data-id=" . $servicio->id . " class='activar btn btn-sm btn-outline-success mr-1 mb-1' title='Activar' $disabled ><i class='fas fa-trash-restore'></i></button>";
			}
		}
		http_response_code(200);

		echo json_encode([
			'data' => $servicios
		]);
	}
	if ($metodo == "inactivar") {//Proceso para inactivar registro
		$id = $_GET['id'];
		require_once "modelo/ServicioEstetico.php";
		$servicio = new ServicioEstetico; //Instanciar ServicioEstetico
		$servicio->setId($id);
		$res = $servicio->inactivar();//Función para cambiar el estado del registro a 0
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
				'mensaje' => $servicio->getError(),
				'tipo' => 'error'
			]);
		}
	}
	if ($metodo == "activar") {//Proceso para activar registro
		$id = $_GET['id'];
		require_once "modelo/ServicioEstetico.php";
		$servicio = new ServicioEstetico; //Instanciar ServicioEstetico
		$servicio->setId($id);
		$res = $servicio->activar();//Función para cambiar el estado del registro a 1
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
				'mensaje' => $servicio->getError(),
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
