<?php
namespace App\Banque;

use App\Client\Compte as ClientCompte;

// quand les attributs sont en private on fait des getter setter
// self c la classe 
// $this c l instance de la classe
// :void -> retoune rien, vide

/**
 * on ne peut instancier une classe abstraite
 * abstract = pour les classes parent
 * class Compte bancaire
 */
abstract class Compte
{    
    /**
     * titulaire
     *
     * @var ClientCompte $titulaire user du compte
     */
    private $titulaire;

    /**
     * solde
     *passe de private à protected pour y avoir accés de la classe enfant
     * @var float $solde solde du compte 
     */
    protected $solde;
    

    /**
     * Method __construct
     * si le solde n'est pas renseigner on lui donne 100 euro (float $solde =100)
     * valeur par defaut passer dans le construct
     * @param ClientCompte $compte compte du titulaire
     * @param float $solde
     * @return void 
     */

    //injection de dépendance: on lie le compte dans le dossier client
    //à la class parent  
    public function __construct(ClientCompte $compte,float $solde =100)
    {
        // on attribut le nom à la propriété titulaire de l'instance créée 
        $this->titulaire = $compte;
        // self le nom de la classe
        $this->solde = $solde;
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
     * @return  ClientCompte
     */ 
    public function getTitulaire():ClientCompte
    {
        return $this->titulaire;
    }

    /**
     * Set $compte user du compte
     * pour changer le nom d'un titulaire
     * @param  ClientCompte  $compte  compte du client
     *
     * @return  compte compte bancaire
     */ 
    public function setTitulaire(ClientCompte $compte): self
    {
        if(isset($compte)){
            $this->titulaire = $compte;
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
    public function retirer(float $solde)
    {
        // on vérifie le montant et le solde
        if($solde> 0 && $this->solde >= $solde){
            $this->solde -= $solde;
        }else{
            echo "Montant invalide ou solde insuffisant";
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
