<?php

use PHPUnit\Framework\TestCase;

require_once 'Modelo/Persona.php';

class PersonaTest extends TestCase
{
    private $persona;

    protected function setUp(): void
    {
        $this->persona = new Persona();
    }

    public function testSetGetIdPaciente()
    {
        $this->persona->setIdPaciente('123');
        $this->assertEquals('123', $this->persona->getIdPaciente());
    }

    public function testSetGetNombres()
    {
        $this->persona->setNombres('Juan');
        $this->assertEquals('Juan', $this->persona->getNombres());
    }

    public function testSetGetApellidos()
    {
        $this->persona->setApellidos('Pérez');
        $this->assertEquals('Pérez', $this->persona->getApellidos());
    }

    public function testSetGetSexo()
    {
        $this->persona->setSexo('Masculino');
        $this->assertEquals('Masculino', $this->persona->getSexo());
    }

    public function testSetGetFechaNacimiento()
    {
        $this->persona->setFechaNacimiento('1990-01-01');
        $this->assertEquals('1990-01-01', $this->persona->getFechaNacimiento());
    }

    public function testSetGetEdad()
    {
        $this->persona->setEdad(30);
        $this->assertEquals(30, $this->persona->getEdad());
    }

    public function testSetGetTelefono()
    {
        $this->persona->setTelefono('123456789');
        $this->assertEquals('123456789', $this->persona->getTelefono());
    }

    public function testSetGetCiudad()
    {
        $this->persona->setCiudad('Madrid');
        $this->assertEquals('Madrid', $this->persona->getCiudad());
    }

    public function testSetGetDireccionPaciente()
    {
        $this->persona->setDireccionPaciente('Calle Falsa 123');
        $this->assertEquals('Calle Falsa 123', $this->persona->getDireccionPaciente());
    }
}


?>
