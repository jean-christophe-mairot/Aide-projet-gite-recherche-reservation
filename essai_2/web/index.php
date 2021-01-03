<?php
require_once('../src/App/Entity/Article.php'); 
require_once('../src/App/Entity/Article5.php');
require_once('../src/App/Entity/client.php');
require_once('../src/App/Entity/adresse.php');

use App\Entity\Article;
use App\Entity\Article5;
use App\Entity\Client;
use App\Entity\Adresse;

$article= new Article();

$article->setName('voiture');

echo '<pre>';
var_dump($article);
echo '</pre>';

//comme aucn attribut de déclaré pour $price dans la class Article
//l'attribut est considérer commer public par defa

$article->price=10;
echo '<pre>';
var_dump($article);
echo '</pre>';

// methodes chaînées article5

echo '<hr><br>';
echo'<h1>Les méthodes chaînées</h1><br>';


$produit = new Article5();
//methode chainé on enchaine les methodes
$produit->setName('dragon')
        ->setDescription('un dragon rouge')
        ->setPrice(120);

echo '<pre>';
var_dump($produit->setName('dragon')
                ->setDescription('un dragon rouge')
                ->setPrice(120)
);
echo '</pre>';

//le constructeur

echo '<hr><br>';
echo'<h1>Le constructeur</h1><br>';


$clientA = new Client('Mairot','Elias');

// $clientA->setLastName('Mairot')
//         ->setFirstName('Elias')
//         ->setCode('ELM');
        // plus besoin du setter puisqu'il est dans le construct
        // donc généré automatiquement 
        // ->setCreatAt(new \DateTime('now'));

echo '<pre>';
var_dump($clientA);
echo '</pre>';
echo '<br><hr><br>';

// Le destructeur

//on crée une deuxième références à l'objet

$clientAbis= $clientA;

//unset permet de 'detruire' l'objet clientA avant le destructeur
//donc avant la fin du script
//destruction de la première reférence à notre objet

unset($clientA);

echo '<p> il y a encore une reférence à l\'objet </p>';
//detruit la deuxième référence
unset($clientAbis);


echo '<p>Ceci est la fin du script</p>';

// l'objet de type référence

$clientB= new Client('jean christophe','Mairot');

$clientC=$clientB;
//Le $clientB et $clientC pointe vers un identifiant d'un même objet client(la référence)
//en changeant le nom du client B cela change le nom du client C 
$clientB->setLastName('pascal');

echo '<pre>';
var_dump($clientB);
echo '</pre>';

echo '<pre>';
var_dump($clientC);
echo '</pre>';

//de même en changeant le nom du clientC cela change les deux
$clientC->setLastName('Durant');

echo '<pre>';
var_dump($clientB);
echo '</pre>';

echo '<pre>';
var_dump($clientC);
echo '</pre>';

echo '<br><hr><br>';


// La navigabilité permmet de manipuler un objet à partir d'un autre
//il faut prévoir dans la class une propriété qui aura pour type de l'objet
//qu'elle va contenir

$adresseClientC= new Adresse();

$adresseClientC->setStreet('2 chemin de la porte de paris');
$adresseClientC->setPostalCode('77130');
$adresseClientC->setCity('Montereau fault yonne');

$clientC->setAdresse($adresseClientC);


echo '<pre>';
var_dump($clientC->getAdresse());
echo '</pre>';

$adresseduClientDupond= $clientC->getAdresse();

echo $adresseduClientDupond->getCity();
echo '<br>';
echo $adresseduClientDupond->getPostalCode();
echo '<br>';
//demonstration de la navigabilité unilaterale
echo $clientC->getAdresse()->getStreet();
$clientC->getAdresse()->setCity('Paris');
echo '<br>';
echo $clientC->getAdresse()->getCity();
