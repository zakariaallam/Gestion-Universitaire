<?php
require_once __DIR__ . '/../Database/CrudGeneric.php';

class Course extends CrudGeneric
{
    protected $namecour;
    protected string $tableName = 'course';
    public function construct($namecour){
        $this->namecour = $namecour;
    }
    public function gettableName(){
        return $this->tableName;
    }
}