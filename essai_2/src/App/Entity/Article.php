<?php
namespace App\Entity;

class Article{


    
    /**
     * name
     *
     * @var string  $name => nom de l'article
     */
    private $name;


    

    /**
     * Set $name => nom de l'article
     *
     * @param  string  $name  $name => nom de l'article
     *
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

//on n'a pas déclaré d'attribut mais on peut y accéder de l'index 
//en affecter un price à l'article 
    public function setPrice($price){
        $this->price = $price;
    }
}