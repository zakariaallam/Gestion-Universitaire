<?php
   require_once __DIR__ . '/../Database/DatabaseConnection.php';

   class users
   {
      private string $email;
      private string $password;
      private string $role;
   public function __construct(string $email,string $password,string $role){
      $this->email = $email;
      $this->password = password_hash($password,PASSWORD_DEFAULT);
      $this->role = $role;
   }
   public function getemail():string{
      return $this->email;
   }
   public function getrole():string{
      return $this->role;
   }
   public function virifierpass(string $password):string{
     return password_verify($password,$this->password);
   }
   }