<?php
 require_once __DIR__ . '/../Database/CrudGeneric.php';

class DepartmentartRepository extends CrudGeneric
{

    protected string $tablName = 'department';
    public function add(string $name)
    {
      $this->Create([
        'name' => $name
      ]);
    }
}