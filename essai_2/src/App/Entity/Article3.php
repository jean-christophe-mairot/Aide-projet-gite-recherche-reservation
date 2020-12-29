<?php
//https://www.youtube.com/watch?v=mtZqvvrTiac&list=PLXGXMIp685ivYLTq9jhWrR_rUiVTNj239&index=8&ab_channel=EmmanuelRavrat
namespace App\Entity;


class Article
{

//variable de class comme une remise par exemple
//on peut la mettre en privé pour qu'elle ne soit accessible que dans la class
// public static $remise = 10;
// si on change la valeur de la propriété de class (remise) tous les objets sont touchés
// on la rend private pour qu'elle ne soit accessible que dans la class
private static $remise = 10;

//une constante, c'est comme une propriété de class mais accessible seulement en lecture
//sa valeur ne peut jamais être modifiée, ni à l'exterieur ni à l'interieur
//toujours initialisé la constante
//par defaut une constante est public et static
const REMISE_MAX = 20;

//methode liée à aucun objet

//attention !!! --- on n'utilise jamais $this dans une methode static ---- !!!
//parceque la methode n'est lié à aucun objet

// pour passer une constante en private ATTENTION : bon niveau de dev
//cette méthode permet de retourner une valeur constante qui ne peut pas être modifiée
//(comme une constante).Son accès est privé. Donc,cela revient à retourner une valeur privée
private static function CONST_REMISE_MAX(){
    return 20;
}

//cette méthode va permettre un accès public à la constante
//la passer en privée revient au même que si on avait déclaré une constante en private
public static function REMISE_MAX(){

    return self::CONST_REMISE_MAX();
}

//en php 7.1
private const REMISE_MIN = 0 ;
public const REMISE_EXCP= 50 ;
protected const REMISE_DEF = 5 ;



//mutateur pour une propriété de class
public static function setRemise($remise){

    if($remise > self::REMISE_MAX){
        self::$remise=(int)self::REMISE_MAX;
     
    }else{   
        //(int)permet de caster la valeur et la transformer en entier 
        self::$remise = (int)$remise;
        
    }

    //(int)permet de caster la valeur et la transformer en entier 
    self::$remise = (int)$remise;
}
//accesseur pour une propriété de class
public static function getRemise(){
    return self::$remise;
}

/**
 * @var string $tradeName nom commercial du produit
 */
private $tradeName;

/**
 * 
 * @var float $price nom commercial de l'artcile 
 */
private $price;




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
        //si le prix est positif on applique le prix
        if(self::isPositive($price)){
           $this->price = $price; 
        //sinon le prix est null
        }else{
            $this->price = Null;
        }

    return $this;
    }

    //methode popur la reduction
    public function getPriceAfterDiscount(){
        //return $this->price * (1- Article::$remise/100);
        //on peut remplacer Article par self
        //si je rename la class article par produit en métant self on n'a plus besoin de la rename 
        //a la main
        return $this->price * (1 - self::$remise/100);
    }    

    //methode qui vérifie si un prix est positif
    //entrée en paramètre de la methode une variable que l'on veut utiliser à l'interieur
    public static function isPositive($price){
        if($price >=0){
            return true;
        }return false;
        
    }


}