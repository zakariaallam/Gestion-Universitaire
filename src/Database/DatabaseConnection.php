<?php

class Database 
{
    protected PDO $conn;

    public function __construct()
    {
        try{
        $this->conn = new PDO('pgsql:host=postgres;dbname=Universitaire;','root','root123');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo 'success';
        }catch(PDOException $e){
            throw new Exception('connexion Filed');
        }
    }
}