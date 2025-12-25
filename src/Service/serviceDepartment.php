<?php
require_once __DIR__ . '/../Entity/Department.php';
class ServiceDepartment
{
    private Department $Department;

    public function __construct($Department)
    {
        $this->Department = $Department;
    }

    public function CreateDep($name,$description){
        if(strlen($name)<2) {
            throw new Exception('minimum deux caracter dans name');
        }
        $this->Department->Create(['name' => $name, 'description' => $description]);
    }
}