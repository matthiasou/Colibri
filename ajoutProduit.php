<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 03/05/2016
 * Time: 20:03
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

echo $_GET['idProduit'];
//header("Location: /colibri/produits.php");