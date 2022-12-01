<?php

namespace App\modelo;


use PDO;

class Rol extends BD {

    private $id;
    private $nombre;

    public function __construct()
    {
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    public function consultar($condicion = "")
    {
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM roles ".$condicion);
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }



}