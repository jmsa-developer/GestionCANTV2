<?php  
use Spipu\Html2Pdf\Html2Pdf;
if (is_file("vista/".$pagina.".php")) 
{
	require_once "modelo/PagoCita.php";
	require_once "modelo/Cita.php";
	require_once "modelo/Cliente.php";
	require_once "modelo/ServicioEstetico.php";
	$pago_id = $_GET['id'];
	$cita_id = $_GET['cita_id'];
	$pag = new PagoCita;
	$cit = new Cita;
	$cli = new Cliente;
	$serv = new ServicioEstetico;
	$pag->setId($pago_id);
	$pago = $pag->consultar();
	$cit->setId($cita_id);
	$cita = $cit->consultar();
	$cli->setId($cita->cliente_id);
	$cliente = $cli->consultar();
	$serv->setId($cita->servicio_estetico_id);
	$servicio = $serv->consultar();

	ob_start();//Inicio de la generación del PDF
	require_once("vista/".$pagina.".php");       
    $documento = ob_get_clean();
	$html2pdf = new Html2Pdf('P', 'Letter', 'fr', true, 'UTF-8');//Crear objeto PDF
	$html2pdf->setDefaultFont('Courier');
	$html2pdf->writeHTML($documento);//Agregar contenido de la vista al PDF
	$html2pdf->output();//Mostrar PDF
}
else{
	echo "pagina en construcion";
}
