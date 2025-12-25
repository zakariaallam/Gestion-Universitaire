<?php

abstract class Person
{
    protected string $firstname;
    protected string $lastname;
    protected string $email;

    public function __construct(string $firstname, string $lastname,string $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }


    public function getLastname()
    {
        return $this->lastname;
    }


    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

   
    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }
}
