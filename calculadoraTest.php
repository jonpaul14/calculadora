<<?php 
use PHPUnit\Framework\TestCase;
require __DIR__."/../calculadora/calculadora.php";
final class calculadoraTest extends TestCase
{
	public function testsuma()
	{
		$calc = new calculadora();
		$this->assertEquals(
			7, 
			$calc->suma(3,4)
		);
	}
	public function testresta()
	{
		$calc = new calculadora();
		$this->assertEquals(
			1, 
			$calc->resta(5,4)
		);
	}
	public function testmultiplicacion()
	{
		$calc = new calculadora();
		$this->assertEquals(
			12, 
			$calc->multiplicacion(3,4)
		);
	}
	public function testdivision()
	{
		$calc = new calculadora();
		$this->assertEquals(
			1, 
			$calc->division(4,4)
		);
	}


}
 ?>
