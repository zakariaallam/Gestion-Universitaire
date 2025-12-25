<?php

class CourseRepository extends CrudGeneric
{
   protected string $tableName = 'courses';

   public function getName(){
    return $this->tableName;
   } 
}