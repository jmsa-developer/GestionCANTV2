<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require_once "modelo/PagoCita.php";
	$pago = new PagoCita; //Instanciar PagoCita
	$pago->setId($_POST['id']);
	$pago->setTipo($_POST['tipo']);
	$pago->setNro_comprobante($_POST['nro_comprobante']);
	$pago->setPago_total($_POST['pago_total']);
	$pago->setFecha($_POST['fecha']);
	$pago->setHora($_POST['hora']);
	$pago->setDescripcion($_POST['descripcion']);
	$res = $pago->modificar();
	if ($res) {
		require_once "modelo/Cita.php";
		$cita = new Cita;
		$cita->setId($_POST['cita_id']);
		$cita->setPago_id($_POST['id']);
		$resp = $cita->modificarPagoId();
		if ($resp) {
			http_response_code(200);
			echo json_encode([
				'titulo' => 'Registro Modificado',
				'mensaje' => 'El Pago de Cita ha sido modificado exitosamente',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Error',
				'mensaje' => $cita->getError(),
				'tipo' => 'error'
			]);
		}
	} else {
		echo json_encode([
			'titulo' => 'Error',
			'mensaje' => $pago->getError(),
			'tipo' => 'error'
		]);
	}
} else {
	if (is_file("vista/" . $pagina . ".php")) {
		require_once "modelo/Cita.php";
		require_once "modelo/PagoCita.php";
		$cit = new Cita;
		$citas = $cit->listarActivos($_GET['cita_id']);
		$pag = new PagoCita; //Instanciar clase PagoCita
		$pag->setId($_GET['id']);
		$pago = $pag->consultar();
		$pago->cita_id = $_GET['cita_id'];
		require_once("vista/" . $pagina . ".php");
	} else {
		echo "pagina en construcion";
	}
}
