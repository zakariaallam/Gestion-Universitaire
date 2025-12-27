<?php
require_once __DIR__ . '/../Repository/UserRepository.php';

class UserService
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function Login($email,$pass){
         if(empty($pass) || empty($email)) throw new Exception('name or password Vide');
         return $this->userRepo->getRow($email,'email');
    }
}