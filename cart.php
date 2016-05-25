<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 10/04/2016
 * Time: 16:51
 */ ?>

<?php include("header.php"); ?>


<br><br><br><br

<!-- Page Content -->

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
				<tr class="cart_menu">
					<td class="image">Item</td>
					<td class="description">Description</td>
					<td class="price">Prix</td>
					<td></td>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach($_SESSION['produits'] as $prod){
				$sql2 = "SELECT * FROM produit where idProduit = '".$prod."'";
				$req2 = $bdd->prepare($sql2);
				$req2->execute();
				$data = $req2 -> fetchAll(PDO::FETCH_ASSOC);
				//var_dump($data);
				foreach($data as $produits){ ?>
				<tr>
					<td class="cart_product">
						<a href=""><img src="<?php echo $produits['image_mini']; ?>" alt=""></a>
					</td>
					<td class="cart_description">
						<h4><a><?php echo $produits['libelle_produit'];?></a></h4>
						<p>Web ID: 1089772</p>
					</td>
					<td class="cart_price">
						<p><?php echo $produits['prix'];?> €</p>
					</td>
					<td class="cart_delete">
						<a class="cart_quantity_delete" href="sup_panier.php/?idProduit=<?php echo $produits['idProduit'];?>"><i class="fa fa-times"></i></a>
					</td>
				</tr>
					<?php
					}
					}
					?>
				<tr>
					<td class="cart_product">
						<a href=""><img src="ici" alt=""></a>
					</td>
					<td class="cart_description">
					</td>
					<td class="cart_price">
						<h4><a>
								TOTAL: <?php
				echo ' €';
				?>
						</h4></a>
					</td>
					<td class="cart_delete">
					</td>
				</tr>
				</tbody>
			</table>
		</div>
        <p style="text-align: right"><a href="#" class="btn btn-primary btn-large">Valider</a>
	</div>
</section> <!--/#cart_items-->

<br><br><br><br>


<?php include("footer.php"); ?>