<?php
namespace App\Core;

class Main 
{
    public function start()
    {
        echo " ca fonctionne";
        //http://mes annonces.test/controleur/methgode/parametres
        //http://mes-annonces.test/annonces/details/brouette
        //reecriture de l'url http://mes-annonces.test/index.php?p=annonces/details/brouette
        //on a besoin du fichier htacces dans le dossier public
        var_dump($_GET);
    }
}