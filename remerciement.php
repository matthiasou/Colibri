<?php
header('Refresh: 3;url=index.php');
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 29/05/2016
 * Time: 15:13
 */
include("header.php");

// affichage message + vider la session des produits et total
?>
<br><br>

<div class="container">
    <h3 style="color: #0f3e68">Merci d'avoir effectué votre paiement !</h3>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php

unset($_SESSION["total"]);
unset($_SESSION["produits"]);

include("footer.php");
?>

