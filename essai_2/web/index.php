<?php
require_once('../src/App/Entity/Article.php');
use App\Entity\Article;

$article_1= new Article();

$article_1->setTradeName('article 1');

$article_2= new Article();

$article_2->setTradeName('article 2');

$article_1->setPrice(100);

/*quant remise est public

//affichage de la remise (nom de la class::accés à une variable de la class) , :: operateur de resolution de portée

echo Article::$remise;
echo '<br>';

//affichage depuis les objets

echo $article_1::$remise;
echo '<br>';
echo $article_2::$remise;
echo '<br>';

//on change la valeur de la remise de 10  à 15

Article::$remise=15;

echo $article_1::$remise;
echo '<br>';
echo $article_2::$remise;

*/



echo '<pre>';
var_dump($article_1);
echo '</pre>';
echo '<pre>';
var_dump($article_2);
echo '</pre>';

echo $article_1->getPriceAfterDiscount();