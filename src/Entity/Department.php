<?php
require_once __DIR__ . '/../Database/CrudGeneric.php';

class Department extends CrudGeneric
{
    protected string $tableName = 'department';
}