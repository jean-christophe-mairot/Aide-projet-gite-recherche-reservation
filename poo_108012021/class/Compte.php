<?php
// quand les attributs sont en private on fait des getter setter
// self c la classe 
// $this c l instance de la classe
// :void -> retoune rien, vide

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
    private string $titulaire;    

    /**
     * solde
     *
     * @var float $solde solde du compte 
     */
    private float $solde;
    
    //constante pour y accéder on passe par la classe
    const TAUX_INTERETS = 5/100 ;

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
        // self le nom de la classe
        $this->solde = $solde + ($solde * self::TAUX_INTERETS);
        //pour afficher si le titulaire est à decouvert lors de la création de l'instance
        echo $this->decouvert();

    }
    
    /**
     * Get $solde solde du compte
     * retoune le solde du compte
     * @return  float
     */ 
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Set $solde solde du compte
     * modifie le solde du compte
     * @param  float  $solde  $solde solde du compte
     *
     * @return  self
     */ 
    public function setSolde(float $solde): self
    {
        if($solde>=0){
            $this->solde = $solde;    
        }

        return $this;
    }

    /**
     * Get $titulaire user du compte
     *
     * @return  string
     */ 
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Set $titulaire user du compte
     * pour changer le nom d'un titulaire
     * @param  string  $titulaire  $titulaire user du compte
     *
     * @return  self
     */ 
    public function setTitulaire(string $titulaire): self
    {
        if($titulaire != ""){
            $this->titulaire = $titulaire;
        }
        return $this;
    }

    // ***************************** METHODE **************************************

    /**
     * Method deposer
     *
     * @param float $montant [explicite description]
     *
     */
    public function deposer(float $solde)
    {
        //verifi si le montant est positif
        if($solde>0){
            $this->solde += $solde;
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
        // 
        echo $this->decouvert();
    }
    
    /**
     * decouvert check si le titualire est à decouvert
     * 
     * @return void
     */
    private function decouvert()
    {
        if($this->solde<0){
            return "Vous êtes à decouvert";
        }else{
            return "vous n'êtes pas à decouvert";
        }
    }

    
    /**
     * __toString :
     * methode magique pour la conversion en chaine de caractères
     *
     * @return string
     */
    public function __toString()
    {
        return "vous visualisez le compte de $this->titulaire, le solde est de $this->solde euros";
    }

}
