<?php

namespace App;

require_once "vendor/autoload.php"; //Autocarga de clases

session_start();

if (isset($_SESSION['ac_usuario']) && isset($_SESSION['ac_rol'])) {

    if (!empty($_GET['controlador'])) {
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];

    }else{
        $controlador = "app";
        $accion = "index";
    }
} else {
    $controlador = "usuario";
    $accion = "login";

}

$controlador = ucfirst($controlador);
$controlador.='Controlador';

$controlador = "App\\controlador\\$controlador";


if (class_exists($controlador)) {
    if(is_callable([$controlador, $accion])){
        $controlador = new $controlador;
        $controlador->$accion();
    }else{
        echo "Error no se encuentra el controlador $controlador con la accion $accion";
    }

} else {
    echo "pagina en construccion";
}
