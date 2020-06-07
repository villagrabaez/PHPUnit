<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
  public function testTrue()
  {
    $this->assertTrue(true); // Probar si algo es verdadero
  }

  public function testFalse()
  {
    $this->assertFalse(false); // Probar si algo es falso
  }

  public function testEcuals()
  {
    $suma = 5 + 5;

    $this->assertEquals($suma, "10"); // El resultado es igual a
  }

  public function testSame()
  {
    $suma = 5 + 5;

    $this->assertSame($suma, 10); // El resultado es identico a
  }

  public function testArray()
  {
    $this->assertIsArray([]); // Comprobar si es un array
  }

  public function testHasKey()
  {
    $this->assertArrayHasKey("color", ["color" => "amarillo"]); // Comprobar si es un array
  }

  public function testEmpty()
  {
    $this->assertEmpty([]); // Esta vacio
  }

  public function testCount()
  {
    $this->assertCount(2, ["amarillo", "verde"]); // Contar elementos de un array
  }

  public function testBool()
  {
    $this->assertIsBool(false); // Es un boolean
  }

  public function testInt()
  {
    $this->assertIsInt(10); // Es un entero
  }

  public function testString()
  {
    $this->assertIsString("String"); // Es un string
  }
}