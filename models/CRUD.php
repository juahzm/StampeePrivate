<?php
namespace App\Models;

error_reporting(E_ALL);
ini_set('display_errors', 1);

abstract class CRUD extends \PDO {
    final public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=stampee; port=3306; charset=utf8', 'root', '');
    }

    public function getLastInsertId() {
        return $this->lastInsertId();
    }

    final public function insert($data){
        if (!is_array($data) || empty($data)) {
            return false;
        }


        $data_keys = array_fill_keys($this->fillable, '');
        $data = array_intersect_key($data, $data_keys);

        $fieldName = implode(', ', array_keys($data));
        $fieldValue = ":".implode(', :', array_keys($data));
        $sql="INSERT INTO $this->table ($fieldName) VALUES ($fieldValue);";
        
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if($stmt->execute()){
            return $this->lastInsertId();
        }else{
            return false;
        }
  
    }

    public function unique($field, $value){
        $sql = "SELECT * FROM $this->table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count==1){
            return $stmt->fetch();
        }else{
            return false;
        }

    }

    final public function select($field = null) {
        if($field == null){
            $field = $this->primaryKey;
        }
        $sql = "SELECT * FROM $this->table";
        $stmt =$this->query($sql);
        return $stmt->fetchAll();
    }

    final public function selectId($value){
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetchAll();
        }else{
            return false;
        }
    }


    final public function selectWithJoin($joinTable, $selectField, $externalKey){
        
        $sql = "SELECT $selectField FROM $this->table 
                INNER JOIN $joinTable ON $this->table.$this->primaryKey = $joinTable.$externalKey
                WHERE $joinTable.$externalKey = $this->table.$this->primaryKey";
    
       
        $stmt = $this->prepare($sql);
    
        $stmt->execute();
    
        $count = $stmt->rowCount();
    
        if ($count >= 1) {
            return $stmt->fetch();
        } else {
            return false;
        }
    }

    

}

