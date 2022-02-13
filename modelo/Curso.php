<?php
require_once "BD.php";
class Curso extends BD
{
    private $id;
    private $nombre;
    private $empleado_id;
    private $costo;
    private $fecha;
    private $horario;
    private $duracion;
    private $descripcion;
    private $estado;

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
    public function getEmpleado_id(){
        return $this->empleado_id;
    }
    public function setEmpleado_id($empleado_id){
        $this->empleado_id = $empleado_id;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function setCosto($costo){
        $this->costo = $costo;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function setHorario($horario){
        $this->horario = $horario;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function listar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT c.*, DATE_FORMAT(c.fecha,"%d/%m/%Y") as fecha, CONCAT(e.nombre, " ", e.apellido) as instructor 
                FROM `cursos` c INNER JOIN empleados e ON c.empleado_id = e.id');
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
            $consulta = $this->prepare('SELECT id, nombre, DATE_FORMAT(fecha,"%d/%m/%Y") as fecha
                FROM `cursos` WHERE estado = 1 ORDER BY fecha, horario');
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
            $consulta = $this->prepare("SELECT * FROM cursos WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO cursos(nombre, empleado_id, 
                costo, fecha, horario, duracion, descripcion)"
                . "VALUES (:nombre, :empleado_id, 
                :costo, :fecha, :horario, :duracion, :descripcion)");

            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":empleado_id", $this->empleado_id);
            $consulta->bindParam(":costo", $this->costo);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":horario", $this->horario);
            $consulta->bindParam(":duracion", $this->duracion);
            $consulta->bindParam(":descripcion", $this->descripcion);
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
            $consulta = $this->prepare("UPDATE cursos SET nombre = :nombre, empleado_id = :empleado_id,
                    costo = :costo, fecha = :fecha, horario = :horario, duracion = :duracion, descripcion = :descripcion
                    WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":empleado_id", $this->empleado_id);
            $consulta->bindParam(":costo", $this->costo);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":horario", $this->horario);
            $consulta->bindParam(":duracion", $this->duracion);
            $consulta->bindParam(":descripcion", $this->descripcion);
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
            $consulta = $this->prepare("UPDATE cursos SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE cursos SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
