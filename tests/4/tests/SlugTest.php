<?php

use PHPUnit\Framework\TestCase;
use App\Slug;

class SlugTest extends TestCase
{
  public function test_render()
  {
    // require "app/Slug.php";

    $slug = new Slug("Cursos de Laravel");

    echo $slug->render();

    // $expected = "cursos-de-laravel";

    $this->assertEquals($slug->render(), "cursos-de-laravel");
  }

  public function test_render_sin_espacios()
  {
    // require "app/Slug.php";

    $slug = new Slug("   Cursos de Laravel   ");

    echo $slug->render();

    // $expected = "cursos-de-laravel";

    $this->assertEquals($slug->render(), "cursos-de-laravel");
  }
}