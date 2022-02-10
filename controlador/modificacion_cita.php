<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once "modelo/Cita.php";
		$cita = new Cita;//Instanciar Cita
		$cita->setId($_POST['id']);
		$cita->setCliente_id($_POST['cliente_id']);
		$cita->setServicio_estetico_id($_POST['servicio_id']);
		$cita->setFecha($_POST['fecha']);
		$cita->setHora($_POST['hora']);
		$cita->setCita_realizada($_POST['cita_realizada']);
		$res = $cita->modificar();
		if($res) {
		  http_response_code(200);
	
		  echo json_encode([
		  'titulo' => 'Registro Modificado',
		  'mensaje' => 'La Cita ha sido modificada exitosamente',
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
			require_once "modelo/Cita.php";
			$cli = new Cliente;
			$serv = new ServicioEstetico;
			$clientes = $cli->listarActivos();
			$servicios = $serv->listarActivos();
			$cit = new Cita;//Instanciar clase Cita
			$cit->setId($_GET['id']);
			$cita = $cit->consultar();
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
?>