<?php

class Cita
{
	//Definición de Atributos
    private $codigoCita;
    private $fecha;
    private $hora;
    private $lugar;
    private $codigoPaciente;
    private $codigoMedico;
    private $codigoConsultorio;
    private $Conexion;

    //Método Constructor
    public function registrarCita($codigoCita, $fecha, $hora, $lugar, $codigoPaciente, 
                                 $codigoMedico, $codigoConsultorio)
    {
        $this->codigoCita = $codigoCita;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->lugar = $lugar;
        $this->codigoPaciente = $codigoPaciente;
        $this->codigoMedico = $codigoMedico;
        $this->codigoConsultorio = $codigoConsultorio;
    }

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
    public function getCodigoCita() {
        return $this->codigoCita;
    }

    public function setCodigoCita($codigoCita) {
        $this->codigoCita = $codigoCita;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getLugar() {
        return $this->lugar;
    }

    public function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    public function getCodigoPaciente() {
        return $this->codigoPaciente;
    }

    public function setCodigoPaciente($codigoPaciente) {
        $this->codigoPaciente = $codigoPaciente;
    }

    public function getCodigoMedico() {
        return $this->codigoMedico;
    }

    public function setCodigoMedico($codigoMedico) {
        $this->codigoMedico = $codigoMedico;
    }

    public function getCodigoConsultorio() {
        return $this->codigoConsultorio;
    }

    public function setCodigoConsultorio($codigoConsultorio) {
        $this->codigoConsultorio = $codigoConsultorio;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Cita
    public function crearCita() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO citas(codigoCita, fecha, hora, lugar, codigoPaciente,
                            codigoMedico, codigoConsultorio)
                            VALUES ('$this->codigoCita', '$this->fecha', '$this->hora',
                            '$this->lugar', '$this->codigoPaciente', '$this->codigoMedico', 
                            '$this->codigoConsultorio')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Cita
    public function consultarCitaPorCodigo($codigoCita) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM citas WHERE codigoCita='$codigoCita'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Cita
    public function actualizarCita() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE citas SET fecha='$this->fecha', hora='$this->hora', lugar='$this->lugar', codigoPaciente='$this->codigoPaciente', codigoMedico='$this->codigoMedico', codigoConsultorio='$this->codigoConsultorio' WHERE codigoCita='$this->codigoCita'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Cita
    public function estadoCita() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM citas WHERE codigoCita='$this->codigoCita'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?>
