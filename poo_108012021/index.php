<?php

use App\Autoloader;
use App\Client\Compte as compteClient;
//use App\Banque\CompteCourant;
//use App\Banque\CompteEpargne;
//utilisation des name space pour deux fichiers class du même namespace
use App\Banque\{CompteEpargne,CompteCourant};

require_once 'class/Autoloader.php';
Autoloader::register();

$client= new CompteClient('Mairot','Jean-Christophe','montereau fault yonne');
$compte2= new CompteCourant($client, 15000, 1000);
$competEpargne= new CompteEpargne($client, 120000, 15);
 


echo'<pre>';
var_dump($compte2);
echo'</pre>';
echo'<pre>';
var_dump($competEpargne);
echo'</pre>';
echo'<pre>';
var_dump($client);
echo'</pre>';
