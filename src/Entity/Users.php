<?php

require_once __DIR__ . '/../Database/CrudGeneric.php';
require_once __DIR__ . '/../Abstract/Person.php';

class Users extends Person
{
    protected string $tableName = 'users';

    public function __construct(
        string $firstname = '',
        string $lastname = ''
    ) {
        parent::__construct($firstname, $lastname);
    }
}
