<?php
//on crée dans la class client un attribut de type $adresse
//on génère les getter et setter 
//dans le setter on spécifie l'argument de type Adresse
//(auto généré si present dans le comment de private $adresse;)
namespace App\Entity;

class Adresse{
        
    /**
     * street
     *
     * @var string $street = le nom de la rue du client
     */

    private $street;  

    /**
     * postalCode
     *
     * @var string $postalCode = le code podtal de la ville du client
     */

    private $postalCode;   

    /**
     * city
     *
     * @var string $city = le nom de la ville du client
     */

    private $city;


    // GETTER SETTER 
    


    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postalCode
     */ 
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     *
     * @return  self
     */ 
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    
    // METHODES
   
}