<?php
namespace App\Core;
/**
 * class basé sur le paterne singlton
 * singleton = une seule instance 
 * Db on importe PDO 
 */

use PDO;
use PDOException;

class Db extends PDO
{
    // instance unique de la class
    private static $instance;

    // information de connexion
    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'gb_taverne';

    //pour le singleton le construct est en private
    private function __construct()
    {
        //DSN de connexion
        $_dsn = 'mysql:dbname='.self::DBNAME. ';host='. self::DBHOST;
        

        //On appelle le constructeur
        try {
             parent::__construct($_dsn, self::DBUSER, self::DBPASS);
             $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
             $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
             $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
            die($e->getMessage());
        }
       
    }
    //permet de générer une instance s'il n'y en a pas encore
    //ou recupérer l'instance actuelle
    public static function getInstance():self
    {
        if (self::$instance === null) {
            //new self = new Db
           self::$instance= new self();
        }return self::$instance;
    } 
}