<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 08/06/2016
 * Time: 21:49
 */
try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$count = $bdd->exec("DELETE FROM produit WHERE idProduit = '".$_GET['id']."'");
header("Location: /colibri/adm_produits_produ.php");