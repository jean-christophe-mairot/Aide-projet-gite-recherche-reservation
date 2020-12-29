<?php
require_once('../src/App/Entity/Article.php'); 
use App\Entity\Article;

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