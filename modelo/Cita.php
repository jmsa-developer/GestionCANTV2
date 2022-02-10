<?php
require_once "BD.php";
class Cita extends BD
{
    private $id;
    private $cliente_id;
    private $servicio_estetico_id;
    private $pago_id;
    private $fecha;
    private $hora;
    private $cita_realizada;
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
    public function getCliente_id(){
        return $this->cliente_id;
    }
    public function setCliente_id($cliente_id){
        $this->cliente_id = $cliente_id;
    }
    public function getServicio_estetico_id(){
        return $this->servicio_estetico_id;
    }
    public function setServicio_estetico_id($servicio_estetico_id){
        $this->servicio_estetico_id = $servicio_estetico_id;
    }
    public function getPago_id(){
        return $this->pago_id;
    }
    public function setPago_id($pago_id){
        $this->pago_id = $pago_id;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function getHora(){
        return $this->hora;
    }
    public function setHora($hora){
        $this->hora = $hora;
    }
    public function getCita_realizada(){
        return $this->cita_realizada;
    }
    public function setCita_realizada($cita_realizada){
        $this->cita_realizada = $cita_realizada;
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
            $consulta = $this->prepare('SELECT CONCAT(cl.nombre," ",cl.apellido) as cliente, s.nombre as servicio, 
                c.id, c.fecha, c.cita_realizada, c.estado FROM citas c 
                INNER JOIN clientes cl ON c.cliente_id = cl.id INNER JOIN servicios_esteticos s 
                ON c.servicio_estetico_id = s.id');
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
            $consulta = $this->prepare("SELECT * FROM citas WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO citas(cliente_id, servicio_estetico_id, 
                fecha, hora, cita_realizada)"
                . "VALUES (:cliente_id, :servicio_estetico_id, 
                :fecha, :hora, :cita_realizada)");

            $consulta->bindParam(":cliente_id", $this->cliente_id);
            $consulta->bindParam(":servicio_estetico_id", $this->servicio_estetico_id);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora", $this->hora);
            $consulta->bindParam(":cita_realizada", $this->cita_realizada);
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
            $consulta = $this->prepare("UPDATE citas SET cedula = :cedula, nombre=:nombre, apellido = :apellido, 
                    telefono = :telefono, email = :email, direccion = :direccion, 
                    fecha_nacimiento = :fecha_nacimiento,  fecha_contrato = :fecha_contrato, 
                    horario = :horario, rol = :rol
                    WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":cedula", $this->cedula);
            $consulta->bindParam(":nombre", $this->nombre);
            $consulta->bindParam(":apellido", $this->apellido);
            $consulta->bindParam(":telefono", $this->telefono);
            $consulta->bindParam(":email", $this->email);
            $consulta->bindParam(":direccion", $this->direccion);
            $consulta->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);
            $consulta->bindParam(":fecha_contrato", $this->fecha_contrato);
            $consulta->bindParam(":horario", $this->horario);
            $consulta->bindParam(":rol", $this->rol);
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
            $consulta = $this->prepare("UPDATE citas SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE citas SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
