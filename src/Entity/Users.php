<?php

require_once __DIR__ . '/../Database/CrudGeneric.php';
require_once __DIR__ . '/../Abstract/Person.php';

class Users extends Person
{
    protected string $tableName = 'users';
    protected string $username;
    protected string $password;

    public function __construct(string $username, string $password) {
        parent::__construct($firstname, $lastname,$email);
    }
}
