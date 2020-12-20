<?php
//https://davidwalsh.name/php-calendar
//https://davidwalsh.name/php-event-calendar


//con bdd
 $pdo = new PDO('mysql:host=localhost;dbname=projet_gite','root','');

//variable de la requete sql
 $sqlSelect='SELECT id_gite FROM gite WHERE id_gite = :id_gite';
 // variable preparatiuon de la requête
 $query = $pdo->prepare($sqlSelect);
 
// // execution de la requête
if(isset($_POST['id_gite'])){
    $id_gite = $_POST['id_gite'];
}
elseif(isset($_GET['id_gite'])){
    $id_gite = $_GET['id_gite'];
}
else{
    die('Produit non trouvé !');
}

$query->execute(array(
'id_gite'=>$id_gite,
));
$gite=$query->fetch();
 
//remplir la table id_reservation avec semaine 1 --->ok

// quand le user appuie sur le bouton reservation cela envoie l'id et la date dans la table gite reservation table de jointure 
// on doit check si la date est libre pour le gite id si oui faire un create sinon message "pas de disponibilité à cette date"
// si on a le temps faire disparaitre les dates de la table de jointure  dans le champ date de reservation du gite
// cela permet de check la dispo du gite à la date choisie



//ne pas oublier de faire un tri dans le formulaire de recherche 
//sur les date disponible le user choisi une date et tous les gite dispo 
//à cette date apparaissent 
//dans la page 
// ------------------------------------------------------------------------------------------------------------------------ //
//check la table de jointure et recup toute les id des semaine pour ce gite et les soustraire à la query 
//query pour read toutes les semaines qui reste pour le gite selectionné
$query = $pdo->query("SELECT * FROM reservation ");
$reservations = $query->fetchAll();

var_dump($_POST);

include ('header.php');
?>


<div class="reservation shadow p-3 mb-5 bg-white rounded"><h1>Ibis Château de Fontainebleau</h1>
    <span>18 rue de Ferrare, 77300 Fontainebleau, France</span></div>
    <div><h2 class="ibis"></h2>
    <!--        debut entet img-->
    <!--        div papa-->
    <div class="photosreservation shadow-lg p-3 mb-5 bg-light rounded">
        <div>
            <div><img class="suiteluxe" src="img/carre/hall-ibis.jpg" alt=""></div>
            <div><img class="chambreluxe" src="img/carre/chambre-ibis.jpg" alt=""></div>
        </div>
        <div><img class="parisvuecathedrale" src="img/rectangle_grd/ibis-fontainebleau.jpg" alt=""></div>
    </div>
    <h3 class="information-sur-le-logement">Information sur le logement</h3>
    <div class="detail-paragrhe"><p> Situé en plein cœur de Fontainebleau, à seulement 200 mètres du château, l'ibis
            Château de Fontainebleau propose des chambres modernes. Vous aurez la possibilité de prendre un verre au bar
            sur place.

            Toutes les chambres de l'ibis Château de Fontainebleau comprennent la climatisation, un bureau et une
            télévision à écran plat. Leur salle de bains privative est pourvue d'une baignoire ou d'une douche.
            Chaque jour, vous savourerez un petit-déjeuner buffet composé de plats sucrés et salés, tels que des œufs,
            de la salade de fruits, des yaourts et des jus de fruits. Des viennoiseries cuites sur place et des
            madeleines fraîches sont aussi proposées ainsi qu'une boisson chaude et un fruit à emporter. Un
            petit-déjeuner plus léger est servi à partir de 4h00.
            Non-fumeurs, il propose une connexion Wi-Fi gratuite. Un parking privé est également mis à votre disposition
            sur place, moyennant des frais supplémentaires. Paris se trouve à 50 km de cet hôtel Ibis.
            C'est le quartier préféré des voyageurs visitant Fontainebleau, selon les commentaires clients indépendants.
            Les couples apprécient particulièrement l'emplacement de cet établissement. Ils lui donnent la note de 9,2
            pour un séjour à deux.
            Nous parlons votre langue !</p>
        <h3>Ses points forts</h3>
        <i class="fas fa-wifi"> Connexion Wi-Fi gratuite | </i>
        <i class="fas fa-parking"> Parking | </i> <i class="fas fa-paw"> Animaux domestiques admis | </i>
        <i class="fas fa-smoking-ban"> Chambres non-fumeurs | </i>
        <i class="fas fa-glass-cheers"> Bar</i>
        <hr>
        <h3 class="prix-nuit">93€/Nuit</h3>
        <hr>
        <h3>Disponibilité a partir du 17/12/2020</h3>
        <hr>
    </div>
    <div class="d-grid gap-2">
    <form action="" method="POST">
        <input type="hidden" name="id_gite" value="<?= $gite['id_gite'] ?>" />
        <select name="reservWeek">
        <?php foreach ($reservations as $reservation): extract($reservation)?>
            <option value=" <?=$id_reservations?> "><?=$semaine?></option>
        <?php endforeach ?>
        </select>
        <button class="btn btn-warning reserver" type="submit">Reserver</button>
        <!-- <a href="index.php?id_gite=&id_reservation=<?php//$id_reservation ?>" class="btn btn-warning reserver">Supprimer</a> -->
        
    </form> 
    
    <iframe frameborder="0" src="https://www.yourdomain.com/booking/iframe.php" width="100%" height="800"></iframe>
    </div>


    <!--        fin entete img -->








<!-- recup id produit et post -->
<!-- recup la date select et post -->

<!-- form reservation avec date semaine_1 2 3 4 etc... et l'id du gite methode -->
<!-- afficher un calendrier par semaine 1 2 3 4 5 -->


<?php
include ('footer.php');
?>