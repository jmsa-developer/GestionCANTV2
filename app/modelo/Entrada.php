<?php

namespace App\modelo;

class entrada  extends Persona
{
    private $fecha_entrada;
    private $hora_entrada;
    private $direccion_origen;
    private $id_portador;
    private $status
    

    public function __construct()
    {
    }

    public function getfecha_entrada(){
        return $this->fecha_entrada;
    }
    public function setfecha_entrada($fecha_entrada){
        $this->fecha_entrada = $fecha_entrada;
    }
    public function gethora_entrada(){
        return $this->hora_entrada;
    }
    public function sethora_entrada($hora_entrada){
        $this->hora_entrada= $hora_entrada;
    }
    public function getdireccion_origen(){
        return $this->direccion_origen;
    }
    public function setdireccion_origeno($direccion_origen){
        $this->direccion_origen = $direccion_origen;
    }
    public function id_portadpr(){
        return $this->id_portador;
    }
    public function setid_portador($id_portador){
        $this->id_portador = $id_portador;
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
              FROM entrada '.$condicion);
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
              FROM entrada WHERE estado = 1');
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
            $consulta = $this->prepare("SELECT * FROM entrada WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO entrada(hora_entrada , fecha_entrada , direccion_origen , id_portador, status)"
                . "VALUES ( :hora_entrada , :fecha_entrada , :direccion_origen , :id_portador, :status");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":fecha_entrada", $this->fecha_entrada);
            $consulta->bindParam(":hora_entrada", $this->hora_entrada);
            $consulta->bindParam(":id_portador", $this->id_portador);
            $consulta->bindParam(":direccion_origen", $this->direccion_origen);
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
            $consulta = $this->prepare("UPDATE entrada SET id = :id, fecha_entrada = :fecha_entrada, hora_entrada = :hora_entrada, 
                    id_portador = :id_portador, direccion_origen = :direccion_origen, status=:status  WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":fecha_entrada", $this->fecha_entrada);
            $consulta->bindParam(":hora_entrada", $this->);
            $consulta->bindParam(":id_portador", $this->estado);
            $consulta->bindParam(":direccion_origen", $this->numero-pisos);
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
            $consulta = $this->prepare("UPDATE entrada SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE entrada SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
