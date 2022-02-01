<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Cliente.php";
		$cliente = new Cliente;//Instanciar Cliente
		$cliente->setId($_POST['id']);//Adjuntarle los valores para sus atributos
		$cliente->setCedula($_POST['cedula']);
		$cliente->setNombre($_POST['nombre']);
		$cliente->setApellido($_POST['apellido']);
		$cliente->setTelefono($_POST['telefono']);
		$cliente->setEmail($_POST['correo']);
		$cliente->setDireccion($_POST['direccion']);
		$cliente->setFecha_nacimiento($_POST['fecha_nacimiento']);
		$res = $cliente->modificar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Modificado',
		  'mensaje' => 'El Cliente ha sido modificado exitosamente',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $cliente->getError(),
		  'tipo' => 'error'
		  ]);  
		}
	}
	else{
		if (is_file("vista/".$pagina.".php")) 
		{
			require_once "modelo/Cliente.php";
			$cli = new Cliente;//Instanciar clase Cliente
			$cli->setId($_GET['id']);
			$cliente = $cli->consultar();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>