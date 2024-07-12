<?php
use PHPUnit\Framework\TestCase;

require_once 'Modelo/Medicamento.php'; 

class MedicamentoTest extends TestCase
{
    private $medicamento;

    protected function setUp(): void
    {
        $this->medicamento = new Medicamento();
    }

    public function testSetAndGetCodigoMedicina()
    {
        $codigoMedicina = "MED001";
        $this->medicamento->setCodigoMedicina($codigoMedicina);
        $this->assertEquals($codigoMedicina, $this->medicamento->getCodigoMedicina());
    }

    public function testSetAndGetNombre()
    {
        $nombre = "Paracetamol";
        $this->medicamento->setNombre($nombre);
        $this->assertEquals($nombre, $this->medicamento->getNombre());
    }

    public function testSetAndGetContraindicaciones()
    {
        $contraindicaciones = "Ninguna";
        $this->medicamento->setContraindicaciones($contraindicaciones);
        $this->assertEquals($contraindicaciones, $this->medicamento->getContraindicaciones());
    }

    public function testSetAndGetMarca()
    {
        $marca = "Genérica";
        $this->medicamento->setMarca($marca);
        $this->assertEquals($marca, $this->medicamento->getMarca());
    }

    public function testSetAndGetFechaCaducidad()
    {
        $fechaCaducidad = "12-31-2024";
        $this->medicamento->setFechaCaducidad($fechaCaducidad);
        $this->assertEquals($fechaCaducidad, $this->medicamento->getFechaCaducidad());
    }

    public function testSetAndGetCantidad()
    {
        $cantidad = 100;
        $this->medicamento->setCantidad($cantidad);
        $this->assertEquals($cantidad, $this->medicamento->getCantidad());
    }

    public function testSetAndGetTamaño()
    {
        $tamaño = "500mg";
        $this->medicamento->setTamaño($tamaño);
        $this->assertEquals($tamaño, $this->medicamento->getTamaño());
    }

    public function testSetAndGetTratamientoMedico()
    {
        $tratamientoMedico = "Dolor";
        $this->medicamento->setTratamientoMedico($tratamientoMedico);
        $this->assertEquals($tratamientoMedico, $this->medicamento->getTratamientoMedico());
    }

}
?>
