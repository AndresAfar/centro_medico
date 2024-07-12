<?php

use PHPUnit\Framework\TestCase;

require_once 'Modelo/Paciente.php';

class PacienteTest extends TestCase
{
    private $paciente;

    protected function setUp(): void
    {
        $this->paciente = new Paciente();
    }

    public function testSetGetCodigoPaciente()
    {
        $this->paciente->setCodigoPaciente('123');
        $this->assertEquals('123', $this->paciente->getCodigoPaciente());
    }

    public function testSetGetIdPaciente()
    {
        $this->paciente->setIdPaciente('456');
        $this->assertEquals('456', $this->paciente->getIdPaciente());
    }

    public function testSetGetNombres()
    {
        $this->paciente->setNombres('Juan');
        $this->assertEquals('Juan', $this->paciente->getNombres());
    }

    public function testSetGetApellidos()
    {
        $this->paciente->setApellidos('Pérez');
        $this->assertEquals('Pérez', $this->paciente->getApellidos());
    }

    public function testSetGetSexo()
    {
        $this->paciente->setSexo('Masculino');
        $this->assertEquals('Masculino', $this->paciente->getSexo());
    }

    public function testSetGetFechaNacimiento()
    {
        $this->paciente->setFechaNacimiento('1990-01-01');
        $this->assertEquals('1990-01-01', $this->paciente->getFechaNacimiento());
    }

    public function testSetGetEdad()
    {
        $this->paciente->setEdad(30);
        $this->assertEquals(30, $this->paciente->getEdad());
    }

    public function testSetGetTelefono()
    {
        $this->paciente->setTelefono('123456789');
        $this->assertEquals('123456789', $this->paciente->getTelefono());
    }

    public function testSetGetCiudad()
    {
        $this->paciente->setCiudad('Madrid');
        $this->assertEquals('Madrid', $this->paciente->getCiudad());
    }

    public function testSetGetDireccionPaciente()
    {
        $this->paciente->setDireccionPaciente('Calle Falsa 123');
        $this->assertEquals('Calle Falsa 123', $this->paciente->getDireccionPaciente());
    }
}


?>