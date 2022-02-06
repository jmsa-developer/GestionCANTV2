<?php
require_once "BD.php";
class ServicioEstetico extends BD
{
    private $id;
    private $nombre;
    private $costo;
    private $tipo;
    private $descripcion;

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
    public function getCosto(){
        return $this->costo;
    }
    public function setCosto($costo){
        $this->costo = $costo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function listar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT id, nombre, tipo, descripcion, costo, estado
              FROM servicios_esteticos');
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
            $consulta = $this->prepare("SELECT * FROM servicios_esteticos WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO servicios_esteticos(nombre, tipo, descripcion, costo)"
                . "VALUES (:nombre, :tipo, :descripcion, :costo)");

            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":tipo", $this->tipo);
            $consulta->bindParam(":descripcion", $this->descripcion);
            $consulta->bindParam(":costo", $this->costo);
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
            $consulta = $this->prepare("UPDATE servicios_esteticos SET nombre=:nombre, tipo = :tipo, 
                    descripcion = :descripcion, costo = :costo
                    WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":tipo", $this->tipo);
            $consulta->bindParam(":descripcion", $this->descripcion);
            $consulta->bindParam(":costo", $this->costo);
            return $consulta->execute();
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

    public function inactivar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE servicios_esteticos SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE servicios_esteticos SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
