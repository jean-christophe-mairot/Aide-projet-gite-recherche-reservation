<?php

namespace App\Entity;
use \PDO;


class Crud {
    
private string $localhost ;
private string $dbname ;
private string $nomUser ;
private string $mdp ;
private $pdo;

public function __construct($localhost= "localhost", $dbname= "projet_gite", $nomUser= 'root', $mdp=''){
    $this->localhost = $localhost;
    $this->dbname = $dbname;
    $this->nomUser = $nomUser;
    $this->mdp = $mdp;
}

private function getPdo(){
//evite un connexion a la base de donnée par query
if ($this->pdo === null){
    //on met un\devant pdo parcequ'il ne fait pas parti de ce name space 
    //il faut retourner à la racine ou mettre un use \pdo 
    $pdo=new PDO("mysql:host=localhost;dbname=projet_gite",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo = $pdo;
    }
    return $this->$pdo;
}    

public function query($statement){
    $req=$this->getPdo()->query($statement);
    $result=$req->fetchall(PDO::FETCH_OBJ);
    return $result;
}
   
}