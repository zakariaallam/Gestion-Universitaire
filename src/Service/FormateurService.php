<?php
require_once __DIR__ . '/../Repository/FormateurRepository.php';

class FormateurService
{
    private FormateurRepository $formateurRepo;

    public function __construct(FormateurRepository $formateurRepo)
    {
        $this->formateurRepo = $formateurRepo;
    }

    public function CreateFormateur($Fname,$Lname,$age,$specialete){
        if(strlen($Fname)<3 || $age<0 ) throw new Exception('erreur');
        $this->formateurRepo->Create(['first_name'=>$Fname,'last_name'=>$Lname,'age'=> 45 , 'specialite'=>$specialete]);
    }

    public function geteAllFormateur(){
       return $this->formateurRepo->getAll();
    }
}
