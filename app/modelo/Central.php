<?php

namespace App\modelo;


use Exception;
use PDO;

class Central extends BD {

    private $id;
    private $nombre_ciudad;
    private $direccion;

    public function __construct()
    {
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNombreCiudad(){
        return $this->nombre_ciudad;
    }
    public function setNombreCiudad($nombre_ciudad){
        $this->nombre_ciudad = $nombre_ciudad;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function consultar($condicion = "")
    {
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM central ".$condicion);
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public static function obtener_centrales()
    {
        $centrales = new self();
        return $centrales->consultar();
    }

}