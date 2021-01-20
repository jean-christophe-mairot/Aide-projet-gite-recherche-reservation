<?php
namespace App\Models;
use App\Db\Db;


class Model extends Db
{
    // table de la base de données
    protected $table;

    //instance de Db
    private $db;

    public function findAll()
    {
        $resquest = $this->query('SELECT * FROM ')
    }
        
    /**
     * Method request
     *
     * @param string $sql requête sql
     * @param array $attributs de la base de données
     *
     * @return 
     */
    protected function request(string $sql, array $attributs = null)
    {
        // on récupère l'instance de Db
        $this->db = Db::getInstance();

        // on verifie si on a des attributs
        if ($attributs !==null) {
            // Requête préparée
            $request = $this->db->prepare($sql);
            $request->execute($attributs);
            return $request;
        }else{
            // Requête simple
            return $this->db->query($sql);
        }
    }
}