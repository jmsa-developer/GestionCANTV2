<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$metodo = $_GET['metodo'];
	if ($metodo == "listar") {//Proceso para registrar
		require_once "modelo/Usuario.php";
		$usu = new Usuario; //Instanciar Usuario
		$usuarios = $usu->listar(); //Función para obtener los usuarios

		foreach ($usuarios as $usuario) {
			$usuario->button = "<a href=?pagina=modificar_usuario&id=" . $usuario->id . " class='editar btn btn-sm btn-warning mr-1 mb-1' title='Editar'><i class='fas fa-pencil-alt'></i></a>";
			if ($usuario->estado == "1") {
				$usuario->button .= "<button data-id=" . $usuario->id . " class='inactivar btn btn-sm btn-danger mr-1 mb-1' title='Eliminar'><i class='fas fa-trash-alt'></i></a>";
			} else {
				$usuario->button .= "<button data-id=" . $usuario->id . " class='activar btn btn-sm btn-outline-success mr-1 mb-1' title='Activar'><i class='fas fa-trash-restore'></i></button>";
			}
		}
		http_response_code(200);

		echo json_encode([
			'data' => $usuarios
		]);
	}
	if ($metodo == "inactivar") {//Proceso para inactivar registro
		$id = $_GET['id'];
		if($id == 1){
			http_response_code(200);
			echo json_encode([
				'titulo' => 'Advertencia',
				'mensaje' => 'El Administrador principal no puede ser inactivado',
				'tipo' => 'info'
			]);
			return false;
		}
		require_once "modelo/Usuario.php";
		$usuario = new Usuario; //Instanciar Usuario
		$usuario->setId($id);
		$res = $usuario->inactivar();//Función para cambiar el estado del registro a 0
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
				'mensaje' => $usuario->getError(),
				'tipo' => 'error'
			]);
		}
	}
	if ($metodo == "activar") {//Proceso para activar registro
		$id = $_GET['id'];
		require_once "modelo/Usuario.php";
		$usuario = new Usuario; //Instanciar Usuario
		$usuario->setId($id);
		$res = $usuario->activar();//Función para cambiar el estado del registro a 1
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
				'mensaje' => $usuario->getError(),
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
