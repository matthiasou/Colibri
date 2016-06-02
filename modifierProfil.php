<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 02/06/2016
 * Time: 19:46
 */
try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


    session_start();
	$bdd->exec("UPDATE utilisateur SET prenom_utilisateur='". $_POST['prenom']."', nom_utilisateur='". $_POST['nom']."', adresse='". $_POST['adresse']."', mail='". $_POST['email']."', AMAP_idAMAP='". $_POST['ajoutAMAP']."', VILLE_idVILLE='". $_POST['ajoutVille']."' WHERE idUTILISATEUR = '".$_POST['idModif']."'");

header("Location: /colibri/index.php");



