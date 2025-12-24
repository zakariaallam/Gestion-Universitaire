<?php
require_once __DIR__ . '/../Database/CrudGeneric.php';

class Department extends CrudGeneric
{
    
    protected string $tableName = 'departement';

    public function getTableName(){
        return $this->tableName;
    }
}