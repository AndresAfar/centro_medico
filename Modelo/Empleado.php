<?php

class Empleado 
{
	//Definición de Atributos
    private $codigoEmpleado;
    private $idEmpleado;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $edad;
    private $telefono;
    private $ciudad;
    private $direccionEmpleado;
    private $salario;
    private $cargo;
    private $Conexion;

	//Método Constructor
    public function crearEmpleados($codigoEmpleado, $idEmpleado, $nombres, $apellidos, $fechaNacimiento, $edad, $telefono, $ciudad, $direccionEmpleado, $salario, $cargo) {
        $this->codigoEmpleado = $codigoEmpleado;
        $this->idEmpleado = $idEmpleado;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
        $this->direccionEmpleado = $direccionEmpleado;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
    public function getCodigoEmpleado() {
        return $this->codigoEmpleado;
    }

    public function setCodigoEmpleado($codigoEmpleado) {
        $this->codigoEmpleado = $codigoEmpleado;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
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

    public function getDireccionEmpleado() {
        return $this->direccionEmpleado;
    }

    public function setDireccionEmpleado($direccionEmpleado) {
        $this->direccionEmpleado = $direccionEmpleado;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Empleado
    public function crearEmpleado() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO empleados(codigoEmpleado, idEmpleado, nombres, apellidos, fechaNacimiento, edad, telefono, ciudad, direccionEmpleado, salario, cargo) VALUES ('$this->codigoEmpleado', '$this->idEmpleado', '$this->nombres', '$this->apellidos', '$this->fechaNacimiento', '$this->edad', '$this->telefono', '$this->ciudad', '$this->direccionEmpleado', '$this->salario', '$this->cargo')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Empleado
    public function consultarEmpleadoPorCodigo($codigoEmpleado) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM empleados WHERE codigoEmpleado='$codigoEmpleado'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Empleado
    public function actualizarEmpleado() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE empleados SET idEmpleado='$this->idEmpleado', nombres='$this->nombres', apellidos='$this->apellidos', fechaNacimiento='$this->fechaNacimiento', edad='$this->edad', telefono='$this->telefono', ciudad='$this->ciudad', direccionEmpleado='$this->direccionEmpleado', salario='$this->salario', cargo='$this->cargo' WHERE codigoEmpleado='$this->codigoEmpleado'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Empleado
    public function eliminarEmpleado() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM empleados WHERE codigoEmpleado='$this->codigoEmpleado'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?>

