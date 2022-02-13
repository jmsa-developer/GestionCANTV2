<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require_once "modelo/PagoCurso.php";
	$pago = new PagoCurso; //Instanciar PagoCurso
	$pago->setId($_POST['id']);
	$pago->setCurso_id($_POST['curso_id']);
	$pago->setParticipante_id($_POST['participante_id']);
	$pago->setParticipacion_id($_POST['participacion_id']);
	$pago->setTipo($_POST['tipo']);
	$pago->setNro_comprobante($_POST['nro_comprobante']);
	$pago->setPago_total($_POST['pago_total']);
	$pago->setAbono($_POST['abono']);
	$pago->setFecha($_POST['fecha']);
	$pago->setHora($_POST['hora']);
	$pago->setDescripcion($_POST['descripcion']);

	$res = $pago->modificar();
	if ($res) {
		http_response_code(200);
		echo json_encode([
			'titulo' => 'Registro Modificado',
			'mensaje' => 'El Pago de Curso ha sido modificado exitosamente',
			'tipo' => 'success'
		]);
	} else {
		echo json_encode([
			'titulo' => 'Error',
			'mensaje' => $pago->getError(),
			'tipo' => 'error'
		]);
	}
} else {
	if (is_file("vista/" . $pagina . ".php")) {
		require_once "modelo/Participante.php";
		require_once "modelo/Curso.php";
		require_once "modelo/PagoCurso.php";
		$part = new Participante;
		$participantes = $part->listarActivos();
		$cur = new Curso;
		$cursos = $cur->listarActivos();
		$pag = new PagoCurso;
		$pag->setId($_GET['id']);
		$pago = $pag->consultar();
		$participacion = $pag->consultarParticipacion();
		require_once("vista/" . $pagina . ".php");
	} else {
		echo "pagina en construcion";
	}
}
