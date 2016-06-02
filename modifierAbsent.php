<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 02/06/2016
 * Time: 23:26
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

echo $_POST['date'];
echo $_POST['ajoutVille'];
	$bdd->exec("UPDATE panier SET absent='". $_POST['absent']."' WHERE idPANIER = '".$_POST['idModif']."'");

header("Location: /colibri/adm_absence.php");



