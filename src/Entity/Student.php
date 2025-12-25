<?php

class Student extends Users
{
    protected string $tableName = 'users';
    

    public function construct() 
    {
        parent::construct($firstName,$lastName,$email,$password);

    }

    public function getDepartmentname(): int
    {
        return $this->departmentId;
    }
}