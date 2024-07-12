<?php
use PHPUnit\Framework\TestCase;

require_once 'Modelo/Cita.php'; // Asegúrate de cambiar el path por la ubicación correcta de tu archivo Cita.php

class CitaTest extends TestCase
{
    private $cita;

    protected function setUp(): void
    {
        $this->cita = new Cita();
    }

    public function testSetAndGetCodigoCita()
    {
        $codigoCita = "CITA001";
        $this->cita->setCodigoCita($codigoCita);
        $this->assertEquals($codigoCita, $this->cita->getCodigoCita());
    }

    public function testSetAndGetFecha()
    {
        $fecha = "2024-07-11";
        $this->cita->setFecha($fecha);
        $this->assertEquals($fecha, $this->cita->getFecha());
    }

    public function testSetAndGetHora()
    {
        $hora = "10:00:00";
        $this->cita->setHora($hora);
        $this->assertEquals($hora, $this->cita->getHora());
    }

    public function testSetAndGetLugar()
    {
        $lugar = "Consultorio 1";
        $this->cita->setLugar($lugar);
        $this->assertEquals($lugar, $this->cita->getLugar());
    }

    public function testSetAndGetCodigoPaciente()
    {
        $codigoPaciente = "PAC001";
        $this->cita->setCodigoPaciente($codigoPaciente);
        $this->assertEquals($codigoPaciente, $this->cita->getCodigoPaciente());
    }

    public function testSetAndGetCodigoMedico()
    {
        $codigoMedico = "MED001";
        $this->cita->setCodigoMedico($codigoMedico);
        $this->assertEquals($codigoMedico, $this->cita->getCodigoMedico());
    }

    public function testSetAndGetCodigoConsultorio()
    {
        $codigoConsultorio = "CONS001";
        $this->cita->setCodigoConsultorio($codigoConsultorio);
        $this->assertEquals($codigoConsultorio, $this->cita->getCodigoConsultorio());
    }

    // Puedes agregar más pruebas para los métodos de CRUD si tienes un mock de la conexión a la base de datos
}
?>
