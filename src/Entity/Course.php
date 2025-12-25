<?php
require_once __DIR__ . '/../Database/CrudGeneric.php';
class Course extends CrudGeneric
{
    protected string $tableName = 'courses';

    public function getTableName(){
        return $this->tableName;
    }

}