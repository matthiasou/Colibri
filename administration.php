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
                    <?php
                        if ($_SESSION['user']['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'] == 1){?>
                            <li><a href="adm_absence.php"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                            <li><a href="adm_contrats_conso.php"><i class="fa fa-calendar fa-fw"></i> Mes contrats</a></li>
                        <?php }
                        else if($_SESSION['user']['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'] == 2) { ?>
                            <li><a href="adm_produits_produ.php"><i class="fa fa-shopping-basket fa-fw""></i> Mes produits</a></li>
                            <li><a href="adm_contrats_produ.php"><i class="fa fa-file-text fa-fw""></i> Mes contrats</a></li>
                            <li><a href="adm_panier.php"><i class="fa fa-pencil fa-fw""></i> Définir livraison panier</a></li>
                       <?php } else if ($_SESSION['user']['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'] == 3){ ?>
                            <li><a href="adm_utilisateurs.php"><i class="fa fa-users fa-fw"></i> Utilisateurs</a></li>
                            <li><a href="adm_produits.php"><i class="fa fa-shopping-basket fa-fw"></i> Produits</a></li>
                            <li><a href="adm_contrats.php"><i class="fa fa-file-text-o fa-fw"></i> Contrâts</a></li>
                      <?php  } ?>

                </ul>
            </div>
            <div style="color: black " class="col-md-9 well">
                Voici votre espace d'administration
            </div>
        </div>
    </div>

<br><br><br>


<?php include("footer.php");?>