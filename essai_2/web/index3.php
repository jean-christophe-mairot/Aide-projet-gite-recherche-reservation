<?php
require_once('../src/App/Entity/Article3.php');
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
echo '<br>';
Article::setRemise(23.3);
// affichje la remise
echo Article::getRemise();

echo '<br>';

//test methode static de class Article

//utilisation de la methode static isPositive
$priceForArticle_1 = 150;
// $priceIsOk=Article::isPositive($priceForArticle_1);
// if($priceIsOk){
//     echo '<br>';
//     echo 'le prix proposé '. $priceForArticle_1 . ' est valide';
//     $article_1->setPrice($priceForArticle_1);
//    } else {
//        echo 'le prix proposé n\'est pas valide, il doit être positif';
//    }
// echo '<br>';

$article_1->setPrice($priceForArticle_1);

//utilisation de la conxtante REMISE_MAX

echo Article::REMISE_MAX;