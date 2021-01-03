<?php

namespace App\Entity;

class Article5{


        
    /**
     * name
     *
     * @var string $name le nom du produit
     */
    private $name;
    
    /**
     * description
     *
     * @var string $description description du produit
     */
    private $description;
    
    /**
     * price
     *
     * @var float $price le prix du produit
     */
    private $price;
    

    /**
     * Get $name le nom du produit
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set $name le nom du produit
     *
     * @param  string  $name  $name le nom du produit
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get $description description du produit
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set $description description du produit
     *
     * @param  string  $description  $description description du produit
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get $price le prix du produit
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set $price le prix du produit
     *
     * @param  float  $price  $price le prix du produit
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }
}