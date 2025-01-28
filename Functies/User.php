<?php

include_once "../includes/Database.php";

class User{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    //toevoegen van een user
    public function insertUser($username,$password,$name,$leeftijd,$woonplaats,$adres,$gezinssamenstelling,$inkomen,$partnernaam,$partnerleeftijd){
        
            $query = "INSERT INTO users(username,password,name,leeftijd,woonplaats,adres,gezinssamenstelling,inkomen,partnernaam,partnerleeftijd)
                    VALUES (:username,:password,:name,:leeftijd,:woonplaats,:adres,:gezinssamenstelling,:inkomen,:partnernaam,:partnerleeftijd)";
            $params = [
                ":username"=>$username,
                ":password"=>$password,
                ":name"=>$name,
                ":leeftijd"=>$leeftijd,
                ":woonplaats"=>$woonplaats,
                ":adres"=>$adres,
                ":gezinssamenstelling"=>$gezinssamenstelling,
                ":inkomen"=>$inkomen,
                ":partnernaam"=>$partnernaam,
                ":partnerleeftijd"=>$partnerleeftijd
            ];
            return $this->db->run($query,$params);
    }

    // dit check of the gebruikers gegevens wel goed is of niet 
    public function validateUser($username, $password) {
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $params = [
            ":username" => $username,
            ":password" => $password
        ];
        $result = $this->db->run($query, $params);
        return $result->fetch(); 
    }

    
}


?>