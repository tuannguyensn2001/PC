<?php


class Model
{
    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "project";

    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    }
    public function getData($query){
        $result=$this->conn->query($query);
        $array=array();
        while ($row = $result -> fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }
    public function delete($id,$table){

        $query="DELETE FROM $table WHERE id=$id";

        $result=$this->conn->query($query);

    }

}