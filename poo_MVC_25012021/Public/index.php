<?php
//on definie une constante pour le dossier racine
//dirname donne le chemin d'accé au dossier parent dans lequel on se trouve 
define('ROOT',dirname(__DIR__));

// c'est le fihier d'entrée dans l'application'
use App\Autoloader;
use App\Core\Main;


// on importe l'autoloader
require_once ROOT.'/Autoloader.php';
Autoloader::register();

//on instancie main /main ce sera le rooter
$app =new Main();
//on démarre l'application : methode de la class main
$app->start();