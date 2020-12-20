<?php
require ('app/user.class.php');

$user1= new User('lLavoli','marc','06-03-02-02-30');

$user1->getNom();
$user1->getPrenom();
$user1->getTelephone();
echo '<br>';




include('header.php');
?>   
 
    
<form action="" method="post">
    <label>Nom</label><br>
    <input type="text" name="nom" value=""><br>
    <label>Prenom</label><br>
    <input type="text" name="prenom" value=""><br>
    <label>Téléphone</label><br>
    <input type="text" name="phone" value=""><br>
    <input type="submit">
</form>




<?php include('footer.php');?>