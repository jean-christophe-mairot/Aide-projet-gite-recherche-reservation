<?php
namespace App\Entity;

use DateTime;

class Client{
    
    /**
     * lastName
     *
     * @var string $lastName le nom du client
     */
    private $lastName;   

    /**
     * firstName
     *
     * @var string $firstname le prenom du client
     */
    private $firstName;  

    /**
     * creatAt
     *
     * @var DateTime $creatAt la date de création du client
     */
    private $creatAt;  

    /**
     * code
     *
     * @var string $code le code client 
     */
    private $code;
    
    /**
     * adresse
     *
     * @var Adresse $adresse = adresse du client de la class adresse
     */
    private $adresse;



    /**
     * Get $lastName le nom du client
     *
     * @return  string
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set $lastName le nom du client
     *
     * @param  string  $lastName  $lastName le nom du client
     *
     * @return  self
     */ 
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get $firstname le prenom du client
     *
     * @return  string
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set $firstname le prenom du client
     *
     * @param  string  $firstName  $firstname le prenom du client
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get $creatAt la date de création du client
     *
     * @return  datetime
     */ 
    public function getCreatAt()
    {
        return $this->creatAt;
    }

    /**
     * Set $creatAt la date de création du client
     *
     * @param  datetime  $creatAt  $creatAt la date de création du client
     *
     * @return  self
     */ 
    public function setCreatAt(DateTime $creatAt)
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    /**
     * Get $code le code client
     *
     * @return  string
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set $code le code client
     *
     * @param  string  $code  $code le code client
     *
     * @return  self
     */ 
    public function setCode(string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get $adresse = adresse du client de la class adresse
     *
     * @return  Adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set $adresse = adresse du client de la class adresse
     * bine spécifier l'argument de type Adresse
     * @param  Adresse  $adresse  $adresse = adresse du client de la class adresse
     *
     * @return  self
     */ 
    public function setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    //quand on fait un new dans l'index cela appel le constructeur de la class
        
    
    /**
     * __construct
     ** methode magique car elle est automatiquement appelée lors de l'intanciation
     * du client
     * 
     * @param  mixed $lastName
     * @param  mixed $firstName
     * @return void
     */
    public function __construct($lastName, $firstName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        //permet d'appeler une methode depuis le constructeur
        $this->code = $this->getHash();
        $this->creatAt = new \DateTime('now');
    }
        
    /**
     * __destruct de l'objet client
     * il est appeler automatiquement à la fdin du script
     * permet de géré un journal de log par exemple 
     * voir pour la session en cour
     * 
     * déclenche une action en base de données
     * 
     * le destructeur sera appelé même si l'execution du script est 
     * stoppée en utilisant la fonction exit()
     * 
     * il n'est pas possible de lancer une exception depuis le destructeur
     * 
     * @return void
     */

    public function __destruct()
    {
        echo '<p>l\'objet de type Client '. $this->firstName.' a été détruit. </p>';
    }


    /**
     * getHash 
     * 
     * methode pour encodé le nom du client
     * génère un hash à partir du nom et du prenom
     * @return string
     */
    private function getHash()
    {
        return sha1($this->lastName.$this->firstName);
    }



    
}