<?php
namespace App\Models;
use App\Db\Db;


class Model extends Db
{
    // table de la base de données
    protected $table;

    //instance de Db on peut faire unbn this db pour recup pdo
    private $db;

  

    public function findAll()
    {
        //accé en lecture total à la table
        $query = $this->query('SELECT * FROM '. $this->table);
        return $query->fetchAll();
        
    }
        
    /**
     * Method request
     *
     * @param string $sql requête sql
     * @param array $attributs de la base de données
     * la methode doit être public
     * mrthode qui n'est pas une methode de pdo
     * @return 
     */

    public function query(string $sql, array $attributs = null)
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