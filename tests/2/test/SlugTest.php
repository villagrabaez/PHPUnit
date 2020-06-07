<?php

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{
  public function test_render()
  {
    require "app/Slug.php";

    $slug = new Slug("Cursos de Laravel");

    echo $slug->render();

    // $expected = "cursos-de-laravel";

    $this->assertEquals($slug->render(), "cursos-de-laravel");
  }
}