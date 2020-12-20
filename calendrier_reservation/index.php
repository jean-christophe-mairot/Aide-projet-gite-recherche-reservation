<?php
//con bdd
 $pdo = new PDO('mysql:host=localhost;dbname=projet_gite','root','');

//remplir la table id_reservation avec semaine 1 --->ok

// quand le user appuie sur le bouton reservation cela envoie l'id et la date dans la table gite reservation table de jointure 
// on doit check si la date est libre pour le gite id si oui faire un create sinon message "pas de disponibilité à cette date"
// si on a le temps faire disparaitre les dates de la table de jointure  dans le champ date de reservation du gite
// cela permet de check la dispo du gite à la date choisie



//ne pas oublier de faire un tri dans le formulaire de recherche 
//sur les date disponible le user choisi une date et tous les gite dispo 
//à cette date apparaissent 
//dans la page 


include ('header.php');
?>



<!-- recup id produit et post -->
<!-- recup la date select et post -->

<!-- form reservation avec date semaine_1 2 3 4 etc... et l'id du gite methode -->
<!-- afficher un calendrier par semaine 1 2 3 4 5 -->


<?php
include ('footer.php');
?>