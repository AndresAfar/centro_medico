<?php

use PHPUnit\Framework\TestCase;

require_once 'Modelo/Medico.php';

class MedicoTest extends TestCase
{
    private $medico;

    protected function setUp(): void
    {
        $this->medico = new Medico();
    }

    public function testSetGetCodigoMedico()
    {
        $this->medico->setCodigoMedico('123');
        $this->assertEquals('123', $this->medico->getCodigoMedico());
    }

    public function testSetGetIdMedico()
    {
        $this->medico->setIdMedico('456');
        $this->assertEquals('456', $this->medico->getIdMedico());
    }

    public function testSetGetNombres()
    {
        $this->medico->setNombres('Juan');
        $this->assertEquals('Juan', $this->medico->getNombres());
    }

    public function testSetGetApellidos()
    {
        $this->medico->setApellidos('Pérez');
        $this->assertEquals('Pérez', $this->medico->getApellidos());
    }

    public function testSetGetTelefono()
    {
        $this->medico->setTelefono('123456789');
        $this->assertEquals('123456789', $this->medico->getTelefono());
    }

    public function testSetGetPais()
    {
        $this->medico->setPais('España');
        $this->assertEquals('España', $this->medico->getPais());
    }

    public function testSetGetEspecialidad()
    {
        $this->medico->setEspecialidad('Cardiología');
        $this->assertEquals('Cardiología', $this->medico->getEspecialidad());
    }

    public function testSetGetSalario()
    {
        $this->medico->setSalario(3000);
        $this->assertEquals(3000, $this->medico->getSalario());
    }
}


?>