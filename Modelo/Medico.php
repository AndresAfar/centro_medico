<?php

require_once 'conexion.php';

class Medico 
{
	//Definición de Atributos
    private $codigoMedico;
    private $idMedico;
    private $nombres;
    private $apellidos;
    private $telefono;
    private $pais;
    private $especialidad;
    private $salario;
    private $Conexion;

	//Método Constructor
    public function crearMedicos($codigoMedico, $idMedico, $nombres, $apellidos, $telefono, $pais, $especialidad, $salario) {
        $this->codigoMedico = $codigoMedico;
        $this->idMedico = $idMedico;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->pais = $pais;
        $this->especialidad = $especialidad;
        $this->salario = $salario;
    }

    public function setConexion($conexion) {
        $this->Conexion = $conexion;
    }

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
    public function getCodigoMedico() {
        return $this->codigoMedico;
    }

    public function setCodigoMedico($codigoMedico) {
        $this->codigoMedico = $codigoMedico;
    }

    public function getIdMedico() {
        return $this->idMedico;
    }

    public function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Médico
    public function crearMedico() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO medicos(codigoMedico, idMedico, nombres, apellidos, telefono, pais, especialidad, salario) VALUES ('$this->codigoMedico', '$this->idMedico', '$this->nombres', '$this->apellidos', '$this->telefono', '$this->pais', '$this->especialidad', '$this->salario')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Médico
    public function consultarMedicoPorCodigo($codigoMedico) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicos WHERE codigoMedico='$codigoMedico'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Médico
    public function actualizarMedico() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE medicos SET idMedico='$this->idMedico', nombres='$this->nombres', apellidos='$this->apellidos', telefono='$this->telefono', pais='$this->pais', especialidad='$this->especialidad', salario='$this->salario' WHERE codigoMedico='$this->codigoMedico'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Médico
    public function eliminarMedico() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM medicos WHERE codigoMedico='$this->codigoMedico'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?> 
