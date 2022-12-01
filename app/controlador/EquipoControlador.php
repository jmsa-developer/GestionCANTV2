<?php

namespace App\controlador;

use App\modelo\Usuario;

class EquipoControlador extends BaseControlador
{

    public function consultar(){

    $this->render('consultar_equipo.php');
  }
  public function registrar(){

    $this->render('Equipo_nuevo.php');
  }
}

