<?php
//https://www.primfx.com/tuto-php-barre-recherche-337/
//https://www.grafikart.fr/tutoriels/recherche-php-40
 $pdo = new PDO('mysql:host=localhost;dbname=projet_gite','root','');

$query=$pdo->query("SELECT categorie,localisation FROM gite ORDER BY id_gite DESC");

if(isset($_GET['result']) && !empty($_GET['result'])){
    //securise les données avec htmlspecialchars
    $result = htmlspecialchars($_GET['result']);
    $query=$pdo->query("SELECT categorie,localisation FROM gite WHERE categorie LIKE '%". $result ."%' OR localisation LIKE '%". $result ."%' ORDER BY id_gite DESC");
}

include ('header.php');
?>
<form action="" method="GET">
    <input type="search" name="result" placeholder="Recherche..."/>
    <input type="submit" value="valider"/>
</form>
<!-- s'il n'y a pas de result lors de la recherche -->
<?php if($query->rowCount()>0){?>
    <ul>
    <!-- tant que l'on trouve des result dans la bdd on affiche le gite -->
    <?php while($a = $query->fetch()){ ?>
    <!-- remplace les li par la foreach ou remplacer la foreach par la while-->
        <li><?= $a['categorie']?></li>
        <li><?= $a['localisation']?></li>
    <?php } ?>
    </ul>
<?php }else{?>
    <h3>Aucun resultat pour : <?= $result ?>...</h3>
<?php } ?>  





<?php
include ('footer.php');
?>