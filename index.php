<?php
    require 'src/Database/DatabaseConnection.php';
    require 'src/Entity/Formateur.php'; 
    require 'src/Entity/Department.php'; 
    require 'src/Entity/Users.php';
    require_once __DIR__ .'/src/Abstract/Person.php';

    $user = new Users();
    $email = 'yassir@gmail.com';
    $chekuse = $user->getByColumn($email,'email');
    var_dump($chekuse);
 