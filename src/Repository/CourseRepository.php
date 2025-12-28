<?php

class CourseRepository extends CrudGeneric
{
   protected string $tableName = 'courses';

   public function getName(){
    return $this->tableName;
   } 
    public function getcouses(){
        $sql = "SELECT courses.id, courses.name AS course_name, departments.name AS department_name
            FROM courses JOIN departments ON courses.departments_id = departments.id";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return  $result  ;
      }
}