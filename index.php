<?php
session_start();
if(isset($_SESSION['ac_usuario']) && isset($_SESSION['ac_rol'])){
	$pagina = "inicio";
	if (!empty($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}
}
else{
	$pagina = "login";
}
if (is_file("controlador/" . $pagina . ".php")) {
	require_once("controlador/" . $pagina . ".php");
} else {
	echo "pagina en construccion";
}
