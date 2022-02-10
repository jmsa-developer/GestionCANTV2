<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Cita.php";
		$cita = new Cita;//Instanciar Cita
		$cita->setCliente_id($_POST['cliente_id']);
		$cita->setServicio_estetico_id($_POST['servicio_id']);
		$cita->setFecha($_POST['fecha']);
		$cita->setHora($_POST['hora']);
		$cita->setCita_realizada($_POST['cita_realizada']);
	
		$res = $cita->registrar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Exitoso',
		  'mensaje' => 'Cita registrada en nuestro sistema',
		  'tipo' => 'success'
		  ]);    
		} else{
		  echo json_encode([
		  'titulo' => 'Error',
		  'mensaje' => $cita->getError(),
		  'tipo' => 'error'
		  ]);  
		}
	}
	else{
		if (is_file("vista/".$pagina.".php")) 
		{
			require_once "modelo/Cliente.php";
			require_once "modelo/ServicioEstetico.php";
			$cli = new Cliente;
			$serv = new ServicioEstetico;
			$clientes = $cli->listarActivos();
			$servicios = $serv->listarActivos();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>