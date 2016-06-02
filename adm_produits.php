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
                    <li><a href="administration.php">Administration</a></li>
                    <li><a href="adm_utilisateurs.php"><i class="fa fa-users fa-fw"></i> Utilisateurs</a></li>
                    <li class="active" ><a href="adm_produits.php"><i class="fa fa-shopping-basket fa-fw"></i> Produits</a></li>
                    <li><a href="adm_contrats.php"><i class="fa fa-file-text-o fa-fw"></i> Contrats</a></li>
                    <li><a href="adm_absence.php"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                    <li><a href="adm_panier.php"><i class="fa fa-pencil fa-fw""></i> Définir livraison panier</a></li>
                </ul>
            </div>
            <div style="color: black " class="col-md-9 well">
            <div style="color: #0f3e68">
                <h4><i class="fa fa-shopping-basket fa-fw"></i> Produits</h4>
             </div>

            <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Ajouter</button></div>

            <br>
            <!-- Ajout produit -->
            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Ajout Produit</h3>
                    </div>
                    <div class="modal-body">

                        <!-- content goes here -->
                        <form method="post" action="ajouterProduit.php">
                          <div class="form-group">
                            <label for="exampleNom">Libelle</label>
                            <input name="ajoutLibelle" type="text" class="form-control" id="exampleNom" placeholder="Libelle du produit">
                          </div>
                          <div class="form-group">
                            <label for="examplePreNom">Prix</label>
                            <input name="ajoutPrix" type="text" class="form-control" id="examplePreNom" placeholder="Entrez votre prix">
                          </div>
                          <div class="form-group">
                            <label for="examplePreNom">URL Image</label>
                            <input name="ajoutUrl" type="text" class="form-control" id="examplePreNom" placeholder="URL de l'image">
                          </div>
                          <div class="form-group">
                           <label for="exampleRole">Proposé par</label><br>
                          <select name="ajoutPropriétaire">
                            <?php   $reponse = $bdd->query('SELECT * FROM utilisateur');
                            while ($donnees = $reponse->fetch()){?>
                            <option value="<?php echo $donnees['idUTILISATEUR'];?>"><?php echo $donnees['nom_utilisateur']; echo " "; echo $donnees['prenom_utilisateur']; ?></option>
                            <?php } ?>
                          </select>
                          </div>
                          <div class="form-group">
                           <label for="exampleRole">Type</label><br>
                          <select name="ajoutType">
                            <?php   $reponse = $bdd->query('SELECT * FROM type_produit');
                            while ($donnees = $reponse->fetch()){?>
                            <option value="<?php echo $donnees['idTYPE_PRODUIT']; ?>"><?php echo $donnees['libelle_type_produit'] ?></option>
                            <?php } ?>
                          </select>
                          </div>
                          <div class="form-group">
                           <label for="exampleRole">Saison</label><br>
                          <select name="ajoutSaison">
                            <?php   $reponse = $bdd->query('SELECT * FROM saison');
                            while ($donnees = $reponse->fetch()){?>
                            <option value="<?php echo $donnees['idSAISON']; ?>"><?php echo $donnees['libelle_saison'] ?></option>
                            <?php } ?>
                          </select>
                          </div>
                          <button type="submit" class="btn btn-default">Créer</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Fermer</button>
                            </div>
                            <div class="btn-group btn-delete hidden" role="group">
                                <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Supprimer</button>
                            </div>

                        </div>
                    </div>
                </div>
              </div>
            </div>
                <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Produits N°</th>
                      <th>Libelle</th>
                      <th>Prix</th>
                      <th>Type</th>
                      <th>Saison</th>
                      <th>Proposé par</th>
                       <th>Actions</th>
                  </tr>
              </thead>
              <tbody>

	            <?php



		        $reponse = $bdd->query('SELECT * FROM produit');

				while ($donnees = $reponse->fetch())
				{ ?>

 				<tr>
                    <td><?php echo $donnees['idProduit'];?></td>
                    <td><?php echo $donnees['libelle_produit'];?></td>
                    <td><?php echo $donnees['prix'];?></td>
                    <td>
                    <?php
                        $reponse2 = $bdd->query('SELECT * FROM type_produit where idTYPE_PRODUIT ='.$donnees['TYPE_PRODUIT_idTYPE_PRODUIT']);
                        while ($donnees2 = $reponse2->fetch()){
                        echo $donnees2['libelle_type_produit'];
                        }
                      ?>
                    </td>
                    <td>
                    <?php
                     $reponse3 = $bdd->query('SELECT * FROM saison where idSAISON ='.$donnees['SAISON_idSAISON']);
                        while ($donnees3 = $reponse3->fetch()){
                        echo $donnees3['libelle_saison'];
                        }
                    ?>
                    <td>
                    <?php
                        $reponse2 = $bdd->query('SELECT * FROM utilisateur where idUTILISATEUR ='.$donnees['UTILISATEUR_idUtilisateur']);
                        while ($donnees2 = $reponse2->fetch()){
                        echo $donnees2['nom_utilisateur']; echo " ";  echo $donnees2['prenom_utilisateur'];
                        }
                      ?>
                    </td>
                    <td>

					<button type="submit" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modifProduit<?php echo $donnees['idProduit'];?>">
					<span class="fa fa-pencil fa-fw"></span>
					</button>
					<a href="supprimerProduit.php/?id=<?php echo $donnees['idProduit'];?>" >
					<button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
						<span class="fa fa-trash fa-fw"></span>
					</button></a>
					</td>
					</tr>
                    </td>
                </tr>

              </tbody>

         </div>
	</div>


<!-- Modal modifier produit -->
<div class="modal fade" id="modifProduit<?php echo $donnees['idProduit'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Modification produit</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="modifierProduit.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Libelle</label>
                 <input type="hidden" name="idModif" value="<?php echo $donnees['idProduit'];?>">
                <input name="libelle" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['libelle_produit'];?>">
                </div>
                <div class="form-group">
                           <label for="exampleRole">Type</label><br>
                          <select name="modifType">
                            <?php   $reponse9 = $bdd->query('SELECT * FROM type_produit');
                            while ($donnees9 = $reponse9->fetch()){?>
                            <option value="<?php echo $donnees9['idTYPE_PRODUIT']; ?>"><?php echo $donnees9['libelle_type_produit'] ?></option>
                            <?php } ?>
                          </select>
                          </div>
                          <div class="form-group">
               <div class="form-group">
                           <label for="exampleRole">Saison</label><br>
                          <select name="modifSaison">
                            <?php   $reponse10 = $bdd->query('SELECT * FROM saison');
                            while ($donnees10 = $reponse10->fetch()){?>
                            <option value="<?php echo $donnees10['idSAISON']; ?>"><?php echo $donnees10['libelle_saison'] ?></option>
                            <?php } ?>
                          </select>
                          </div>
              <div class="form-group">
                 <label for="exampleInputEmail1">Prix</label>
                 <input name="modifPrix" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['prix'];?>">
              </div>
              <div class="form-group">
                 <label for="exampleInputEmail1">Image</label>
                 <input name="modifImage" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['image'];?>">
              </div>
                <div class="form-group">
                           <label for="exampleRole">Proposé par</label><br>
                          <select name="modifPropriétaire">
                            <?php   $reponse12 = $bdd->query('SELECT * FROM utilisateur');
                            while ($donnees12 = $reponse12->fetch()){?>
                            <option value="<?php echo $donnees12['idUTILISATEUR'];?>"><?php echo $donnees12['nom_utilisateur']; echo " "; echo $donnees12['prenom_utilisateur']; ?></option>
                            <?php } ?>
                          </select>
                          </div>

              <button type="submit" class="btn btn-default">Valider</button>

            </form>

		</div>

		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" data-dismiss="modal" role="button">Annuler</button>
				</div>
				<div class="btn-group btn-delete hidden" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Supprimer</button>
				</div>

			</div>
		</div>
	</div>
  </div>
</div>
<?php }?>
<?php $reponse->closeCursor(); // Termine le traitement de la requÃªte ?>


</table>

            </div>
        </div>
    </div>



    <br><br><br>


<?php include("footer.php");?>