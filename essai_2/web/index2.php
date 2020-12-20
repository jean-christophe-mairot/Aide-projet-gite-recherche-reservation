<?php
//lien vers le fichier article.php
require_once('../src/App/Entity/Article2.php');
//accede a la class par le namespace parcequ'il y a un namespace dans la class
use App\Entity\Article;

//intanciation d'un objet

$article_1 = new Article();
$article_2 = new Article();
$article_3 = new Article();
//la fleche c j'accède aux propriétées de l'objet
//ne marche pas pour la reference parceque en private
//$article_1->reference='GFVD51';
//$this de la class designe $article_1
$article_1->setReference('GF22');
$article_2->setReference('GD51');


// var_dump($article_1);
// var_dump($article_2);
echo $article_1->getReference();
echo $article_2->getReference();

// var_dump($article_1);
// var_dump($article_2);

$article_3->setPrice(100);
//augmlentation de 5%
$article_3->setTradeName('clavier ultraplat noir');
$article_3->increasePrice(5); 
$article_3->autoAssignementReference();

echo '<pre>';
var_dump($article_3);
echo '</pre>';