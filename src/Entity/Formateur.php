<?php
require_once __DIR__ . '/../Abstract/person.php';
require_once __DIR__ . '/../Database/CrudGeneric.php';

class Formateur extends Users
{
    private string $specialty;


    public function construct( string $specialty  ) {

        parent::construct($firstName,$lastName,$email,$password, 'FORMATEUR' );

        $this->specialty = $specialty;
    }

    public function getSpecialty(): string
    {
        return $this->specialty;
    }
}