<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 30/05/2016
 * Time: 22:51
 */



try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$count = $bdd->exec("DELETE FROM utilisateur WHERE idUTILISATEUR = '".$_GET['id']."'");
header("Location: /colibri/adm_utilisateurs.php");