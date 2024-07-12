<?php

class Tratamiento_medico 
{
	//Definición de Atributos
    private $codigoPaciente;
    private $codigoMedico;
    private $codigoTratamiento;
    private $formulaMedicamento;
    private $diagnostico;
    private $medicamento;
    private $codigoMedicamento;
    private $Conexion;

    //Método Constructor
    public function crearTratamiento($codigoPaciente, $codigoMedico, $codigoTratamiento, $formulaMedicamento, $diagnostico, $medicamento, $codigoMedicamento) {
        $this->codigoPaciente = $codigoPaciente;
        $this->codigoMedico = $codigoMedico;
        $this->codigoTratamiento = $codigoTratamiento;
        $this->formulaMedicamento = $formulaMedicamento;
        $this->diagnostico = $diagnostico;
        $this->medicamento = $medicamento;
        $this->codigoMedicamento = $codigoMedicamento;
    }

    //Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
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

    public function getCodigoTratamiento() {
        return $this->codigoTratamiento;
    }

    public function setCodigoTratamiento($codigoTratamiento) {
        $this->codigoTratamiento = $codigoTratamiento;
    }

    public function getFormulaMedicamento() {
        return $this->formulaMedicamento;
    }

    public function setFormulaMedicamento($formulaMedicamento) {
        $this->formulaMedicamento = $formulaMedicamento;
    }

    public function getDiagnostico() {
        return $this->diagnostico;
    }

    public function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    public function getMedicamento() {
        return $this->medicamento;
    }

    public function setMedicamento($medicamento) {
        $this->medicamento = $medicamento;
    }

    public function getCodigoMedicamento() {
        return $this->codigoMedicamento;
    }

    public function setCodigoMedicamento($codigoMedicamento) {
        $this->codigoMedicamento = $codigoMedicamento;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Tratamiento
    public function crearTratamiento() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO tratamiento_medico(codigoPaciente, codigoMedico, codigoTratamiento, formulaMedicamento, diagnostico, medicamento, codigoMedicamento) VALUES ('$this->codigoPaciente', '$this->codigoMedico', '$this->codigoTratamiento', '$this->formulaMedicamento', '$this->diagnostico', '$this->medicamento', '$this->codigoMedicamento')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Tratamiento
    public function consultarTratamientoPorCodigo($codigoTratamiento) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM tratamiento_medico WHERE codigoTratamiento='$codigoTratamiento'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Tratamiento
    public function actualizarTratamiento() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE tratamiento_medico SET codigoPaciente='$this->codigoPaciente', codigoMedico='$this->codigoMedico', formulaMedicamento='$this->formulaMedicamento', diagnostico='$this->diagnostico', medicamento='$this->medicamento', codigoMedicamento='$this->codigoMedicamento' WHERE codigoTratamiento='$this->codigoTratamiento'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Tratamiento
    public function eliminarTratamiento() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM tratamiento_medico WHERE codigoTratamiento='$this->codigoTratamiento'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?> 