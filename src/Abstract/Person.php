<?php

abstract class Person
{
    protected string $firstName;
    protected string $lastName;
    protected string $Age;

    public function __construct($firstName,$lastName,$Age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->Age = $Age;
    }
    
    public function toString(){
        return "firstName :" . $this->firstName .
                "lastName : ". $this->lastName .
                 "age : "  . $this->Age;
            }
}