<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 01/06/2016
 * Time: 23:39
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


	$bdd->exec("UPDATE contrat SET AMAP_idAMAP='". $_POST['amap']."', SAISON_idSAISON='". $_POST['modifSaison']."', SAISON_idSAISON='". $_POST['modifSaison']."', UTILISATEUR_idUTILISATEUR='". $_POST['modifConsomateur']."', UTILISATEUR_idUTILISATEUR1='". $_POST['modifProducteur']."' WHERE idCONTRAT = '".$_POST['idModif']."'");

header("Location: /colibri/adm_contrats.php");



