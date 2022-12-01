<?php

namespace App\modelo;

class centrales  extends Persona
{
    private $nombre;
    private $direccion;
    private $numero_pisos;
    private $estado;
    private $status
    

    public function __construct()
    {
    }

    public function getnombre(){
        return $this->nombre;
    }
    public function setnombre($nombre){
        $this->nombre = $nombre;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function setdireccion($direccion){
        $this->direccion= $direccion;
    }
    public function getmodelo(){
        return $this->modelo;
    }
    public function setestado($estado){
        $this->estado = $estado;
    }
    public function numero_pisos(){
        return $this->numero_pisos;
    }
    public function setnumero_pisos($numero_pisos){
        $this->numero_pisos = $numero_pisos;
    }
    public function estauts(){
        return $this->status;
    }
    public function setestatus($estatus){
        $this->estatus = $estatus;
    }

    public function listar($condicion = "")
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, serial, CONCAT(marca," ",modelo) as marca, modelo, codigo_inventario, estatus
              FROM equipo '.$condicion);
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function listarActivos()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, serial, CONCAT(nombre," ",apellido) as nombre
              FROM equipo WHERE estado = 1');
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function consultar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("SELECT * FROM centrales WHERE id = $this->id");
            $consulta->execute();
            $respuesta = $consulta->fetch(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function registrar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("INSERT INTO centrales(nombre , estado , numero_pisos , direccion)"
                . "VALUES (:nombre , :estado , :numero_pisos , :direccion , :status");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":nombre", $this->serial);
            $consulta->bindParam(":estado", $this->marca);
            $consulta->bindParam(":numero_pisos", $this->email);
            $consulta->bindParam(":direccion", $this->telefono);
            $consulta->bindParam(":status", $this->estatus);

            $consulta->execute();
            return $this->lastInsertId();
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function modificar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE centrales SET id = :id, nombre = :nombre, direccion = :direccion, 
                    estado = :estado, numero_pisos = :numero_pisos, status=:status  WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":direccion", $this->direccion);
            $consulta->bindParam(":estado, $this->estado);
            $consulta->bindParam(":numero_pisos", $this->numero-pisos);
            $consulta->bindParam(":status", $this->direccion);
            return $consulta->execute();
        } catch (Exception $e) {
            // var_dump($e);
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function inactivar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE centrales SET estado = 0 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function activar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE centrales SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
