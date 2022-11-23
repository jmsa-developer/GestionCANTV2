<?php

namespace App\controlador;

use App\modelo\Usuario;

class CentralesControlador extends BaseControlador
{

    public function consultar(){

    $this->render('centrales.php');
  }
}
