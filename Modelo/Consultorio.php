<?php

class Consultorio 
{
	//Definición de Atributos
    private $codigoConsultorio;
    private $numeroConsultorio;
    private $Conexion;

	//Método Constructor
    public function crearConsultorios($codigoConsultorio, $numeroConsultorio) {
        $this->codigoConsultorio = $codigoConsultorio;
        $this->numeroConsultorio = $numeroConsultorio;
    }

    //Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
    public function getCodigoConsultorio() {
        return $this->codigoConsultorio;
    }

    public function setCodigoConsultorio($codigoConsultorio) {
        $this->codigoConsultorio = $codigoConsultorio;
    }

    public function getNumeroConsultorio() {
        return $this->numeroConsultorio;
    }

    public function setNumeroConsultorio($numeroConsultorio) {
        $this->numeroConsultorio = $numeroConsultorio;
    }

    //Métodos Asociados al CRUD y Otros
    //Crear Consultorio
    public function crearConsultorio() {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO consultorios(codigoConsultorio, numeroConsultorio) VALUES ('$this->codigoConsultorio', '$this->numeroConsultorio')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Consultar Consultorio
    public function consultarConsultorioPorCodigo($codigoConsultorio) {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM consultorios WHERE codigoConsultorio='$codigoConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Actualizar Consultorio
    public function actualizarConsultorio() {
        $this->Conexion = Conectarse();
        $sql = "UPDATE consultorios SET numeroConsultorio='$this->numeroConsultorio' WHERE codigoConsultorio='$this->codigoConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    //Eliminar Consultorio
    public function eliminarConsultorio() {
        $this->Conexion = Conectarse();
        $sql = "DELETE FROM consultorios WHERE codigoConsultorio='$this->codigoConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}

?>
