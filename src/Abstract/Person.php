<?php

abstract class Person
{
    protected string $name;
    protected string $email;
    
    public function __construct(string $name,string $email){
        $this->name = $name;
        $this->email = $email;
    }
    public function getname(){
        return $this->name;
    }
     public function getemail(){
        return $this->email;
    }
    

    
}