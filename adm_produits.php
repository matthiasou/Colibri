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
                    <li><a href="#"><i class="fa fa-file-text-o fa-fw"></i> Contrats</a></li>
                    <li><a href="#"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                    <li><a href="#"><i class="fa fa-tasks fa-fw"></i> Changement AMAP</a></li>
                    <li><a href="#"><i class="fa fa-pencil fa-fw""></i> Créer/Modifier Paniers</a></li>
                    <li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Valider Panier</a></li>
                    <li><a href="#"><i class="fa fa-area-chart fa-fw"></i> Publier Bilan Activité</a></li>
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


<!-- Modal modifier utilisateur -->
<div class="modal fade" id="modifProduit<?php echo $donnees['idProduit'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Modification utilisateur</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="modifierUtilisateur.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input name="nom" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['nom_utilisateur'];?>">
                </div>
                <div class="form-group">
                 <label for="exampleInputEmail1">Prenom</label>
                 <input name="prenom" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['prenom_utilisateur'];?>">
                <input type="hidden" name="idModif" value="<?php echo $donnees['idUTILISATEUR'];?>">
              </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Adresse</label>
                 <input name="adresse" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['adresse'];?>">
              </div>
              <div class="form-group">
                 <label for="exampleInputEmail1">Mail</label>
                 <input name="mail" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['mail'];?>">
              </div>
              <div class="form-group">
                 <label for="exampleInputEmail1">Password</label>
                 <input name="password" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $donnees['password'];?>">
              </div>
               <div class="form-group">
                           <label for="exampleRole">Rôle</label><br>
                          <select name="role">
                            <?php   $reponse6 = $bdd->query('SELECT * FROM type_utilisateur');
                            while ($donnees6 = $reponse6->fetch()){?>
                            <option value="<?php echo $donnees6['idTYPE_UTILISATEUR'] ?>"><?php echo $donnees6['libelle'] ?></option>
                            <?php } ?>
                          </select>
                          </div>
              <div class="form-group">
                           <label for="exampleRole">AMAP</label><br>
                          <select name="amap">
                            <?php   $reponse7 = $bdd->query('SELECT * FROM amap');
                            while ($donnees7 = $reponse7->fetch()){?>
                            <option value="<?php echo $donnees7['idAMAP'] ?>"><?php echo $donnees7['nomAMAP'] ?></option>
                            <?php } ?>
                          </select>
                          </div>
                          <div class="form-group">
                           <label for="exampleRole">Ville</label><br>
                          <select name="ville">
                            <?php   $reponse8 = $bdd->query('SELECT * FROM ville');
                            while ($donnees8 = $reponse8->fetch()){?>
                            <option value="<?php echo $donnees8['idVILLE'] ?>"><?php echo $donnees8['libelle_ville'] ?></option>
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