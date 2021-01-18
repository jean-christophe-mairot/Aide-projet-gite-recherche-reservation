<?php 
require_once 'class/Compte.php';

// instance de la class compte

$compte1 = new Compte('jc',500);
//on écrit dans la propriété titulaire
// $compte1->titulaire='jc';
// $compte1->solde=500;

// on depose 500 euro
$compte1->deposer(500);
$compte1->retirer(165);

$compte2 = new Compte('robert',389.25);
// $compte2->titulaire='robert';
// $compte2->solde=389.25;
$compte2->deposer(-100);
$compte2->voirSolde();


var_dump($compte1);
echo'<br>';
var_dump($compte2);
?>

<p><?php $compte2->voirsolde()?></p>


