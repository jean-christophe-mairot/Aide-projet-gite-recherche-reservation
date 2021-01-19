<?php 
require_once 'class/Compte.php';
require_once 'class/CompteCourant.php';
require_once 'class/CompteEpargne.php';


// instance de la class compte

$compte1 = new Compte('jc',500);
//on écrit dans la propriété titulaire
// $compte1->titulaire='jc';
// $compte1->solde=500;


$compte1->setSolde(1500);
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

//  accé à la constante avec nom de la classe :: nom de la constante
echo "le taux d'intérêt du compte est : " . Compte::TAUX_INTERETS . "%";
?>

<p><?php $compte2->voirsolde()?></p>

<p><?php $compte1->voirsolde()?></p>

