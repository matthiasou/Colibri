<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 02/06/2016
 * Time: 22:20
 */

include("header.php");?>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="administration.php">Administration</a></li>
                    <li><a href="adm_utilisateurs.php"><i class="fa fa-users fa-fw"></i> Utilisateurs</a></li>
                    <li><a href="adm_produits.php"><i class="fa fa-shopping-basket fa-fw"></i> Produits</a></li>
                    <li><a href="adm_contrats.php"><i class="fa fa-file-text-o fa-fw"></i> Contrats</a></li>
                    <li><a href="adm_absence.php"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                    <li class="active" ><a href="adm_panier.php"><i class="fa fa-pencil fa-fw""></i> Définir livraison panier</a></li>
                </ul>
            </div>
            <div style="color: black " class="col-md-9 well">
            <div style="color: #0f3e68">
                <h4><i class="fa fa-pencil fa-fw"></i> Définir Lieu & Date Panier</h4>
             </div>
                <br><br><br>
                <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Panier</th>
                      <th>Date</th>
                      <th>Lieu</th>
                      <th>Contrat n°</th>
                      <th>Consomateur</th>
                      <th>Producteur</th>
                      <th>Absent</th>
                       <th>Actions</th>
                  </tr>
              </thead>
              <tbody>

	            <?php



		        $reponse = $bdd->query('SELECT * FROM panier where idProducteur ='.$_SESSION['id']);

				while ($donnees = $reponse->fetch())
				{ ?>

 				<tr>
                    <td><?php echo $donnees['idPANIER'];?></td>
                    <td><?php echo $donnees['date_panier'];?></td>
                    <td><?php echo $donnees['lieu_panier'];?></td>
                    <td><?php echo $donnees['CONTRAT_idCONTRAT'];?></td>
                    <td>
                    <?php
                     $reponse2 = $bdd->query('SELECT * FROM utilisateur where idUTILISATEUR ='.$donnees['idConsomateur']);
                        while ($donnees2 = $reponse2->fetch()){
                        echo $donnees2['nom_utilisateur']; echo " ";  echo $donnees2['prenom_utilisateur'];
                        }
                      ?>
                    </td>
                    <td>
                    <?php
                     $reponse29 = $bdd->query('SELECT * FROM utilisateur where idUTILISATEUR ='.$donnees['idProducteur']);
                        while ($donnees29 = $reponse29->fetch()){
                        echo $donnees29['nom_utilisateur']; echo " ";  echo $donnees29['prenom_utilisateur'];
                        }
                      ?>
                    </td>
                    <td>
                        <?php
                            if ($donnees['absent']== true){
                                echo "Oui";
                            }
                            else{
                                echo "Non";
                            }
                        ?>
                    </td>
                    <td>
                    <div style="text-align: center">
					<button type="submit" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modifPanier<?php echo $donnees['idPANIER'];?>">
					<span class="fa fa-pencil fa-fw"></span>
					</button></div>

					</td>
					</tr>
                    </td>
                </tr>

              </tbody>

         </div>
	</div>


<!-- Modal modifier panier -->
<div class="modal fade" id="modifPanier<?php echo $donnees['idPANIER'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Choisir date & lieu</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="modifierPanier.php">
			  <div class="form-group">
			    <input type="date" name="date">
			    <input type="hidden" name="idModif" value="<?php echo $donnees['idPANIER'];?>">
			  </div>
              <div class="form-group">
                           <label for="exampleRole">Ville</label><br>
                          <select name="ajoutVille">
                            <?php   $reponse30 = $bdd->query('SELECT * FROM ville');
                            while ($donnees30 = $reponse30->fetch()){?>
                            <option value="<?php echo $donnees30['libelle_ville'] ?>"> <?php echo $donnees30['libelle_ville'] ?></option>
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