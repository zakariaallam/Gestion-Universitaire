<?php
require_once __DIR__ . '/../Repository/CourseRepository.php';
class CourseService 
{
   private CourseRepository $courseRepo;

   public function __construct()
   {
    $this->courseRepo = new CourseRepository();
   }
 
   public function CreateCourse($name,$nameDep,$idDep){
       if(empty($name)) throw new Exception('name is empty');
       if(empty($nameDep)) throw new Exception('name department is empty');
        $data['name'] = $name;
        $data['department_id'] = $idDep;

       $this->courseRepo->Create($data);
   }

   public function checkISTrouve($cID){
         $dep = new Course();
     $result = $dep->getRow($cID,'id');
        if(!$result) throw new Exception('is not fount');
   }
   public function updetCourse($name,$nameDep,$idDep){
    
    if(empty($name)) throw new Exception('name is empty');
       if(empty($nameDep)) throw new Exception('name department is empty');
    $data['name'] = $name;
    $data['epartment_id'] = $idDep;
    $this->courseRepo->Update($data,$cID,"id");

   }
}