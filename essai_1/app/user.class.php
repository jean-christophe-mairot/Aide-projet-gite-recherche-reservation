<?php

class User{
  
    
    private $pdo;
    private $pdoStatement;
    //
    private $nom;
    private $prenom;
    private $telephone;

    function __construct($nom, $prenom, $telephone){
        
        echo "je suis construit <br>";//message qui s'affiche une fois que tout objet est créé
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->telephone=$telephone;

        $this->pdo= new PDO('mysql:dbname=test;host=localhost','root', '', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));

    }

  

    /**
     * Get the value of nom
     * @return nom
     */ 
    public function getNom()
    {
        echo $this->nom . '<br>';
       return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  selfSS
     */ 
    public function setNom()
    {
        $this->nom = $nom;
        
        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        echo $this->prenom . '<br>';
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        echo $this->telephone . '<br>';
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
    


    public function readAll(){
        
        //requête pour select tout dans la table user
       $this->$pdoStatement = $this->pdo->query("SELECT * FROM user");
        //construction d'un tableau d'objets de type result
        $result = $this->$pdoStatement->fetcAll();
       return $result;
    }
}