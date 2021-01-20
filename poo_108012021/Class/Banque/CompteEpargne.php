<?php

namespace App\Banque;

use App\client\Compte as ClientCompte;

/**
 * extends compte avec taux d'interêts
 */
class CompteEpargne extends Compte
{    
    /**
     * taux_interets
     *
     * @var int
     */
    private $tauxInterets;

    // ************** construct ************************    
    /**
     * __construct
     * constructeur du compte epargne
     * @param  ClientCompte $compte = compte du client dependance de client compte
     * @param  float $solde
     * @param  int $taux
     * @return void
     */
    public function __construct(ClientCompte $compte,float $solde, int $taux)
    {
        parent::__construct($compte,$solde);
        $this->tauxInterets = $taux;
    }

    // ************* getter /setter ********************

    /**
     * Get taux_interets
     *
     * @return  int
     */ 
    public function getTauxInterets(): int
    {
        return $this->tauxInterets;
    }

    /**
     * Set taux_interets
     *
     * @param  int  $tauxInterets  taux_interets
     *
     * @return  self
     */ 
    public function setTauxInterets(int $tauxInterets): self
    {
        if($tauxInterets>=0){
            $this->tauxInterets = $tauxInterets;
        }
        return $this;
    }

    // ***************** METHODES ***************************

    public function verserInterets()
    {
        $this->solde = $this->solde + ($this->solde * $this->tauxInterets/100 );
    }
}