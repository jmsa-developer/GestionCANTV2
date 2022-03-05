<?php  
	if($_SESSION['ac_rol'] != 'Administrador'){
		header('Location: ?pagina=inicio');
	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Curso.php";
		$curso = new Curso;//Instanciar Curso
		$curso->setNombre($_POST['nombre']);
		$curso->setEmpleado_id($_POST['empleado_id']);
		$curso->setFecha($_POST['fecha']);
		$curso->setHora_inicio($_POST['hora_inicio']);
		$curso->setHora_culminacion($_POST['hora_culminacion']);
		$curso->setCosto($_POST['costo']);
		$curso->setDuracion($_POST['duracion']);
		$curso->setDescripcion($_POST['descripcion']);
	
		$res = $curso->registrar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Exitoso',
		  'mensaje' => 'Curso registrado en nuestro sistema',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $curso->getError(),
		  'tipo' => 'error'
		  ]);  
		}
	}
	else{
		if (is_file("vista/".$pagina.".php")) 
		{
			require_once "modelo/Empleado.php";
			$emp = new Empleado;
			$empleados = $emp->listarActivos();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
