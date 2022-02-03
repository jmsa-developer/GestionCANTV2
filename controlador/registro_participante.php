<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Participante.php";
		$participante = new Participante;//Instanciar Participante
		$participante->setCedula($_POST['cedula']);//Adjuntarle los valores para sus atributos
		$participante->setNombre($_POST['nombre']);
		$participante->setApellido($_POST['apellido']);
		$participante->setTelefono($_POST['telefono']);
		$participante->setEmail($_POST['correo']);
		$participante->setDireccion($_POST['direccion']);
		$participante->setFecha_nacimiento($_POST['fecha_nacimiento']);
	
		$res = $participante->registrar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Exitoso',
		  'mensaje' => 'Participante registrado en nuestro sistema',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $participante->getError(),
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