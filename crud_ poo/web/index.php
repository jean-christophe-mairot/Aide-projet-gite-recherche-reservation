<?php
require_once('../src/App/Entity/Crud.php');
use App\Entity\Crud;


$bdd=new Crud('projet_gite');

$result=$bdd->query('SELECT * FROM admin');

//insertion dans la base de donnée
//$req=$pdo->prepare("INSERT INTO admin(email,password) VALUES (?,?) ");
//$req->execute(array("jcmairot@gmail.com","zaza"));

//modifier dans la base de donnée
// $req=$pdo->prepare("UPDATE admin SET email=? WHERE id_admin=?");
// $req->execute(array("jc@gmail.fr",2));

//suppression
// $req=$pdo->prepare("DELETE FROM admin WHERE id_admin=?");
// $req->execute(array(3));

//selection 
// $req=$bdd->prepare("SELECT * FROM admin");
// $req->setFetchMode(PDO::FETCH_ASSOC);
// $req->execute();

// $tab=$req->fetchAll();
echo'<pre>';
var_dump($result) ;
echo'</pre>';
