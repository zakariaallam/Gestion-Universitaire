<?php
 require_once __DIR__ . '/../Database/CrudGeneric.php';

 class CurseRepository
 {
    protected string $tableName = 'course';
    public function addcourse(string $title,string $departmentid)
    {
        $this->Create([
            'title'=>$title,
            'department_id'=>$departmentid
        ]);
    }
 }