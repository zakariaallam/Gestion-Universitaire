<?php

function menu($name) {
    echo "1 : Create $name \n";
    echo "2 : Update $name \n";
    echo "3 : Delete $name \n";
    echo "4 : getAll $name \n";
    echo "5 : back $name \n\n";
    echo "Entrer votre choi : ";
    $choi = trim(fgets(STDIN));
    return $choi;
}