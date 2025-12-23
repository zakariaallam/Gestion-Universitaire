<?php

class dbcon 
{
    public $conn;

    public function db_connect()
    {
        try{
        $this->conn = new PDO('mysql:host=localhost;dbname=testprojet;','root','');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connexion";
        return $this->conn;
      }catch(PDOException $e){
            echo "error connexion" .$e->getMessage();
        }
    }
}
$db = new dbcon();
echo $db->db_connect();