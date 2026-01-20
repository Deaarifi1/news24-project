<?php
declare(strict_types=1);

class Person {
  protected string $name;

  public function __construct(string $name) { // constructor
    $this->name = $name;
  }

  public function getName(): string { return $this->name; }   // encapsulation get
  public function setName(string $name): void { $this->name = $name; } // set

  public function __destruct() { /* destructor demo */ }
}
