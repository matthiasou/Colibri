<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 02/06/2016
 * Time: 21:45
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
                    <li class="active" ><a href="adm_absence.php"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                    <li><a href="adm_panier.php"><i class="fa fa-pencil fa-fw""></i> Définir livraison panier</a></li>
                </ul>
            </div>
            <div style="color: black " class="col-md-9 well">
            <div style="color: #0f3e68">
                <h4><i class="fa fa-calendar fa-fw"></i> Signaler absence</h4>
             </div>
                <br><br><br>
                <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Date</th>
                      <th>Lieu</th>
                      <th>idContrat</th>
                      <th>Consomateur</th>
                      <th>Producteur</th>
                      <th>Absent</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>

	            <?php



		        $reponse = $bdd->query('SELECT * FROM panier where idConsomateur ='.$_SESSION['id']);

				while ($donnees = $reponse->fetch())
				{ ?>

 				<tr>
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
					<button type="submit" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modifAbsence<?php echo $donnees['idPANIER'];?>">
					<span class="fa fa-pencil fa-fw"></span>
					</button>
					</div>
					</td>
					</tr>
                    </td>

                </tr>

              </tbody>

         </div>
	</div>


<!-- Modal modifier contrat -->
<div class="modal fade" id="modifAbsence<?php echo $donnees['idPANIER'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Déclaration absence</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="modifierAbsent.php">
              <div class="form-group">
                           <label for="exampleRole">Vous ne pouvez pas être la ? </label><br>
                           <input type="hidden" name="idModif" value="<?php echo $donnees['idPANIER'];?>">
                          <select name="absent">
                            <option value="0"> Non </option>
                            <option value="1"> Oui </option>
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
* Si pour le moment il n'y a aucune date ni lieu, merci d'attendre que le producteur fixe ceci
            </div>
        </div>
    </div>



    <br><br><br>


<?php include("footer.php");?>