<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Participante.php";
		$participante = new Participante;//Instanciar Participante
		$participante->setId($_POST['id']);//Adjuntarle los valores para sus atributos
		$participante->setCedula($_POST['cedula']);
		$participante->setNombre($_POST['nombre']);
		$participante->setApellido($_POST['apellido']);
		$participante->setTelefono($_POST['telefono']);
		$participante->setEmail($_POST['correo']);
		$participante->setDireccion($_POST['direccion']);
		$participante->setFecha_nacimiento($_POST['fecha_nacimiento']);
		$res = $participante->modificar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Modificado',
		  'mensaje' => 'El Participante ha sido modificado exitosamente',
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
			require_once "modelo/Participante.php";
			$part = new Participante;//Instanciar clase Participante
			$part->setId($_GET['id']);
			$participante = $part->consultar();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>