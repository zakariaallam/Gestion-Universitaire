<?php
require_once __DIR__ . '/../Repository/FormateurRepository.php';

class FormateurService
{
    private FormateurRepository $formateurRepo;

    public function __construct(FormateurRepository $formateurRepo)
    {
        $this->formateurRepo = $formateurRepo;
    }

    public function CreateFormateur($userid,$specialete){
        $this->formateurRepo->Create([ 'user_id'=> $userid, 'speciality'=>$specialete]);
    }
}
