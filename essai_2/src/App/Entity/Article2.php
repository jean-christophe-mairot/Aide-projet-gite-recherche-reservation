<?php
//ne pas oublier le use use App\Entity\Article; dans la page qui ce sert de la class
namespace App\Entity;

class Article
{
//attribut toujours declaré en private

//propriété ou attributs des futur article
//en dessous de la documentation voir phpdoc
/**
 * @var string $reference référence du produit
 */
// 
private $reference;

/**
 * @var string $tradeName nom commercial du produit
 */
private $tradeName;

/**
 * @var string $description description du produit
 */
 
private $description;

/**
 * 
 * @var float $price nom commercial de l'artcile 
 */
private $price;




//mutateur de la propriete = setter
//dans la methode on passe le paramtre de reference

    public function setReference($reference){
        
        //check la reference ne fasse pas plus de 4 caractères
        if(strlen($reference)>4){
            echo 'La référence '.$reference.'dépasse 4 caractère <br>';
        }else{
            //$this c l'objet courant
            //$this->reference fait le lien 
            $this->reference= $reference;
            echo 'ok ref <br>';
        }
    }

//les accesseurs ou getter de la propiété reference
//il n'y a jamais riendans les parenthèse d'un getter
//puisque son seul objectif et de retourner une valeur

    public function getReference(){
        //toujours un return dans un getter
        return $this->reference;
    }


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
     * Get the value of description
     */ 
    public function getDescription()
    {
    return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
    $this->description = $description;

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


    //d'autre methodes d'objet

    /**
     * @var int $percent 
     */
    public function increasePrice($percent){

        $this->price =$this->price + (1 + $percent/100);
    }
    /**
     * @var int $percent 
     */
    public function decreasePrice($percent){
        
        $this->price =$this->price + (1 - $percent/100);
    }

    //mauvaise façon de faire le  nom de la methodse n'est pas clair
    //on a un effet de bord (effet secondaire)
    private function generateReference(){
        $words = explode(' ',$this->tradeName);
        $letters='';
        foreach ($words as $word) {
            $letters .=strtoupper(substr($word,0,1));
        }
        $this->reference = $letters;
    }
    //
    public function autoAssignementReference(){
        $this->reference = $this->generateReference();
    }

}