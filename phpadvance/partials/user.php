<?php
  require_once 'connect.php';
  class user extends Database{
    protected $tableName="usertable";

    //fun to add user part-4
    public function add($data){
        if(!empty($data)){
            $fileds=$placeholder=[];
            foreach($data as $field => $value){
                $fileds[]= $field; //field means name,email,id
                $placeholder[]=":{field}";//value
            }

        }
// $sql = "INSERT INTO {$this -> tableName} (pname,email,phone)  VALUES (:pname,:email,:phone);" use for static
$sql = "INSERT INTO {$this -> tableName} (".implode(',' ,$fileds). ")
                                   VALUES(".implode(',' ,$placeholder). ")";
$stmt = $this ->conn->prepare($sql);
try {
   $this->conn->beginTransaction();
   $stmt->execute($data);
   $lastInsertedId=$this->conn->lastInsertId();
   $this->conn->commit();
   return $lastInsertedId;
} catch (PODException $e) {

    echo "Error:".$e->getMessage();
    $this->conn->rollback();
}                                   
                                   
}

    //fun to get rows. -part-5
    public function getRows($start=0,$limit=4){
        $sql = "SELECT * FROM{$this -> tableName} ORDER BY DESC LIMIT{$start},{$limit}";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){//rowcount mdey data check first data ahe ka nahi
            $results=$stmt->fetchAll(PDO :: FETCH_ASSOC);//FETCH assoc use bez fetch only assoc value, 0->omkar,omkar is assoc value
        }else{
            $results=[];//data empty asel tr empty array creat kela
        }
        return $results; 
    }


    //fun to get single row(add or delete) part-5
    public function getRow($field,$value){
        $sql = "SELECT * FROM{$this -> tableName} WHERE {$field}=:{$field}";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $results=$stmt->fetch(PDO :: FETCH_ASSOC);
        }else{
            $results=[];
        }
        return $results; 
    }

    //fun to count no of rows part-5
    public function getCount(){
        $sql = "SELECT COUNT (*) as pcount FROM {$this -> tableName}";//pcount mdey all jama honar
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
       $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $results['pcount']; 
    }

    //fun upload photo

    //fun to update

    //fun to delete

    //fun for search
  }
?>