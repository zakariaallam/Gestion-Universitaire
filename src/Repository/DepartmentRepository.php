<?php
require_once __DIR__ . '/../Database/CrudGeneric.php';
class DepartmentRepository extends CrudGeneric
{
     protected string $tableName = 'department';

}