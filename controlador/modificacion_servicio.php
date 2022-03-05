<?php  
	if($_SESSION['ac_rol'] != 'Administrador'){
		header('Location: ?pagina=inicio');
	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/ServicioEstetico.php";
		$servicio = new ServicioEstetico;//Instanciar ServicioEstetico
		$servicio->setId($_POST['id']);
		$servicio->setNombre($_POST['nombre']);
		$servicio->setTipo($_POST['tipo']);
		$servicio->setDescripcion($_POST['descripcion']);
		$servicio->setCosto($_POST['costo']);
		$res = $servicio->modificar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Modificado',
		  'mensaje' => 'El Servicio ha sido modificado exitosamente',
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
			require_once "modelo/ServicioEstetico.php";
			$serv = new ServicioEstetico;//Instanciar clase ServicioEstetico
			$serv->setId($_GET['id']);
			$servicio = $serv->consultar();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>