<?php


namespace App\Client;

class Compte
{   
   /**
    * nom
    *
    * @var string $nom = nom du client 
    */
   private $nom;
      
   /**
    * prenom
    *
    * @var string $prenom = prenom du client
    */
   private $prenom; 
   
   /**
    * ville
    *
    * @var string $ville = la ville d'habitation du client
    */
   private $ville;
   

// ************** constructeur **************************    
    /**
     * Method __construct
     *
     * @param string $nom nom du client
     * @param string $prenom prenom du client
     *
     * @return void
     */
    public function __construct(string $nom, string $prenom, string $ville)
    {
        $this->nom = $nom;
        $this->prenom= $prenom;
        $this->ville= $ville;
    }
// ******************************************************
} 