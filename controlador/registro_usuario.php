<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Usuario.php";
		$usuario = new Usuario;//Instanciar Usuario
		$usuario->setCedula($_POST['cedula']);//Adjuntarle los valores para sus atributos
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellido($_POST['apellido']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setEmail($_POST['correo']);
		$usuario->setClave($_POST['password']);
		$usuario->setRol("Administrador");
	
		$res = $usuario->registrar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Exitoso',
		  'mensaje' => 'Usuario registrado en nuestro sistema',
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
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>