<?php

abstract class Person
{
    protected string $firstname;
    protected string $lastname;
    protected string $email;

    public function __construct(string $firstname, string $lastname,string $email)
    {
        $this->setName($firstname);
        $this->setName($lastname);
        $this->setEmail($email);
    }

    public function setName(string $name): void
    {   
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

}
