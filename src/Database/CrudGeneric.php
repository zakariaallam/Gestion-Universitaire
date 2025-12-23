<?php
require_once __DIR__ . 'DatabaseConnection.php';
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
       $stmt->bindParam("id",$id);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByEmail($email){
        $sql = "SELECT * FROM users WHERE email = ;email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam("email",$email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}