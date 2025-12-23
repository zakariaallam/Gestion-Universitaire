<?php
require_once __DIR__ . '/../Database/DatabaseConnection.php';
class Users 
{
   protected string $email;
   protected string $password;
   protected string $role;

   public function __construct($email,$password,$role)
   {
    $this->email = $email;
    $this->password = $password;
    $this->role = $role;
   }

}