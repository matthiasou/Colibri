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
                    <li class="active"><a href="#"><i class="fa fa-users fa-fw"></i> Utilisateurs</a></li>
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

            <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Ajouter</button></div>

            <br>
            <!-- Ajout utilisateur -->
            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Ajout Utilisateur</h3>
                    </div>
                    <div class="modal-body">

                        <!-- content goes here -->
                        <form method="post" action="ajouterUtilisateur.php">
                          <div class="form-group">
                            <label for="exampleNom">Nom utilisateur</label>
                            <input name="ajoutNom" type="text" class="form-control" id="exampleNom" placeholder="Entrez votre nom">
                          </div>
                          <div class="form-group">
                            <label for="examplePreNom">Prenom utilisateur</label>
                            <input name="ajoutPrenom" type="text" class="form-control" id="examplePreNom" placeholder="Entrez votre prenom">
                          </div>
                          <div class="form-group">
                            <label for="exampleRole">Rôle</label>
                            <input name="ajoutRole" type="text" class="form-control" id="exampleRole" placeholder="Entrez votre role">
                          </div>
                          <div class="form-group">
                            <label for="exampleAMAP">AMAP</label>
                            <input name="ajoutAMAP" type="text" class="form-control" id="exampleAMAP" placeholder="Entrez votre amap">
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
                      <th>Utilisateur N°</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Rôle</th>
                      <th>AMAP</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>

	            <?php



		        $reponse = $bdd->query('SELECT * FROM utilisateur');

				while ($donnees = $reponse->fetch())
				{ ?>

 				<tr>
                    <td><?php echo $donnees['idUTILISATEUR'];?></td>
                    <td><?php echo $donnees['nom_utilisateur'];?></td>
                    <td><?php echo $donnees['prenom_utilisateur'];?></td>
                    <td><?php echo $donnees['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'];?> </td>
                    <td><?php echo $donnees['AMAP_idAMAP'];?>
                    <td>
					<button type="submit" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modifUser<?php echo $donnees['idUTILISATEUR'];?>">
					<span class="fa fa-pencil fa-fw"></span>
					</button>
					<a href="supprimerUtilisateur.php/?id=<?php echo $donnees['idUTILISATEUR'];?>" >
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
<div class="modal fade" id="modifUser<?php echo $donnees['idUTILISATEUR'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
                <input type="hidden" name="id" value="<?php echo $donnees['idUTILISATEUR'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputRole">Rôle</label>
                <input name="role" type="text" class="form-control" id="exampleInputRole" value="<?php echo $donnees['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputStatus">Amap</label>
                <input name="status" type="text" class="form-control" id="exampleInputStatus" value="<?php echo $donnees['AMAP_idAMAP'];?>">
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