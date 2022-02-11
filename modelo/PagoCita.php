<?php
require_once "BD.php";
class PagoCita extends BD
{
    private $id;
    private $tipo;
    private $nro_comprobante;
    private $pago_total;
    private $fecha;
    private $hora;
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
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getNro_comprobante(){
        return $this->nro_comprobante;
    }
    public function setNro_comprobante($nro_comprobante){
        $this->nro_comprobante = $nro_comprobante;
    }
    public function getPago_total(){
        return $this->pago_total;
    }
    public function setPago_total($pago_total){
        $this->pago_total = $pago_total;
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
            $consulta = $this->prepare('SELECT CONCAT(cl.nombre," ",cl.apellido) as cliente, s.nombre as servicio, 
                c.id, c.fecha, c.cita_realizada, c.estado FROM pagos_citas c 
                INNER JOIN clientes cl ON c.cliente_id = cl.id INNER JOIN servicios_esteticos s 
                ON c.servicio_estetico_id = s.id ORDER BY c.fecha DESC, c.hora DESC');
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
            $consulta = $this->prepare('SELECT CONCAT(cl.nombre," ",cl.apellido) as cliente, s.nombre as servicio, 
                c.id, c.fecha FROM pagos_citas c 
                INNER JOIN clientes cl ON c.cliente_id = cl.id INNER JOIN servicios_esteticos s 
                ON c.servicio_estetico_id = s.id WHERE c.estado = 1 AND c.pago_id IS NULL ORDER BY c.fecha, c.hora');
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
            $consulta = $this->prepare("SELECT * FROM pagos_citas WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO pagos_citas(tipo, nro_comprobante, 
                pago_total, fecha, hora, descripcion)"
                . "VALUES (:tipo, :nro_comprobante, 
                :pago_total, :fecha, :hora, :descripcion)");

            $consulta->bindParam(":tipo", $this->tipo);
            $consulta->bindParam(":nro_comprobante", $this->nro_comprobante);
            $consulta->bindParam(":pago_total", $this->pago_total);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora", $this->hora);
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
            $consulta = $this->prepare("UPDATE pagos_citas SET cliente_id = :cliente_id, servicio_estetico_id = :servicio_estetico_id,
                    fecha = :fecha, hora = :hora, cita_realizada = :cita_realizada
                    WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":cliente_id", $this->cliente_id);
            $consulta->bindParam(":servicio_estetico_id", $this->servicio_estetico_id);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora", $this->hora);
            $consulta->bindParam(":cita_realizada", $this->cita_realizada);
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
            $consulta = $this->prepare("UPDATE pagos_citas SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE pagos_citas SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }

}
