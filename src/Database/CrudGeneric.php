<?php
require_once 'DatabaseConnection.php';
class CrudGeneric extends Database
{
    protected string $tableName;

    public function getAll(){
        $sql = "SELECT * FROM $this->tableName";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
       $sql = "SELECT * FROM $this->tableName WHERE id = :id";
       $stmt = $this->conn->prepare($sql);
       $stmt->bindParam(":id",$id);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email",$email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } 
     public function Create(array $data){
        $column = implode(",",array_keys($data));
        $values = ":". implode(",:",array_keys($data));
       $sql = "INSERT INTO $this->tableName ($column) VALUES ($values)";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute($data);
    }

}


