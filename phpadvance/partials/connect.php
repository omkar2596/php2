<?php
class Database{
    private $dbserver="localhost";
    private $dbuser="root";
    private $dbpassword="";
    private $dbname="userdata";
    protected $conn;


public function __construct(){
    try{
        $dsn="mysql:host={$this->dbserver}; 
        dbname={$this->dbname}; charset=utf8";

        $options=array(PDO::ATTR_PERSISTENT);     //hey and $option nahi lihley tari cltey 
    
        $this->conn=new PDO($dsn,$this->dbuser,$this->dbpassword,$options);
    }catch(PDOException $e){
        echo "connection erroe".$e->getMessage();

    }
}
}