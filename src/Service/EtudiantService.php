<?php
require_once __DIR__ . '/../Repository/EtudiantRepository.php';

class EtudiantService
{
    private EtudiantRepository $etudiantRepo;

    public function __construct(EtudiantRepository $etudiantRepo)
    {
        $this->etudiantRepo = $etudiantRepo;
    }

    public function CreateEtudiant($userid,$nameclass){
        $this->etudiantRepo->Create([ 'user_id'=> $userid, 'nameclass'=>$nameclass]);
    }
}
