<?php

namespace App\controlador;

class BaseControlador
{
    public function __construct()
    {


    }

    public function render($vista){
        $root = dirname(__FILE__,2);
        include_once "$root/vista/$vista";
        exit;
    }

}