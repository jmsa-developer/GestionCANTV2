<?php

namespace App\controlador;

use App\modelo\Usuario;

class CentralesControlador extends BaseControlador
{

    public function consultar(){

    $this->render('consultar_centrales.php');
  }
  public function registrar(){

    $this->render('centrales.php');
  }
}