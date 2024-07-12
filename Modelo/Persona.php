<?php

class Persona 
{
	//Definición de Atributos
    private $idPaciente;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $fechaNacimiento;
    private $edad;
    private $telefono;
    private $ciudad;
    private $direccionPaciente;
    private $Conexion;

	//Método Constructor
    public function crearPersonas($idPaciente, $nombres, $apellidos, $sexo, $fechaNacimiento, $edad, $telefono, $ciudad, $direccionPaciente) {
        $this->idPaciente = $idPaciente;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
        $this->direccionPaciente = $direccionPaciente;
    }

    //Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
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

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function getDireccionPaciente() {
        return $this->direccionPaciente;
    }

    public function setDireccionPaciente($direccionPaciente) {
        $this->direccionPaciente = $direccionPaciente;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Persona
    public function crearPersona() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO personas(idPaciente, nombres, apellidos,
         sexo, fechaNacimiento, edad, telefono, ciudad, direccionPaciente)
         VALUES ('$this->idPaciente', '$this->nombres', '$this->apellidos', '$this->sexo', '$this->fechaNacimiento', '$this->edad', '$this->telefono', '$this->ciudad', '$this->direccionPaciente')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Persona
    public function consultarPersonaPorId($idPaciente) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM personas WHERE idPaciente='$idPaciente'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Persona
    public function actualizarPersona() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE personas SET nombres='$this->nombres', apellidos='$this->apellidos', sexo='$this->sexo', fechaNacimiento='$this->fechaNacimiento', edad='$this->edad', telefono='$this->telefono', ciudad='$this->ciudad', direccionPaciente='$this->direccionPaciente' WHERE idPaciente='$this->idPaciente'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Persona
    public function eliminarPersona() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM personas WHERE idPaciente='$this->idPaciente'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?>