<?php

/**
 * class Compte bancaire
 */
class Compte
{    
    /**
     * titulaire
     *
     * @var string $titulaire user du compte
     */
    public $titulaire;    

    /**
     * solde
     *
     * @var float $solde solde du compte 
     */
    public $solde;
        
    /**
     * Method __construct
     * si le solde n'est pas renseigner on lui donne 100 euro (float $solde =100)
     * valeur par defaut passer dans le construct
     * @param string $titulaire
     * @param float $solde
     * @return void 
     */


    public function __construct(string $titulaire,float $solde =100)
    {
        // on attribut le nom à la propriété titulaire de l'instance créée 
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }
    
    /**
     * Method deposer
     *
     * @param float $montant [explicite description]
     *
     */
    public function deposer(float $montant)
    {
        //verifi si le montant est possitif
        if($montant>0){
            $this->montant += $montant;
        }
    }

        
    /**
     * Method voirsolde
     * peremet de voir le solde du compte
     * @return void
     */
    public function voirsolde()
    {
        echo "le solde du compte est de $this->solde ";
    }
    
    /**
     * Method retirer un montant du solde du compte
     *
     * @param float $montant montant a retirer
     *
     * @return void
     */
    public function retirer(float $montant)
    {
        // on vérifie le montant et le solde
        if($montant> 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }
}