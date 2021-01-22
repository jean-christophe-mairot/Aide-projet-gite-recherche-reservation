<?php




use App\Autoloader;
use App\Models\AnnoncesModel;

require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

echo'<pre>';
var_dump($model);
echo'</pre>';
// phpinfo();
$model->findAll();
