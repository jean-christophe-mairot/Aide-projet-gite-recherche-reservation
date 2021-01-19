<?php
namespace App\Banque;
/**
 * CompteCourant : compte bancaire qui hérite de la class Compte
 * on dit qu'elle etend Compte
 * donc on a besoin d'un titulaire et d'un solde dans l'instance de la class
 */
class CompteCourant extends Compte
{    
    /**
     * decouvert autorisé
     *
     * @var int
     */
    private $decouvert;
    
    // **************** construct ************************************* 

        
    /**
     * __construct : 
     * on reprend de la class parent le titulaire et le solde
     *
     * @param  string $titulaire
     * @param  float $solde
     * @param  int $decouvert
     * @return void
     */
    public function __construct(string $titulaire,float $solde, int $decouvert)
    {
        //on transfert les info nécessaire au constructeur
        //donc on appel la class parent
        parent::__construct($titulaire,$solde);
        $this->decouvert = $decouvert; 
    }


    // **************** getter / setter ********************************

        
    /**
     * getDecouvert
     *
     * @return int
     */
    public function getDecouvert(): int
    {
        return $this->decouvert;
    }

    /**
     * Set the value of decouvert
     *
     * @return  self
     */ 
    public function setDecouvert($solde): self
    {
        if($solde>=0){
            $this->decouvert = $solde;
        }
        return $this;
    }

    public function retirer(float $solde)
    {
        //on verifie si le decouvert permet le retrait
        if($solde > 0 && $this->solde - $solde >= -$this->decouvert){
            $this->solde -= $solde;
        }else{
            echo 'solde insuffisant';
        }
    }
}