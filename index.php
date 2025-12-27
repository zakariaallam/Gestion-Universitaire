
<?php
require_once __DIR__ . '/src/Entity/Users.php';
require_once __DIR__ . '/src/Entity/Department.php';
require_once __DIR__ . '/src/Service/serviceDepartment.php';
require_once __DIR__ . '/src/Service/UserService.php';
require_once __DIR__ . '/src/Service/FormateurService.php';
require_once __DIR__ . '/src/Service/CourseService.php';
require_once __DIR__ . '/src/Entity/Course.php';
require_once __DIR__ . '/src/Entity/Fourmateurs.php';
require_once __DIR__ . '/menu.php';
$data = [];
global $data;
do {

    echo "========= LOGIN =============\n";
    echo "Entrer  email : ";
    $email = trim(fgets(STDIN));
    echo "Enter Password : ";
    $pass = trim(fgets(STDIN));
    $user = new UserService(new UserRepository);
    global $user;
    try {
        $Auth = $user->Login($email,$pass);
    } catch (Exception $e) {
        throw new Exception('user not fond');
    }
    var_dump($Auth);
    if (!$Auth) {
        echo 'not fond';
    }
} while ($Auth['password'] != $pass);

if ($Auth['role'] == 'admin') {
    do {
        echo "=========== HLLOW $email =============\n";
        echo "1 : Gérer les départements\n";
        echo "2 : Gérer les cours\n";
        echo "3 : Gérer les formateurs\n";
        echo "4 : Affecter un formateur à un cours\n";
        echo "5 : Consulter les listes\n";
        echo "0 : pour Exite\n\n";
        echo 'Entrer votre choi : ';
        $choi = trim(fgets(STDIN));
        $dep = new Department();
        $serviceDep = new ServiceDepartment($dep);
        global $serviceDep;
        switch ($choi) {
            case 1:
                do {

                    $choi = menu($dep->getTableName());
                    switch ($choi) {
                        default:
                            'Entrer nuber between 0 et 4';
                            break;
                        case 1:
                            echo 'Enter le name de department : ';
                            $name = trim(fgets(STDIN));
                            echo 'Enter le description  : ';
                            $description = trim(fgets(STDIN));
                            $serviceDep->CreateDep($name,$description);
                            echo "\n department create\n\n";
                            break;
                        case 2:
                            echo 'Entre id de department que vous modifier : ';
                            $nID = trim(fgets(STDIN));
                            $result = $dep->getRow($nID,'id');
                            if(!$result){
                                echo "je n'ai trouvé ce department \n\n";
                                break;
                            }
                            $data = [];
                            echo 'Entrer la nouvell name de department : ';
                            $nDep = trim(fgets(STDIN));
                            echo 'Entrer la nouvell Description : ';
                            $nDescption = trim(fgets(STDIN));
                            $data['name'] = $nDep;
                            $data['description'] = $nDescption;
                            $dep->Update($data,$nID,'id');
                            echo "\n\n Update success \n\n";
                            break;
                        case 3:
                            echo 'Entre id de department que vous Delete : ';
                            $sID = trim(fgets(STDIN));
                            $result = $dep->getRow($sID,'id');
                            if(!$result){
                                echo "je n'ai trouvé ce department \n\n";
                                break;
                            }
                            $dep->Delete($sID,'id');
                            echo "\n Delete success \n\n";
                            break;
                        case 4:
                            $result = $dep->getAll();
                            var_dump($result);
                            break;
                        case 5:
                            break;
                    }
                } while ($choi != 5);
                break;
            case 2:

                do {
                    $cours = new Course();
                    $couresServ = new CourseService;
                    $choi = menu($cours->getTableName());
                    switch ($choi) {
                        default:
                            'Entrer nuber between 0 et 4';
                            break;
                        case 1:
                            echo 'Enter le name de Course : ';
                            $name = trim(fgets(STDIN));
                            echo 'Enter name department to inser this course : ';
                            $nameDep = trim(fgets(STDIN));
                            $dep = new Department();
                            $result = $dep->getRow($nameDep,'name');
                            $couresServ->CreateCourse($name,$nameDep,$result['id']);
                            echo "\n\n Creation success \n\n";
                            break;
                        case 2:
                            echo 'Entre id de course que vous modifier : ';
                            $cID = trim(fgets(STDIN));
                            $result = $dep->getRow($cID,'id');
                            if(!$result){
                                echo "je n'ai trouvé ce course \n\n";
                                break;
                            }
                            $data = [];
                            echo 'Entrer la nouvell name de Course : ';
                            $nCourse = trim(fgets(STDIN));
                            echo 'Entrer la nouvell name de deaprtment : ';
                            $nameDep = trim(fgets(STDIN));
                            $data['name'] = $nCourse;
                            $cours->Update($data,$cID,'id');
                            echo "\n\n Update success \n\n";
                            break;
                        case 3:
                            echo 'Entre id de department que vous Delete : ';
                            $cID = trim(fgets(STDIN));
                            $result = $dep->getRow($cID,'id');
                            if(!$result){
                                echo "je n'ai trouvé ce department \n\n";
                                break;
                            }
                            $cours->Delete($cID,'id');
                            echo "\n Delete success \n\n";
                            break;
                        case 4:
                            $result = $cours->getAll();
                            var_dump($result);
                            break;
                        case 5:
                            break;
                    }
                } while ($choi != 5);
                break;
            case 3:
                do {
                                $formateur = new FormateurService(new FormateurRepository);
                                global $formateur;
                                $choi = menu('formateur');
                                switch ($choi) {
                                    default:
                                        'Entrer nuber between 0 et 4';
                                        break;
                                    case 1:
                                        echo 'Enter le firstname de formateur : ';
                                        $firstname = trim(fgets(STDIN));
                                        echo 'Enter le lastname de formateur : ';
                                        $lastname = trim(fgets(STDIN));
                                        echo 'Enter le age de formateur : ';
                                        $age = trim(fgets(STDIN));
                                        echo 'Enter le specialité de formateur : ';
                                        $special = trim(fgets(STDIN));
                                        $formateur->CreateFormateur($firstname,$lastname,$age,$special);
                                        echo "\n\n Creation success \n\n";
                                        break;
                                    case 2:
                                        
                                                echo 'entrer id de formateur qui veux modifier : ';
                                                $id = trim(fgets(STDIN));
                                                $result = $formateur->getRow($id,'id');
                                                if(!$result){
                                                    echo "je n'ai trouvé formateur avec ce nom ";
                                                    break;
                                                }
                                                $person ;
                                                echo 'Enter le nouvell email : ';
                                                $nEmail = trim(fgets(STDIN));
                                                echo 'Enter le nouvell password : ';
                                                $nPass = trim(fgets(STDIN));
                                                $data = [];
                                                $data['email'] = $nEmail;
                                                $data['password'] = $nPass;
                                                $user->Update($data,$id,'id');
                                               
                                        
                                        break;
                                    case 3:
                                         echo 'entrer email de formateur : ';
                                                $email = trim(fgets(STDIN));
                                                $formateur = $user->getRow($email,'email');
                                                if(!$formateur){
                                                    echo "je n'ai trouvé formateur avec ce nom ";
                                                    break;
                                                }
                                                $user->Delete($email,'email');
                                                echo "\n delete success\n";
                                        break;
                                    case 4:
                                        $result = $formateur->geteAllFormateur();
                                        var_dump($result);
                                        break;
                                    case 5:
                                        break;
                                }
                            } while ($choi != 5);
                break;
            case 4:
                break;
            case 5:
                break;
            case 0:
                echo "\nExit";
                break;
        }
    } while ($choi != 0);
}
