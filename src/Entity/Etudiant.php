<?php
 
class Etudiant extends Users{

  protected string $tableName = 'etudaint';
  
   public function __construct(string $firstName,string $lastName,INT $Age)
  {
     parent::__construct($firstName, $lastName, $Age);
  }
  public function gettableName(){
    return $this->tableName;
  }
}