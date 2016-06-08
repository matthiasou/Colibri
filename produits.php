<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 10/04/2016
 * Time: 16:51
 */ ?>

<?php include("header.php"); ?>

<br>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Nos produits</h1>
        <p>Voici les différents paniers du moment. Pour pouvoir passer commande <b>vous devez être connecté<b></b> au site</p>
        <?php if(!isset($_SESSION['mail'])){ ?>
        <p><a href="#signup" data-toggle="modal" data-target=".bs-modal-sm" class="btn btn-primary btn-large">Connexion</a>
        <?php } ?>
        </p>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">
        <div style="color: #0f3e68">
            <h3>Nos Paniers du moment</h3>
        </div>
    </div>

    <?php
    $sql = "SELECT * FROM PRODUIT ";
    $req = $bdd->prepare($sql);
    $req->execute();
    //var_dump($req2);
    $data = $req -> fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    foreach($data as $produits){?>

    <!-- /.row -->

    <!-- Page Features -->

    <form method="post" action="ajoutProduit.php">
        <input type="hidden" name="id" value="<?php echo $produits['idProduit'];?>">
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="<?php echo $produits["image"];?>" alt="" />
                <div class="caption">
                    <h3><?php echo $produits["libelle_produit"];?></h3>
                    <p><?php echo $produits["contenu"];?></p>

                    <p>

                        <?php if(isset($_SESSION['mail'])){ ?>  <a href="ajoutProduit.php/?idProduit=<?php echo $produits['idProduit'];?>" class="btn btn-primary">Acheter</a> <?php } ?><a class="btn btn-default"><?php echo $produits["prix"];?> €</a>
                    </p>

                </div>
            </div>
        </div>
        <?php
         }
         ?>
    <form>
</div>

<br>










<?php include("footer.php"); ?>