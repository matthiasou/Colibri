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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="ajoutProduit.php/?idProduit=<?php echo $produits['idProduit'];?>" class="btn btn-primary">Acheter</a> <a class="btn btn-default"><?php echo $produits["prix"];?> €</a>
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