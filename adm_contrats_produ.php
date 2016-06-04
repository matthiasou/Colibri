<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 04/06/2016
 * Time: 15:09
 */

include("header.php");?>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                   <li><a href="administration.php">Administration</a></li>
                    <?php
                        if ($_SESSION['user']['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'] == 1){?>
                            <li><a href="adm_absence.php"><i class="fa fa-calendar fa-fw"></i> Signaler absence</a></li>
                            <li class="active"><a href="adm_contrats_conso.php"><i class="fa fa-calendar fa-fw"></i> Mes contrats</a></li>
                        <?php }
                        else if($_SESSION['user']['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'] == 2) { ?>
                            <li><a href="adm_produits_produ.php"><i class="fa fa-shopping-basket fa-fw""></i> Mes produits</a></li>
                            <li class="active"><a href="adm_contrats_produ.php"><i class="fa fa-file-text fa-fw""></i> Mes contrats</a></li>
                            <li><a href="adm_panier.php"><i class="fa fa-pencil fa-fw""></i> Définir livraison panier</a></li>
                       <?php } else if ($_SESSION['user']['TYPE_UTILISATEUR_idTYPE_UTILISATEUR'] == 3){ ?>
                            <li><a href="adm_utilisateurs.php"><i class="fa fa-users fa-fw"></i> Utilisateurs</a></li>
                            <li><a href="adm_produits.php"><i class="fa fa-shopping-basket fa-fw"></i> Produits</a></li>
                            <li><a href="adm_contrats.php"><i class="fa fa-file-text-o fa-fw"></i> Contrâts</a></li>
                      <?php  } ?>
                </ul>
            </div>
            <div style="color: black " class="col-md-9 well">
            <div style="color: #0f3e68">
                <h4><i class="fa fa-file-text-o fa-fw"></i>Mes contrats</h4>
             </div>
                <br><br><br>
                <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>idContrat</th>
                      <th>Fin du contrat</th>
                      <th>AMAP</th>
                      <th>SAISON</th>
                      <th>Consomateur</th>
                      <th>Producteur</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>

	            <?php



		        $reponse = $bdd->query('SELECT * FROM contrat where UTILISATEUR_idUTILISATEUR1 ='.$_SESSION['id']);

				while ($donnees = $reponse->fetch())
				{ ?>

 				<tr>
                    <td><?php echo $donnees['idCONTRAT'];?></td>
                    <td><?php echo $donnees['date_fin_contrat'];?></td>
                    <td>
                    <?php
                        $reponse19 = $bdd->query('SELECT * FROM amap where idAMAP ='.$donnees['AMAP_idAMAP']);
                        while ($donnees19 = $reponse19->fetch()){
                        echo $donnees19['nomAMAP'];
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
                    </td>
                    <td>
                    <?php
                     $reponse2 = $bdd->query('SELECT * FROM utilisateur where idUTILISATEUR ='.$donnees['UTILISATEUR_idUTILISATEUR']);
                        while ($donnees2 = $reponse2->fetch()){
                        echo $donnees2['nom_utilisateur']; echo " ";  echo $donnees2['prenom_utilisateur'];
                        }
                      ?>
                    </td>
                    <td>
                    <?php
                         $reponse20 = $bdd->query('SELECT * FROM utilisateur where idUTILISATEUR ='.$donnees['UTILISATEUR_idUTILISATEUR1']);
                        while ($donnees20 = $reponse20->fetch()){
                        echo $donnees20['nom_utilisateur']; echo " ";  echo $donnees20['prenom_utilisateur'];
                        }
                      ?>
                    </td>
                    <td>
                    <div style="text-align: center">
					<a href="supprimerMesContrat.php/?id=<?php echo $donnees['idCONTRAT'];?>" >
					<button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
						<span class="fa fa-trash fa-fw"></span>
					</button></a>
					</div>
					</td>
					</tr>
                    </td>
                </tr>

              </tbody>

         </div>
	</div>


<!-- Modal modifier contrat -->
<div class="modal fade" id="modifContrat<?php echo $donnees['idCONTRAT'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">—</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Modification contrat</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="modifierContrat.php">
              <div class="form-group">
                           <label for="exampleRole">AMAP</label><br>
                           <input type="hidden" name="idModif" value="<?php echo $donnees['idCONTRAT'];?>">
                          <select name="amap">
                            <?php   $reponse7 = $bdd->query('SELECT * FROM amap');
                            while ($donnees7 = $reponse7->fetch()){?>
                            <option value="<?php echo $donnees7['idAMAP'] ?>"><?php echo $donnees7['nomAMAP'] ?></option>
                            <?php } ?>
                          </select>
              </div>
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
                           <label for="exampleRole">Consomateur</label><br>
                          <select name="modifConsomateur">
                            <?php   $reponse22 = $bdd->query('SELECT * FROM utilisateur');
                            while ($donnees22 = $reponse22->fetch()){?>
                            <option value="<?php echo $donnees22['idUTILISATEUR'];?>"><?php echo $donnees22['nom_utilisateur']; echo " "; echo $donnees22['prenom_utilisateur']; ?></option>
                            <?php } ?>
                          </select>
              </div>
              <div class="form-group">
                           <label for="exampleRole">Producteur</label><br>
                          <select name="modifProducteur">
                            <?php   $reponse21 = $bdd->query('SELECT * FROM utilisateur');
                            while ($donnees21 = $reponse21->fetch()){?>
                            <option value="<?php echo $donnees21['idUTILISATEUR'];?>"><?php echo $donnees21['nom_utilisateur']; echo " "; echo $donnees21['prenom_utilisateur']; ?></option>
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