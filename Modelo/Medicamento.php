<?php

class Medicamento 
{
	//Definición de Atributos
    private $codigoMedicina;
    private $nombre;
    private $contraindicaciones;
    private $marca;
    private $fechaCaducidad;
    private $cantidad;
    private $tamaño;
    private $tratamientoMedico;
    private $Conexion;

	//Método Constructor
    public function crearMedicamento($codigoMedicina, $nombre, $contraindicaciones, $marca, $fechaCaducidad, $cantidad, $tamaño, $tratamientoMedico) {
        $this->codigoMedicina = $codigoMedicina;
        $this->nombre = $nombre;
        $this->contraindicaciones = $contraindicaciones;
        $this->marca = $marca;
        $this->fechaCaducidad = $fechaCaducidad;
        $this->cantidad = $cantidad;
        $this->tamaño = $tamaño;
        $this->tratamientoMedico = $tratamientoMedico;
    }

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
    public function getCodigoMedicina() {
        return $this->codigoMedicina;
    }

    public function setCodigoMedicina($codigoMedicina) {
        $this->codigoMedicina = $codigoMedicina;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getContraindicaciones() {
        return $this->contraindicaciones;
    }

    public function setContraindicaciones($contraindicaciones) {
        $this->contraindicaciones = $contraindicaciones;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getFechaCaducidad() {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad($fechaCaducidad) {
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function getTamaño() {
        return $this->tamaño;
    }

    public function setTamaño($tamaño) {
        $this->tamaño = $tamaño;
    }

    public function getTratamientoMedico() {
        return $this->tratamientoMedico;
    }

    public function setTratamientoMedico($tratamientoMedico) {
        $this->tratamientoMedico = $tratamientoMedico;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Medicamento
    public function crearMedicamento() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO medicamentos(codigoMedicina, nombre, contraindicaciones, marca, fechaCaducidad, cantidad, tamaño, tratamientoMedico) VALUES ('$this->codigoMedicina', '$this->nombre', '$this->contraindicaciones', '$this->marca', '$this->fechaCaducidad', '$this->cantidad', '$this->tamaño', '$this->tratamientoMedico')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Medicamento
    public function consultarMedicamentoPorCodigo($codigoMedicina) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicamentos WHERE codigoMedicina='$codigoMedicina'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Medicamento
    public function actualizarMedicamento() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE medicamentos SET nombre='$this->nombre', contraindicaciones='$this->contraindicaciones', marca='$this->marca', fechaCaducidad='$this->fechaCaducidad', cantidad='$this->cantidad', tamaño='$this->tamaño', tratamientoMedico='$this->tratamientoMedico' WHERE codigoMedicina='$this->codigoMedicina'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Medicamento
    public function eliminarMedicamento() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM medicamentos WHERE codigoMedicina='$this->codigoMedicina'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?>
