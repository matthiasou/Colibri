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

//$sql2 = "SELECT * FROM produit where idProduit = '".$_GET['idProduit']."'";
//$req2 = $bdd->prepare($sql2);
//$req2->execute();
//$data = $req2 -> fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
//foreach($data as $produits){
//    echo $produits[idProduit];
//}
session_start();


array_push($_SESSION['produits'],$_GET['idProduit']);

//$_SESSION['id'] = $resultat['idUTILISATEUR'];
header("Location: /colibri/produits.php");