<?php
use PHPUnit\Framework\TestCase;

require_once 'Modelo/Empleado.php'; 

class EmpleadoTest extends TestCase
{
    private $empleado;

    protected function setUp(): void
    {
        $this->empleado = new Empleado();
    }

    public function testSetAndGetCodigoEmpleado()
    {
        $codigoEmpleado = "EMP001";
        $this->empleado->setCodigoEmpleado($codigoEmpleado);
        $this->assertEquals($codigoEmpleado, $this->empleado->getCodigoEmpleado());
    }

    public function testSetAndGetIdEmpleado()
    {
        $idEmpleado = "12345678";
        $this->empleado->setIdEmpleado($idEmpleado);
        $this->assertEquals($idEmpleado, $this->empleado->getIdEmpleado());
    }

    public function testSetAndGetNombres()
    {
        $nombres = "Juan";
        $this->empleado->setNombres($nombres);
        $this->assertEquals($nombres, $this->empleado->getNombres());
    }

    public function testSetAndGetApellidos()
    {
        $apellidos = "Pérez";
        $this->empleado->setApellidos($apellidos);
        $this->assertEquals($apellidos, $this->empleado->getApellidos());
    }

    public function testSetAndGetFechaNacimiento()
    {
        $fechaNacimiento = "1980-01-01";
        $this->empleado->setFechaNacimiento($fechaNacimiento);
        $this->assertEquals($fechaNacimiento, $this->empleado->getFechaNacimiento());
    }

    public function testSetAndGetEdad()
    {
        $edad = 40;
        $this->empleado->setEdad($edad);
        $this->assertEquals($edad, $this->empleado->getEdad());
    }

    public function testSetAndGetTelefono()
    {
        $telefono = "555123456";
        $this->empleado->setTelefono($telefono);
        $this->assertEquals($telefono, $this->empleado->getTelefono());
    }

    public function testSetAndGetCiudad()
    {
        $ciudad = "Ciudad";
        $this->empleado->setCiudad($ciudad);
        $this->assertEquals($ciudad, $this->empleado->getCiudad());
    }

    public function testSetAndGetDireccionEmpleado()
    {
        $direccion = "Calle 123";
        $this->empleado->setDireccionEmpleado($direccion);
        $this->assertEquals($direccion, $this->empleado->getDireccionEmpleado());
    }

    public function testSetAndGetSalario()
    {
        $salario = 50000;
        $this->empleado->setSalario($salario);
        $this->assertEquals($salario, $this->empleado->getSalario());
    }

    public function testSetAndGetCargo()
    {
        $cargo = "Gerente";
        $this->empleado->setCargo($cargo);
        $this->assertEquals($cargo, $this->empleado->getCargo());
    }
}
?>
