<?php
namespace App\Models; 

//pas besoin du use pour Model.php 
//parcequ'on n'est dans le même dossier 

class AnnoncesModel extends Model
{
 public function __construct()
 {
     //maintenant on peut recup les données de ma table annonce dans 
     //le site
     $this->table = 'annonce';
 }
}