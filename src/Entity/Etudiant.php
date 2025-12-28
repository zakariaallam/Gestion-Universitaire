<?php
 
class Etudiant extends Users{

  protected string $tableName = 'etudaint';
  protected string $nameclass;
  
   public function __construct(string $firstName,string $lastName,INT $Age ,string $nameclass)
  {
     parent::__construct($firstName, $lastName, $Age);
     $this->$nameclass = $nameclass ;
  }
  public function gettableName(){
    return $this->tableName;
  }

  public function getNameclass()
  {
    return $this->nameclass;
  }

  public function setNameclass($nameclass)
  {
    $this->nameclass = $nameclass;

    return $this;
  }
}