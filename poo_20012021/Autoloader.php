<?php
// fichier qui permet de charger les class 
//detection auto des instanciation de class
namespace App;

class Autoloader
{
    //accé au methode static sans instancier la class    
    /**
     * register
     *
     * @return void
     */
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }
    
    /**
     * autoload
     *
     * @param  string $class 
     * @return void
     */
    static function autoload($class)
    {
        //on récupère dans le $class la totalité du namespace de la classe concernée app\client\compte
        //on retire App\
        // echape l'antislache \\
        __NAMESPACE__;
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //on remplace des \ par des /
        $class =str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';
        
        //on verifie si le fichier existe
        if(file_exists($fichier)){
        require_once $fichier;  
        }
        
        
    }

}