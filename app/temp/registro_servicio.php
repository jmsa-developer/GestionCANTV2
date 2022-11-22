<?php  
	if($_SESSION['ac_rol'] != 'Administrador'){
		header('Location: ?pagina=inicio');
	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/ServicioEstetico.php";
		$servicio = new ServicioEstetico;//Instanciar ServicioEstetico
		$servicio->setNombre($_POST['nombre']);
		$servicio->setTipo($_POST['tipo']);
		$servicio->setDescripcion($_POST['descripcion']);
		$servicio->setCosto($_POST['costo']);
	


	
		$res = $servicio->registrar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Exitoso',
		  'mensaje' => 'Servicio Estético registrado en nuestro sistema',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $servicio->getError(),
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