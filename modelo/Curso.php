<?php
require_once "BD.php";
class Curso extends BD
{
    private $id;
    private $nombre;
    private $empleado_id;
    private $costo;
    private $fecha;
    private $hora_inicio;
    private $hora_culminacion;
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
    public function getHora_inicio(){
        return $this->hora_inicio;
    }
    public function setHora_inicio($hora_inicio){
        $this->hora_inicio = $hora_inicio;
    }
    public function getHora_culminacion(){
        return $this->hora_culminacion;
    }
    public function setHora_culminacion($hora_culminacion){
        $this->hora_culminacion = $hora_culminacion;
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
            parent::connect($condicion = "");
            $consulta = $this->prepare('SELECT c.*, DATE_FORMAT(c.fecha,"%d/%m/%Y") as fecha,
            TIME_FORMAT(c.hora_inicio, "%h:%i %p") as hora_inicio, TIME_FORMAT(c.hora_culminacion, "%h:%i %p") as hora_culminacion, 
            CONCAT(e.nombre, " ", e.apellido) as instructor 
                FROM `cursos` c INNER JOIN empleados e ON c.empleado_id = e.id '.$condicion);
            $consulta->execute();
            $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function listarParticipantes()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT p.cedula, CONCAT(p.nombre, " ", p.apellido) as nombre, 
                p.telefono FROM participaciones pa INNER JOIN participantes p
                ON pa.participante_id = p.id INNER JOIN pagos_cursos pc ON pa.pago_id = pc.id
                WHERE pa.curso_id = :curso_id AND p.estado = 1 AND pc.estado = 1 GROUP BY p.id');
            $consulta->bindParam(":curso_id", $this->id);
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
                FROM `cursos` WHERE estado = 1 ORDER BY fecha, hora_inicio');
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
                costo, fecha, hora_inicio, hora_culminacion, duracion, descripcion)"
                . "VALUES (:nombre, :empleado_id, 
                :costo, :fecha, :hora_inicio, :hora_culminacion, :duracion, :descripcion)");

            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":empleado_id", $this->empleado_id);
            $consulta->bindParam(":costo", $this->costo);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora_inicio", $this->hora_inicio);
            $consulta->bindParam(":hora_culminacion", $this->hora_culminacion);
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
                    costo = :costo, fecha = :fecha, hora_inicio = :hora_inicio, hora_culminacion = :hora_culminacion,
                    duracion = :duracion, descripcion = :descripcion
                    WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":empleado_id", $this->empleado_id);
            $consulta->bindParam(":costo", $this->costo);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora_inicio", $this->hora_inicio);
            $consulta->bindParam(":hora_culminacion", $this->hora_culminacion);
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
