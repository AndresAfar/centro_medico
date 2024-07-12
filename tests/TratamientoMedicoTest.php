<?php

use PHPUnit\Framework\TestCase;

require_once 'Modelo/Tratamiento_medico.php';

class TratamientoMedicoTest extends TestCase
{
    private $tratamiento;

    protected function setUp(): void
    {
        $this->tratamiento = new Tratamiento_medico();
    }

    public function testSetGetCodigoPaciente()
    {
        $this->tratamiento->setCodigoPaciente('123');
        $this->assertEquals('123', $this->tratamiento->getCodigoPaciente());
    }

    public function testSetGetCodigoMedico()
    {
        $this->tratamiento->setCodigoMedico('456');
        $this->assertEquals('456', $this->tratamiento->getCodigoMedico());
    }

    public function testSetGetCodigoTratamiento()
    {
        $this->tratamiento->setCodigoTratamiento('789');
        $this->assertEquals('789', $this->tratamiento->getCodigoTratamiento());
    }

    public function testSetGetFormulaMedicamento()
    {
        $this->tratamiento->setFormulaMedicamento('Fórmula A');
        $this->assertEquals('Fórmula A', $this->tratamiento->getFormulaMedicamento());
    }

    public function testSetGetDiagnostico()
    {
        $this->tratamiento->setDiagnostico('Diagnóstico X');
        $this->assertEquals('Diagnóstico X', $this->tratamiento->getDiagnostico());
    }

    public function testSetGetMedicamento()
    {
        $this->tratamiento->setMedicamento('Medicamento Y');
        $this->assertEquals('Medicamento Y', $this->tratamiento->getMedicamento());
    }

    public function testSetGetCodigoMedicamento()
    {
        $this->tratamiento->setCodigoMedicamento('ABC123');
        $this->assertEquals('ABC123', $this->tratamiento->getCodigoMedicamento());
    }
}


?>