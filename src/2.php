<?php
class SchoolProject extends Database {
  public function __construct(public string $name) {}
  public function getName(): string {
    return $this->name;
  }
}