<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 01/06/2016
 * Time: 21:52
 */
try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


	$bdd->exec("UPDATE produit SET libelle_produit='". $_POST['libelle']."', TYPE_PRODUIT_idTYPE_PRODUIT='". $_POST['modifType']."', SAISON_idSAISON='". $_POST['modifSaison']."', prix='". $_POST['modifPrix']."', image='". $_POST['modifImage']."', UTILISATEUR_idUtilisateur='". $_POST['modifPropriétaire']."' WHERE idProduit = '".$_POST['idModif']."'");

header("Location: /colibri/adm_produits.php");



