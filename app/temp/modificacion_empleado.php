<?php  
	if($_SESSION['ac_rol'] != 'Administrador'){
  		header('Location: ?pagina=inicio');
  	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Empleado.php";
		$empleado = new Empleado;//Instanciar Empleado
		$empleado->setId($_POST['id']);//Adjuntarle los valores para sus atributos
		$empleado->setCedula($_POST['cedula']);
		$empleado->setNombre($_POST['nombre']);
		$empleado->setApellido($_POST['apellido']);
		$empleado->setTelefono($_POST['telefono']);
		$empleado->setEmail($_POST['correo']);
		$empleado->setDireccion($_POST['direccion']);
		$empleado->setFecha_nacimiento($_POST['fecha_nacimiento']);
		$empleado->setFecha_contrato($_POST['fecha_contrato']);
		$empleado->setHorario($_POST['horario']);
		$empleado->setRol($_POST['rol']);
		$res = $empleado->modificar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Modificado',
		  'mensaje' => 'El Empleado ha sido modificado exitosamente',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $empleado->getError(),
		  'tipo' => 'error'
		  ]);  
		}
	}
	else{
		if (is_file("vista/".$pagina.".php")) 
		{
			require_once "modelo/Empleado.php";
			$emp = new Empleado;//Instanciar clase Empleado
			$emp->setId($_GET['id']);
			$empleado = $emp->consultar();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>