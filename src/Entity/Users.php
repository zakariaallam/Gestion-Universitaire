<?php
require_once __DIR__ . '/../Abstract/Person.php';
class Users extends Person
{
   protected string $tableName = 'users';
   protected string $email;
   protected string $password;
   protected string $role;

   public function __construct($firstName,$lastName,$age,$email,$password)
   {
    parent::__construct($firstName,$lastName,$age);
    $this->email = $email;
    $this->password = $password;
   }

}