<?php




use App\Autoloader;
use App\Models\AnnoncesModel;

require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

$donnees = [
    'titre' => 'change2',
    'description' => 'change',
    'j2'=>1,
    'prix'=>10,
    'j15'=>1

];
$annonce = $model->hydrate($donnees);

// $model->create($annonce);
// $model->update(1, $annonce);
$model->delete(4);
// echo'<pre>';
// var_dump($annonce);
// echo'</pre>';

// $annonces = $model->findBy(['j2' => 0]);
// $annonce = $model
//     ->setTitre('nouvelle annonce')
//     ->setDescription('nouvelle description')
//     ->setPrix(15);

echo 'salut toto';

