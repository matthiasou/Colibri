<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 01/06/2016
 * Time: 23:15
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



$count2 = $bdd->exec("DELETE FROM PANIER WHERE CONTRAT_idCONTRAT = '".$_GET['id']."'");
$count = $bdd->exec("DELETE FROM CONTRAT WHERE idCONTRAT = '".$_GET['id']."'");
header("Location: /colibri/adm_contrats.php");