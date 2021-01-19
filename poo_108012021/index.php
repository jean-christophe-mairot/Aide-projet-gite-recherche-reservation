<?php

use App\Autoloader;
use App\Client\Compte as compteClient;
//use App\Banque\CompteCourant;
//use App\Banque\CompteEpargne;
//utilisation des name space pour deux fichiers class du même namespace
use App\Banque\{CompteEpargne,CompteCourant};

require_once 'class/Autoloader.php';
Autoloader::register();


$compte2= new CompteClient();

echo'<pre>';
var_dump($compte2);
echo'</pre>';


