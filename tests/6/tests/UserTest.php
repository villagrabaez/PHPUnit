<?php

/**
 * Ciclo del TDD=Desarrollo guiado por pruebas
 * -------------------------------------------
 * Rojo: Todo esta mal
 * Verde: La prueba funciona, las cosas van bien
 * Refactor: Mejorar el codigo
 */

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
  protected $user;

  public function setUp() : void
  {
    $this->user = new User;
  }

  public function test_i_can_the_name()
  {
    // $user = new User;
    $this->user->setName("Bernardino");

    $this->assertEquals($this->user->getName(), "Bernardino");
  }

  public function test_i_can_the_lastname()
  {
    // $user = new User;
    $this->user->setLastName("Villagra Baez");

    $this->assertEquals($this->user->getLastName(), "Villagra Baez");
  }

  public function test_i_can_the_email()
  {
    $this->user->setEmail("b@hola.com");

    $this->assertEquals($this->user->getEmail(), "b@hola.com");
  }

  public function test_get_the_fullname()
  {
    $this->user->setName("Bernardino");
    $this->user->setLastName("Villagra Baez");

    $this->assertEquals($this->user->getFullName(), "Bernardino Villagra Baez");
  }

  public function test_get_the_fullname_empty()
  {
    $this->assertEmpty($this->user->getFullName());
  }

  public function test_name_lastname_email_without_spaces()
  {
    $this->user->setName("   Bernardino   ");
    $this->user->setLastName("    Villagra    ");
    $this->user->setEmail("    b@hola.com   ");

    $this->assertEquals($this->user->getName(), "Bernardino");
    $this->assertEquals($this->user->getLastName(), "Villagra");
    $this->assertEquals($this->user->getEmail(), "b@hola.com");
  }
}