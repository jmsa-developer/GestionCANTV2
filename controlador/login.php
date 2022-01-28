<?php
if(isset($_SESSION['ac_usuario'])){
	header("Location: ?pagina=inicio");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require_once "modelo/Usuario.php";
	$usuario = new Usuario; //Instanciar Usuario

	$res = $usuario->buscarUsuario($_POST['usuario']);
	if ($res) {
		if ($_POST['clave'] == $res->clave) {
			$_SESSION['ac_id'] = $res->id;
			$_SESSION['ac_usuario'] = $res->usuario;
			$_SESSION['ac_rol'] = $res->rol;
			echo json_encode([
				'titulo' => '', 'mensaje' => '',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Error',
				'mensaje' => 'Contraseña errónea',
				'tipo' => 'error'
			]);
		}
	} else {
		echo json_encode([
			'titulo' => 'Error',
			'mensaje' => 'El Usuario o Correo Electrónico no se encuentra registrado',
			'tipo' => 'error'
		]);
	}
} else {
	if (is_file("vista/" . $pagina . ".php")) {
		require_once("vista/" . $pagina . ".php");
	} else {
		echo "pagina en construcion";
	}
}
