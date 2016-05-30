<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 29/05/2016
 * Time: 23:07
 */
include("header.php");?>
<br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="administration.php">Administration</a></li>
                    <li><a href="adm_utilisateurs.php"><i class="fa fa-users fa-fw"></i> Utilisateurs</a></li>
                    <li><a href="#"><i class="fa fa-shopping-basket fa-fw"></i> Produits</a></li>
                    <li><a href="#"><i class="fa fa-file-text-o fa-fw"></i> Contrâts</a></li>
                    <li><a href="#"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                    <li><a href="#"><i class="fa fa-tasks fa-fw"></i> Changement AMAP</a></li>
                    <li><a href="#"><i class="fa fa-pencil fa-fw""></i> Créer/Modifier Paniers</a></li>
                    <li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Valider Panier</a></li>
                    <li><a href="#"><i class="fa fa-area-chart fa-fw"></i> Publier Bilan Activité</a></li>
                </ul>
            </div>
            <div style="color: black " class="col-md-9 well">
                Espace d'administration du site
            </div>
        </div>
    </div>

<br><br><br>


<?php include("footer.php");?>