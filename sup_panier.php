<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 25/05/2016
 * Time: 20:55
 */
//var_dump($_SESSION["produits"]);

session_start();

print_r($_SESSION);

foreach($_SESSION["produits"] as $id => $Panier)
{
    if($Panier==$_GET['idProduit']){
        unset($_SESSION["produits"][$id]);
        break;
    }

}
echo '-----------------------';

print_r($_SESSION);

header("Location: /colibri/cart.php");