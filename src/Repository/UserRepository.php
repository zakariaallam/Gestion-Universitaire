<?php

require_once __DIR__ . '/../Entity/Users.php';
 class UserRepository extends CrudGeneric
 {
    protected string $tableName = 'users';
 }