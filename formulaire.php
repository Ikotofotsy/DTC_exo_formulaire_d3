
<form action="formulaire.php" method="POST">
    <input type="text" name="nom" placeholder="Nom" required></br>
    <input type="text" name="prenom" placeholder="Prénoms" required></br>
    <input type="text" name="telephone" placeholder="Téléphone" required></br>
    <button type="submit" name="valider">Enregister</button>
</form>

<?php
    if(isset($_POST['valider']))
        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['telephone']))
            echo "Nom\t:\t".$_POST['nom']."</br>Prénoms\t:\t".$_POST['prenom']."</br>Téléphone\t:\t".$_POST['telephone'];
?>

