<?php




use App\Autoloader;
use App\Models\AnnoncesModel;

require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

$donnees = [
    'titre' => 'new',
    'description' => 'new',
    'j2'=>0
];
$annonce = $model->hydrate($donnees);



// $annonces = $model->findBy(['j2' => 0]);
// $annonce = $model
//     ->setTitre('nouvelle annonce')
//     ->setDescription('nouvelle description')
//     ->setPrix(15);

//     //on veut pouvoir faire $model->create($annonce);
// $model->create($annonce);
$model->update(2, $annonce);

echo'<pre>';
var_dump($annonce);
echo'</pre>';

// phpinfo();


