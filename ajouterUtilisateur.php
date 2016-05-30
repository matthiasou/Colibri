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



$sql = "INSERT INTO utilisateur (idUTILISATEUR, nom_utilisateur, prenom_utilisateur, adresse, mail, password, TYPE_UTILISATEUR_idTYPE_UTILISATEUR, AMAP_idAMAP, VILLE_idVILLE) VALUES ('', '".$_POST['ajoutNom']."', '".$_POST['ajoutPrenom']."', null, null, null,'".$_POST['ajoutRole']."', '".$_POST['ajoutAMAP']."',null)";
$req = $bdd->prepare($sql);
$req->execute();
header("Location: /colibri/adm_utilisateurs.php");