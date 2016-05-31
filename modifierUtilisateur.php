<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 31/05/2016
 * Time: 21:56
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


	$bdd->exec("UPDATE utilisateur SET prenom_utilisateur='". $_POST['prenom']."', nom_utilisateur='". $_POST['nom']."', adresse='". $_POST['adresse']."', mail='". $_POST['mail']."', password='". $_POST['password']."', TYPE_UTILISATEUR_idTYPE_UTILISATEUR='". $_POST['role']."', AMAP_idAMAP='". $_POST['amap']."', VILLE_idVILLE='". $_POST['ville']."' WHERE idUTILISATEUR = '".$_POST['idModif']."'");

header("Location: /colibri/adm_utilisateurs.php");



