<?php

class Database{
    protected $conn;
    public function __construct($host,$user,$pass,$dbName) {
        $this->conn=new mysqli($host,$user,$pass,$dbName);
    }
    public function getAll($table,$cols){
        $sql="SELECT $cols FROM $table";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return FALSE;
        }
    }
    public function getAllByVisibility($table,$cols,$where){
        $sql="SELECT $cols FROM $table Where $where";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    public function getById($table,$cols,$where){
        $sql="SELECT $cols FROM $table WHERE $where";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_assoc();
        }else{
            return FALSE;
        }
    }
    public function Update($table,$cols,$where){
        $sql="UPDATE $table SET $cols WHERE $where";
        $result=$this->conn->query($sql);
        if($this->conn->affected_rows>0){
            return true;
        }else{
            return FALSE;
        }
    }
    public function Insert($table,$cols){
        $sql="INSERT INTO $table SET $cols";
        $result=$this->conn->query($sql);
        if($this->conn->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }
    public function Delete($table,$where){
        $sql="DELETE FROM $table WHERE $where";
        $result=$this->conn->query($sql);
        if($this->conn->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }
}
$obj=new Database("localhost","root","1234","zend28");//Here Database Configaration;