<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Usuario.php";
		$usuario = new Usuario;//Instanciar Usuario
		$usuario->setId($_POST['id']);//Adjuntarle los valores para sus atributos
		$usuario->setCedula($_POST['cedula']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellido($_POST['apellido']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setEmail($_POST['correo']);
		$usuario->setRol($_POST['rol']);
		if ($_POST['password'] != "") {
			$usuario->setClave($_POST['password']);
		}
		$res = $usuario->modificar();
		if($res) {
		  $_SESSION['ac_usuario'] = $usuario->getUsuario();
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Modificado',
		  'mensaje' => 'Su Perfil de Usuario ha sido modificado exitosamente',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $usuario->getError(),
		  'tipo' => 'error'
		  ]);  
		}
	}
	else{
		if (is_file("vista/".$pagina.".php")) 
		{
			require_once "modelo/Usuario.php";
			$user = new Usuario;//Instanciar clase Usuario
			$user->setId($_SESSION['ac_id']);
			$usuario = $user->consultar();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>