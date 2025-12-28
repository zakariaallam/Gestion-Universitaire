<?php
require_once __DIR__ . '/DatabaseConnection.php';
class CrudGeneric extends Database
{
    protected string $tableName;

    public function getAll(){
        $sql = "SELECT * FROM $this->tableName";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRow($name,$PK){
       $sql = "SELECT * FROM $this->tableName WHERE $PK = :$PK";
       $stmt = $this->conn->prepare($sql);
       $stmt->bindParam("$PK",$name);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByColumn($value,$PK){
        $sql = "SELECT * FROM $this->tableName WHERE $PK = :$PK";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam("$PK",$value);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Create(array $data){
        $column = implode(",",array_keys($data));
        $values = ":". implode(",:",array_keys($data));
       $sql = "INSERT INTO $this->tableName ($column) VALUES ($values)";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute($data);
    }

    public function Update(array $data,$value,$PK){
        $column = array_keys($data);
        $update = implode(",",array_map(function ($key) {
            return " $key = :$key";
        },$column));
        $sql = "UPDATE $this->tableName SET $update WHERE $PK =:$PK";
        $stmt = $this->conn->prepare($sql);
        $data["$PK"] = $value;
        $stmt->execute($data);
    }

    public function Delete($value,$PK){
        $sql = "DELETE FROM $this->tableName WHERE $PK = :$PK";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam("$PK",$value);
        $stmt->execute();
    }
    

}