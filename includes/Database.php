<?php

class Database{
    public $pdo; // prive variable
    public $statement ;

    //constructor beneden
    public function __construct($db = 'belasting',$host = 'localhost:3310',$user = 'root',$pass = ''){
        //try and catch voor meer duidelijkheid met fouten
        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "COnnected to ".$db."successfully";
        }
        catch (PDOException $e){
            die( 'Connection error:'. $e->getMessage());
        }
    }

    // het run functie voor minder code straks
    public function run($query,$params = null){
        try{
            $this->statement = $this->pdo->prepare($query);
            if($params != null){
                $this->statement->execute($params);
            }
            else{
                $this->statement->execute();
            }
            return $this->statement;
        }
        catch(PDOException $e){
            echo "Execution error : ".$e->getMessage();
            return false;
        }
    }
}





?>