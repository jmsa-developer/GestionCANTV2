<?php
require_once "BD.php";
class PagoCurso extends BD
{
    private $id;
    private $tipo;
    private $nro_comprobante;
    private $pago_total;
    private $abono;
    private $fecha;
    private $hora;
    private $descripcion;
    private $estado;
    private $participante_id;
    private $curso_id;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getNro_comprobante()
    {
        return $this->nro_comprobante;
    }
    public function setNro_comprobante($nro_comprobante)
    {
        $this->nro_comprobante = $nro_comprobante;
    }
    public function getPago_total()
    {
        return $this->pago_total;
    }
    public function setPago_total($pago_total)
    {
        $this->pago_total = $pago_total;
    }
    public function getAbono()
    {
        return $this->abono;
    }
    public function setAbono($abono)
    {
        $this->abono = $abono;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function getHora()
    {
        return $this->hora;
    }
    public function setHora($hora)
    {
        $this->hora = $hora;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function getCurso_id()
    {
        return $this->curso_id;
    }
    public function setCurso_id($curso_id)
    {
        $this->curso_id = $curso_id;
    }
    public function getParticipante_id()
    {
        return $this->participante_id;
    }
    public function setParticipante_id($participante_id)
    {
        $this->participante_id = $participante_id;
    }

    public function listar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare('SELECT pc.*, DATE_FORMAT(pc.fecha, "%d/%m/%Y") as fecha,
                c.nombre as curso, CONCAT(p.nombre, " ", p.apellido) as participante FROM 
                pagos_cursos pc INNER JOIN participaciones pa ON pc.id = pa.pago_id 
                INNER JOIN cursos c ON pa.curso_id = c.id INNER JOIN participantes p 
                ON pa.participante_id = p.id
                ORDER BY fecha DESC');
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
            $consulta = $this->prepare("SELECT * FROM pagos_cursos WHERE id = $this->id");
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
            $consulta = $this->prepare("INSERT INTO pagos_cursos(tipo, nro_comprobante, 
                pago_total, abono, fecha, hora, descripcion)"
                . "VALUES (:tipo, :nro_comprobante, 
                :pago_total, :abono, :fecha, :hora, :descripcion)");

            $consulta->bindParam(":tipo", $this->tipo);
            $consulta->bindParam(":nro_comprobante", $this->nro_comprobante);
            $consulta->bindParam(":pago_total", $this->pago_total);
            $consulta->bindParam(":abono", $this->abono);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora", $this->hora);
            $consulta->bindParam(":descripcion", $this->descripcion);
            $consulta->execute();
            $pago_id = $this->lastInsertId();

            $consult = $this->prepare("INSERT INTO participaciones(curso_id, participante_id, 
                pago_id) VALUES (:curso_id, :participante_id, :pago_id)");
            $consult->bindParam(":curso_id", $this->curso_id);
            $consult->bindParam(":participante_id", $this->participante_id);
            $consult->bindParam(":pago_id", $pago_id);
            return $consult->execute();
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
    public function modificar()
    {
        try {
            parent::connect();
            $consulta = $this->prepare("UPDATE pagos_cursos SET tipo = :tipo, nro_comprobante = :nro_comprobante,
                pago_total = :pago_total, abono = :abono, fecha = :fecha, hora = :hora, descripcion = :descripcion
                WHERE id = :id");

            $consulta->bindParam(":id", $this->id);
            $consulta->bindParam(":tipo", $this->tipo);
            $consulta->bindParam(":nro_comprobante", $this->nro_comprobante);
            $consulta->bindParam(":pago_total", $this->pago_total);
            $consulta->bindParam(":abono", $this->abono);
            $consulta->bindParam(":fecha", $this->fecha);
            $consulta->bindParam(":hora", $this->hora);
            $consulta->bindParam(":descripcion", $this->descripcion);
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
            $consulta = $this->prepare("UPDATE pagos_cursos SET estado = 0 WHERE id = $this->id");
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
            $consulta = $this->prepare("UPDATE pagos_cursos SET estado = 1 WHERE id = $this->id");
            $respuesta = $consulta->execute();
            return $respuesta;
        } catch (Exception $e) {
            $this->error = $e->errorInfo[2];
            return false;
        }
    }
}
