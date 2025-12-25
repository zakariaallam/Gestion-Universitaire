<?php
 require_once __DIR__ . '/DatabaseConnection.php';
class CrudGeneric extends Database
{
    private string $tableName;

    public function getAll(){
        $sql = "SELECT * FROM $this->tableName";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getRow($id,$PK){
       $sql = "SELECT * FROM $this->tableName WHERE $PK = :$PK";
       $stmt = $this->conn->prepare($sql);
       $stmt->bindParam("$PK",$id);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByColumn($value,$PK){
        $sql = "SELECT * FROM $this->tableName WHERE $PK = :$PK";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam("$PK",$value);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

  public function Create(array $data){
      $column = implode(",",array_keys($data));
      var_dump($column);
    $values = ":" . implode(",:",array_keys($data));
    $sql = "INSERT INTO $this->tableName ($column) VALUES ($values)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute($data);

  }

    public  function update($data,$id){
        $column = array_keys($data);
        $update = implode(",",array_map(function ($key){
            return " $key = :$key";
        },$column));
        $data['id'] = $id;
        $sql = "UPDATE $this->tableName SET $update WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    public function Delete($id){
        $sql = "DELETE FROM $this->tableName WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam("id",$id);
        $stmt->execute();
    }

    public function getTableName()
    {
        return $this->tableName;
    }

    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }
}