<?php 
require_once 'class/Compte.php';
require_once 'class/CompteCourant.php';
require_once 'class/CompteEpargne.php';

$compte1= new CompteCourant('benoit', 500, 200);
$compte1->retirer(200);

echo'<pre>';
var_dump($compte1);
echo'</pre>';

$compteEpargne= new CompteEpargne('benoit',200,10);
$compteEpargne->verserInterets();
$compteEpargne->retirer(200);

echo'<pre>';
var_dump($compteEpargne);
echo'</pre>';