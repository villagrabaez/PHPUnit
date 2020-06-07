<?php

namespace App;

class User {
  protected $name;
  protected $lastName;
  protected $email;

  public function setName($name)
  {
    $this->name = trim($name);
  }

  public function setLastName($lastName)
  {
    $this->lastName = trim($lastName);
  }

  public function setEmail($email)
  {
    $this->email = trim($email);
  }

  public function getName()
  {
    return $this->name;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getFullName()
  {
    return trim("$this->name $this->lastName");
  }
}