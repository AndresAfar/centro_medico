<?php
use PHPUnit\Framework\TestCase;

require_once 'Modelo/Consultorio.php';

class ConsultorioTest extends TestCase
{
    private $consultorio;

    protected function setUp(): void
    {
        $this->consultorio = new Consultorio();
    }

    public function testSetAndGetCodigoConsultorio()
    {
        $codigoConsultorio = "CONS001";
        $this->consultorio->setCodigoConsultorio($codigoConsultorio);
        $this->assertEquals($codigoConsultorio, $this->consultorio->getCodigoConsultorio());
    }

    public function testSetAndGetNumeroConsultorio()
    {
        $numeroConsultorio = 101;
        $this->consultorio->setNumeroConsultorio($numeroConsultorio);
        $this->assertEquals($numeroConsultorio, $this->consultorio->getNumeroConsultorio());
    }
}
?>
