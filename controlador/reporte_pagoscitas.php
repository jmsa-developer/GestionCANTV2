<?php  
use Spipu\Html2Pdf\Html2Pdf;
if (is_file("vista/".$pagina.".php")) 
{
	require_once "modelo/PagoCita.php";
	$pag = new PagoCita;
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$pagos = $pag->listar("WHERE pc.estado = 1 AND pc.fecha BETWEEN '$desde' AND '$hasta'");
	ob_start();//Inicio de la generación del PDF
	require_once("vista/".$pagina.".php");       
    $documento = ob_get_clean();
	$html2pdf = new Html2Pdf('L', 'Letter', 'fr', true, 'UTF-8');//Crear objeto PDF
	$html2pdf->setDefaultFont('Courier');
	$html2pdf->writeHTML($documento);//Agregar contenido de la vista al PDF
	$html2pdf->output();//Mostrar PDF
}
else{
	echo "pagina en construcion";
}
