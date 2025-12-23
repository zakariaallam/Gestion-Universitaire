<?php
require_once __DIR__ . '/src/Entity/Users.php';

$user = new Users()
do{
echo "========= LOGIN =============\n";
echo "Entrer  email : ";
$email = trim(fgets(STDIN));
echo "Enter Password : ";
$pass = trim(fgets(STDIN));
}while($email != 'zakaria' && $pass != 'allam');

do{
    echo "=========== HLLOW $email =============\n";
    echo "1 : Gérer les départements\n";
    echo "2 : Gérer les cours\n";
    echo "3 : Gérer les formateurs\n";
    echo "4 : Affecter un formateur à un cours\n";
    echo "5 : Consulter les listes\n";
    echo "0 : pour Exite\n\n";
    echo 'Entrer votre choi : ';
    $choi = trim(fgets(STDIN));

    switch($choi){
        case 1 : 
            break;
        case 2 : 
            break;
        case 3 : 
            break;
        case 4 : 
            break;
        case 5 : 
            break;
        case 0 :  'Exit';
            break;
    }

}while($choi != 0);
