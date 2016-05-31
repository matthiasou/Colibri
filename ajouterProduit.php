<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 30/05/2016
 * Time: 23:05
 */


try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



$sql = "INSERT INTO produit (idProduit, libelle_produit, temporaire, permanent, TYPE_PRODUIT_idTYPE_PRODUIT, SAISON_idSAISON, prix, image_mini, image, UTILISATEUR_idUtilisateur) VALUES ('', '".$_POST['ajoutLibelle']."', null, null, '".$_POST['ajoutType']."', '".$_POST['ajoutSaison']."', '".$_POST['ajoutPrix']."', null, '".$_POST['ajoutUrl']."','".$_POST['ajoutPropriétaire']."')";
$req = $bdd->prepare($sql);
$req->execute();
header("Location: /colibri/adm_produits.php");