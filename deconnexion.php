<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 18/03/2016
 * Time: 12:09
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
session_start();
unset($_SESSION["id"]);
unset($_SESSION["mail"]);
session_destroy();
header("Location: /colibri/produits.php");