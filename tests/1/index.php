<?php

require "Slug.php";

$slug = new Slug("Cursos de Laravel");
echo $slug->render();

// echo "{$slug->render("Cursos de laravel")}";