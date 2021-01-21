<?php
use App\Autoloader;
use App\Models\AnnoncesModel;

require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

var_dump($model);

// $model->findAll();
