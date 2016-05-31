<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 31/05/2016
 * Time: 23:25
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$count = $bdd->exec("DELETE FROM produit WHERE idProduit = '".$_GET['id']."'");
header("Location: /colibri/adm_produits.php");