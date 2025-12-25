<?php
    require 'src/Database/DatabaseConnection.php';
    require 'src/Entity/Formateur.php'; 
    require 'src/Entity/Department.php'; 
    require 'src/Entity/Users.php';
    require_once __DIR__ .'/src/Abstract/Person.php';

$user = new Users();

do{
    echo "========= LOGIN =============\n";
    echo "Entrer  email : ";
    $email = trim(fgets(STDIN));
    echo "Enter Password : ";
    $password = trim(fgets(STDIN));
    $userdata = $user->getByColumn($email,'email');
    if (!$userdata) {
        echo "incorect";
    }
    var_dump($userdata);
     if ( $password !== $userdata['password']) {
        echo "Mot de passe incorrect. Réessayez.\n";
    }

     $role = $userdata['role'];
    echo "Bienvenue " . $userdata['username'];
    break;
}while(true);
 