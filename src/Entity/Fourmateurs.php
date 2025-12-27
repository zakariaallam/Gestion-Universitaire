<?php
require_once __DIR__ . '/../Abstract/Person.php';
class Formateur extends Person
{
  protected string $tableName = 'formateurs';
  protected string $specialise;

  public function __construct(string $firstName,string $lastName,INT $Age,string $specialise)
  {
     parent::__construct($firstName, $lastName, $Age);
     $this->specialise = $specialise;
  }
}