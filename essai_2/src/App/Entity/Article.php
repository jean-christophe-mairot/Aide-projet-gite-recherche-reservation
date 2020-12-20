<?php
namespace App\Entity;


class Article
{

/**
 * @var string $tradeName nom commercial du produit
 */
private $tradeName;

/**
 * 
 * @var float $price nom commercial de l'artcile 
 */
private $price;

//variable de class comme une remise par exemple
//on peut la mettre en privé pour qu'elle ne soit accessible que dans la class
// public static $remise = 10;
private static $remise = 10;


/**
     * Get $tradeName nom commercial du produit
     *
     * @return  string
     */ 
    public function getTradeName()
    {
    return $this->tradeName;
    }

    /**
     * Set $tradeName nom commercial du produit
     *
     * @param  string  $tradeName  $tradeName nom commercial du produit
     *
     * @return  self
     */ 
    public function setTradeName(string $tradeName)
    {
    $this->tradeName = $tradeName;

    return $this;
    }


    
    /**
     * Get $price nom commercial de l'artcile
     *
     * @return  string
     */ 
    public function getPrice()
    {
    return $this->price;
    }

    /**
     * Set $price nom commercial de l'artcile
     *
     * @param  string  $price  $price nom commercial de l'artcile
     *
     * @return  self
     */ 
    public function setPrice(string $price)
    {
    $this->price = $price;

    return $this;
    }

    //methode popur la reduction
    public function getPriceAfterDiscount(){
        //return $this->price * (1- Article::$remise/100);
        //on peut remplacer Article par self
        return $this->price * (1- self::$remise/100);
    }    
}