<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 01/06/2016
 * Time: 22:51
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



$sql = "INSERT INTO utilisateur (idUTILISATEUR, nom_utilisateur, prenom_utilisateur, adresse, mail, password, TYPE_UTILISATEUR_idTYPE_UTILISATEUR, AMAP_idAMAP, VILLE_idVILLE) VALUES ('', '".$_POST['ajoutNom']."', '".$_POST['ajoutPrenom']."', '".$_POST['ajoutAdresse']."', '".$_POST['ajoutMail']."', '".$_POST['ajoutPassword']."','".$_POST['ajoutRole']."', '".$_POST['ajoutAMAP']."','".$_POST['ajoutVille']."')";
$req = $bdd->prepare($sql);
$req->execute();
header("Location: /colibri/index.php");