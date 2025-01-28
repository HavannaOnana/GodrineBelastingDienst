<?php
include_once "../includes/Database.php";

class Huurtoeslag{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // pack alle informatie uit het tabel
    public function selectAllFromUsers(){
        $query = 'SELECT * FROM users';
        return $this->db->run($query)->fetchAll();
    }

    public function selectUserByName($username){
    $query = 'SELECT name, inkomen FROM users WHERE username = :username';
    $params = [':username' => $username];
    return $this->db->run($query, $params)->fetch();
}

}







?>