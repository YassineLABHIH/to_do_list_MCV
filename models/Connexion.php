<?php
class Connexion{

    private $pdo;

    public function __construct()
    {
      // START : ouverture du canal de discussion  
    $pdo = new PDO(
        "mysql:host=localhost;dbname=to_do_list",
        "root",
       "",
   
      );
  // END : ouverture du canal de discussion  
    }

    public function getPdo(){
        return $this->pdo;
    }

    public function __destruct()
    {
        unset($pdo);
    }



}