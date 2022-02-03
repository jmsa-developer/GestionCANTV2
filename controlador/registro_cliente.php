<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Cliente.php";
		$cliente = new Cliente;//Instanciar Cliente
		$cliente->setCedula($_POST['cedula']);//Adjuntarle los valores para sus atributos
		$cliente->setNombre($_POST['nombre']);
		$cliente->setApellido($_POST['apellido']);
		$cliente->setTelefono($_POST['telefono']);
		$cliente->setEmail($_POST['correo']);
		$cliente->setDireccion($_POST['direccion']);
		$cliente->setFecha_nacimiento($_POST['fecha_nacimiento']);
	
		$res = $cliente->registrar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Exitoso',
		  'mensaje' => 'Cliente registrado en nuestro sistema',
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
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>