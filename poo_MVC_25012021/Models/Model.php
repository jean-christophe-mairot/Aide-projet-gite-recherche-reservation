<?php
namespace App\Models;
use App\Core\Db;


class Model extends Db
{
    // table de la base de données
    protected $table;

    //instance de Db on peut faire unbn this db pour recup pdo
    private $db;

  
    // ******************* METHODE POUR LE CRUD & GESTION DE LA BBD **************************

    // ************************************** READ *******************************************   
    /**
     * find
     * evite de faire une boucle pour une information on fait un fecth
     * @param  int $id
     * @return void
     */
    public function find(int $id_annonce)
    {
        return $this->request("SELECT * FROM {$this->table} WHERE id = $id_annonce ")->fetch();
    }



    /**
     * findAll
     *
     * @return void
     */
    public function findAll()
    {
        //accé en lecture total à la table
        $query = $this->request('SELECT * FROM '. $this->table);
        return $query->fetchAll();
        
    }
          
    /**
     * findBy
     *
     * @param  array $criteres
     * @return void
     */
    public function findBy(array $criteres)
    {
        $champs =[];
        $valeurs =[];
        //  on boucle pour éclater le tableau
        foreach($criteres as $champ => $valeur){
            // SELECT * FROM annonces WHERE actif = ? AND signale =0
            // bindvalue(1,valeur)
            $champs[]="$champ = ?";
            $valeurs[]= $valeur;
            }
            //on transforme le tableau champs en une chaine de caractères
            $liste_champs= implode(' AND ', $champs);
          
            // on execute la requête
            return $this->request('SELECT * FROM '.$this->table. ' WHERE '  . $liste_champs, $valeurs)->fetchAll();
            
        
    }
    
    // ************************************************** FIN DU READ *********************************************

    // ***************************************************** CREATE ***********************************************
    public function create()
    {
        $champs =[];
        $intero=[];
        $valeurs =[];
        //  on boucle pour éclater le tableau
        foreach($this as $champ => $valeur){
            // INSERT INTO annonces (titre, descritpion ...) VALUES (?,?,....)
            // bindvalue(1,valeur)
                if($valeur !== null && $champ !== 'db' && $champ !== 'table'){
                    $champs[] = $champ;
                    $intero[] = "?";
                    $valeurs[] = $valeur;  
                }
            
            }
            //on transforme le tableau champs en une chaine de caractères
            $liste_champs= implode(', ', $champs);
            $liste_intero = implode(', ', $intero);
            
            // on execute la requête
            return $this->request('INSERT INTO '.$this->table.'('. $liste_champs. ')VALUES('.$liste_intero.')',$valeurs);
            
        
    }

    public function hydrate(array $donnees)
    {
        foreach($donnees as $key => $value){
            // on recupère le nom du setter correspondant à la clé (key)
            // titre -> setTitre
            $setter = 'set'.ucfirst($key);
            // on vérifie si le setter existe
            if(method_exists($this, $setter)){
                // on appelle le setter
                $this->$setter($value);
            } 
        }
        return $this;
    }


    // *************************************************** FIN DU CREATE ******************************************
    
    // *************************************************** DEBUT UPDATE  ******************************************

    public function update($id_annonce)
        {
            $champs =[];
            $valeurs =[];
            //  on boucle pour éclater le tableau
            foreach($this as $champ => $valeur){
                // UPDATE annonces SET titre = ?, description = ?,......
                    if($valeur !== null && $champ != 'db' && $champ != 'table'){
                        // crée des line du type titre = ?
                        $champs[] = "$champ = ?";
                        $valeurs[] = $valeur;  
                    }
                
                }
                $valeurs[]= $id_annonce;
                //on transforme le tableau champs en une chaine de caractères
                $liste_champs= implode(', ', $champs);
               
                
                // on execute la requêted
                return $this->request('UPDATE '.$this->table.' SET '. $liste_champs. ' WHERE id_annonce = ?', $valeurs);
                
            
        }



    // ****************************************************  FIN UPDATE *******************************************

    // ****************************************************  DELETE ***********************************************
        public function delete(int $id_annonce)
        {
            return $this->request("DELETE FROM {$this->table} WHERE id_annonce = ?", [$id_annonce]);
        }

    // *************************************************** FIN DE DELETE ******************************************
    // ************************************************************************************************************
    /**
     * Method request
     *
     * @param string $sql requête sql
     * @param array $attributs de la base de données
     * la methode doit être public
     * mrthode qui n'est pas une methode de pdo
     * @return 
     */

    public function request(string $sql, array $attributs = null)
    {
        // on récupère l'instance de Db
        $this->db = Db::getInstance();

        // on verifie si on a des attributs
        if ($attributs !==null) {
            // Requête préparée
            $query = $this->db->prepare($sql);
            //passage du tableau des attributs
            $query->execute($attributs);
            return $query;
        }else{
            // Requête simple
            return $this->db->query($sql);
        }
    }
}