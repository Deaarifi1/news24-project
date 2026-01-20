<?php
declare(strict_types=1);
require_once __DIR__ . '/Person.php';

class User extends Person { // inheritance
  private string $email;

  public function __construct(string $name, string $email) {
    parent::__construct($name);
    $this->email = $email;
  }

  public function getEmail(): string { return $this->email; }
  public function setEmail(string $email): void { $this->email = $email; }
}
