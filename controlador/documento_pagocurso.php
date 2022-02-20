<?php  
use Spipu\Html2Pdf\Html2Pdf;
if (is_file("vista/".$pagina.".php")) 
{
	require_once "modelo/PagoCurso.php";//Pago de Curso
	require_once "modelo/Curso.php";
	require_once "modelo/Participante.php";
	require_once "modelo/Empleado.php";
	$pago_id = $_GET['id'];
	$pag = new PagoCurso;
	$cur = new Curso;
	$part = new Participante;
	$emp = new Empleado;
	$pag->setId($pago_id);
	$pago = $pag->consultar();//obtener datos de pago

	$participacion = $pag->consultarParticipacion();//obtener datos de participacion(los id de curso y participante)
	
	$part->setId($participacion->participante_id);//Pasar id de participante
	$participante = $part->consultar();//Datos del participante
	
	$cur->setId($participacion->curso_id);
	$curso = $cur->consultar();//Datos del curso
	
	$emp->setId($curso->empleado_id);
	$empleado = $emp->consultar();//Consultar empleado
	
	ob_start();//Inicio de la generación del PDF
	require_once("vista/".$pagina.".php");       
    $documento = ob_get_clean();//Guardar la vista html
	
	$html2pdf = new Html2Pdf('P', 'Letter', 'fr', true, 'UTF-8');//Crear objeto PDF
	$html2pdf->setDefaultFont('Courier');
	$html2pdf->writeHTML($documento);//Agregar contenido de la vista al PDF
	$html2pdf->output();//Mostrar PDF
}
else{
	echo "pagina en construcion";
}
