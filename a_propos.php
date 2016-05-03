<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil || MIRAMAP</title>
	<!-- All css Files Here -->
	<!-- fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500' rel='stylesheet' type='text/css'>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- fontawesome css -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<!-- revolution banner css settings -->
	<link rel="stylesheet" type="text/css" href="lib/rs-plugin/css/settings.css" media="screen" />
	<!-- style css -->
    <link rel="stylesheet" href="style.css">
	<!-- mobilemenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css"/>
	<!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css"/>
	<!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- Header-Section-Strat  -->
	<header>
		<div class="container">
			<div class="header_top">
				<div class="row">
					<div class="col-md-6">
						<div class="header_top_left float-left">
							<ul class="social_icon">
								<li><a href="https://www.facebook.com/profile.php?id=100010052358058&fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<ul class="social_others">
								<li><a><i class="fa fa-phone"></i>04 81 91 60 51</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>contact@miramap.org</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="header_top_right text-right">
							<ul>
								<?php
								if(isset($_SESSION['mail'])){?>
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon Compte
											<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li>
												<div class="navbar-content">
													<div class="row">
														<div class="col-md-5">
															<img src="http://placehold.it/120x120"
																 alt="Alternate Text" class="img-responsive" />
															<p class="text-center small">
																<a href="#">Changer Photo</a></p>
														</div>
														<div class="col-md-7">
															<div class="test"><?php echo $_SESSION["user"]["nom_utilisateur"]." ";?><?php echo $_SESSION["user"]["prenom_utilisateur"]; ?></div>
															<p class="text-muted small">
																<?php echo $_SESSION["user"]["mail"];?></p>
															<div class="divider">
															</div>
															<a type="submit" data-toggle="modal" data-target="#modifUser" class="btn btn-primary btn-sm active">Voir Profil</a>
														</div>
													</div>
												</div>
												<div class="navbar-footer">
													<div class="navbar-footer-content">
														<div class="row">
															<div class="col-md-6">
																<a href="#" class="btn btn-default btn-sm">Modifier Password</a>
															</div>
															<div class="col-md-6">
																<a href="deconnexion.php" class="btn btn-default btn-sm pull-right">Déconnexion</a>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="deconnexion.php" >Déconnexion</a></li>
								<?php } else{ ?>

								<li><a href="#signup" data-toggle="modal" data-target=".bs-modal-sm">S'enregister / Connexion</a></li>
								<?php } ?>
								<li class="searchbox">
									<input type="search" placeholder="Rechercher......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
									<input type="submit" class="searchbox-submit" value="">
									<span class="searchbox-icon"><i class="fa fa-search"></i></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="container">
				<div class="row mega_relative">
					<div class="col-xs-12 col-sm-2">
						<div class="logo head_lo">
							<a href="index.php"><img src="images/logo.png" alt="Logo" /></a>
						</div>
					</div>
					<div class="col-sm-10">
						<div class="mainmenu float-right">
							<nav>
								<ul>
									<li><a href="index.php">Accueil</a></li>
									<li><a href="#">A propos</a></li>
									<li><a href="produits.php">Les Produits</i></a></li>
									<li><a href="magasins.php">Les Magasins</a></li>
									<li><a href="contact.php">CONTACT</a></li>
									<li class="shop_icon">
										<a href="cart.php"><img src="images/menu_icon_img.png" alt="" /></a>
										<span>10</span>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
	</header>
	<!-- mobile-menu-area start -->
	<div class="mobile-menu-area">
		<div class="container">
			<div class="mobile-menu">
				<nav id="dropdown">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="#">A propos</a></li>
						<li><a href="#">Les produits</a></li>
						<li><a href="#">Les Magasins</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- mobile-menu-area end -->
	<!-- Header-Section-End  -->
	<!-- Modal -->
	<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<br>
				<div class="bs-example bs-example-tabs">
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a href="#signin" data-toggle="tab">Connexion</a></li>
						<li class=""><a href="#signup" data-toggle="tab">S'inscrire</a></li>
					</ul>
				</div>
				<div class="modal-body">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="signin">
							<form method="post" action="connexion.php" id="signin" role="form" class="form-horizontal">
								<fieldset>
									<!-- Sign In Form -->
									<!-- Text input-->
									<div class="control-group">
										<label class="control-label" for="userid">Email:</label>
										<div class="controls">
											<input required="" id="mail" name="mail" type="text" class="form-control" placeholder="Entrez votre adresse mail" class="input-medium" required="">
										</div>
									</div>

									<!-- Password input-->
									<div class="control-group">
										<label class="control-label" for="passwordinput">Mot de passe:</label>
										<div class="controls">
											<input required="" id="password" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
										</div>
									</div>

									<!-- Button -->
									<div class="control-group">
										<label class="control-label" for="signin"></label>
										<div class="controls">
											<button type="submit" id="signin" name="signin" class="btn btn-success">Se connecter</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="tab-pane fade" id="signup">
							<form class="form-horizontal">
								<fieldset>
									<!-- Sign Up Form -->
									<!-- Text input-->
									<div class="control-group">
										<label class="control-label" for="Email">Email:</label>
										<div class="controls">
											<input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
										</div>
									</div>

									<!-- Text input-->
									<div class="control-group">
										<label class="control-label" for="userid">Alias:</label>
										<div class="controls">
											<input id="userid" name="userid" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
										</div>
									</div>

									<!-- Password input-->
									<div class="control-group">
										<label class="control-label" for="password">Mot de passe:</label>
										<div class="controls">
											<input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
											<em>1-8 Characters</em>
										</div>
									</div>

									<!-- Text input-->
									<div class="control-group">
										<label class="control-label" for="reenterpassword">Re-Mot de passe:</label>
										<div class="controls">
											<input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
										</div>
									</div>

									<!-- Button -->
									<div class="control-group">
										<label class="control-label" for="confirmsignup"></label>
										<div class="controls">
											<button id="confirmsignup" name="confirmsignup" class="btn btn-success">S'inscrire</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					</center>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Fin Modal -->


	<!-- Modal modifier utilisateur -->
	<div class="modal fade" id="modifUser" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<h3 style="color: black;" class="modal-title" id="lineModalLabel">Modification utilisateur</h3>
				</div>
				<div class="modal-body">

					<!-- content goes here -->
					<form method="post" action="modifierProfil.php">
						<div class="form-group">
							<label for="exampleInpuNom">Nom</label>
							<input name="nom" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION["user"]["nom_utilisateur"];?>">
							<input type="hidden" name="id" value="<?php echo $_SESSION["user"]["idUTILISATEUR"];?>">
						</div>
						<div class="form-group">
							<label for="exampleInputPrenom">Prénom</label>
							<input name="prenom" type="text" class="form-control" id="exampleInputPrenom" value="<?php echo $_SESSION["user"]["prenom_utilisateur"];?>">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">Email</label>
							<input name="email" type="text" class="form-control" id="exampleInputRole" value="<?php echo $_SESSION["user"]["mail"];?>">
						</div>
						<div class="form-group">
							<label for="exampleInputAdresse">Adresse</label>
							<input name="adresse" type="text" class="form-control" id="exampleInputRole" value="<?php echo $_SESSION["user"]["adresse"];?>">
						</div>
						<div class="form-group">
							<label for="exampleInputAdresse">Ville</label>
							<select class="form-control" id="sel1">
								<?php
								try{
									$bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
								}
								catch (Exception $e)
								{
									die('Erreur : ' . $e->getMessage());
								} ?>





								<option><?php $req = $bdd->prepare('SELECT * FROM VILLE');

									$resultat = $req->fetch();

										var_dump($resultat);
									 ?></option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputStatus">Amap</label>
							<input name="amap" type="text" class="form-control" id="exampleInputStatus" value="amap">
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

	<!-- Fin modal modif user -->


	<br><br>




	<div class="container">
	<p id="textapropos" > <b>U</b>ne association pour le maintien d'une agriculture paysanne, ou AMAP, est, en France,
		un partenariat de proximité entre un groupe de consommateurs et une exploitation locale (généralement une ferme),
		débouchant sur un partage de récolte régulier (le plus souvent hebdomadaire) composée des produits de la ferme.
		L'AMAP est un contrat solidaire, basé sur un engagement financier des consommateurs, qui paient à l’avance
		la totalité de leur consommation sur une période définie. Ce système fonctionne donc sur le principe de
		la confiance et de la responsabilité du consommateur ; il représente une forme de circuit court de distribution.<p>

		<p id="textapropos"> Le terme « AMAP (Association pour le Maintien de l'Agriculture Paysanne) » est
			enregistré depuis mi-2003 à l'INPI en tant que marque française par l'association Alliance Provence.
			L'usage de la marque passe par l'engagement du respect de la charte des AMAP inspirée de la Charte de
			l'agriculture paysanne, éditée en mai 2003 par cette même association. En 2014, la Charte des AMAP est
			ré-actualisée, à la suite d'un chantier et d'une réflexion participative inter-régionale coordonnée par
			le Mouvement Inter-Régional des AMAP (MIRAMAP).<p>

			<br>
			<h5>Nos principes</h5>
			<p id="textapropos"><b>Une AMAP est :</b></p>
		<p id="textapropos"><br>- pour le consommateur, des aliments frais, de saison, souvent biologiques, produits à partir de
				variétés végétales ou races animales de terroir ou anciennes.
			<br><br>- un prix équitable pour les deux partenaires.
			<br><br>- un lien direct, sans intermédiaire, entre le producteur et le consommateur.
			<br><br>- les consommateurs s'engagent à l'avance, pour une saison de production.
			<br><br>- ils partagent les aléas climatiques qui peuvent modifier à la baisse, la quantité de produits
			calculée et planifiée par le producteur.
			<br><br>- le prix du panier est calculé en fonction des coûts de productions et non pas au poids de la marchandise.
		</p>

	</div>

	<br><br><br><br>
	
	<!-- Footer-Section-Start -->
	<footer>
		<div class="footer_middel footer-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="footer_link address">
							<p>MIRAMAP</p>
							<ul>
								<li><span>Adresse: </span> 58 rue Raulin - 69007 Lyon</li>
								<li><span>Telephone: </span>04 81 91 60 51</li>
								<li><span>Email: </span>contact@miramap.fr</li>
							</ul>
						</div>
						<div class="footer_icon">
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=100010052358058&fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer_link">
							<p>Compte </p>
							<ul>
								<li><a href="#">Mon compte</a></li>
								<li><a href="cart.php">Panier</a></li>
								<li><a href="#">Achats</a></li>
								<li><a href="#">Code promo</a></li>
								<li><a href="#">Informations</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer_link res_mar">
							<p>Support</p>
							<ul>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer_link res_mar">
							<p>information</p>
							<ul>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
								<li><a href="#">Test</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bottom footer-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="copyright">
							<p>Copyright 2015 <a href="http://designscrazed.org/">Miramap</a> All rights reserved</p>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="copyright_icon text-right">
							<a href="#"><img src="images/footer/paypal-1.png" alt="" /></a>
							<a href="#"><img src="images/footer/paypal-2.png" alt="" /></a>
							<a href="#"><img src="images/footer/paypal-3.png" alt="" /></a>
							<a href="#"><img src="images/footer/paypal-4.png" alt="" /></a>
							<a href="#"><img src="images/footer/paypal-5.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer-Section-End -->
	<!-- All js Files Here -->
	<!-- jquery-1.11.3 -->
    <script src="js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
	<!-- revolution js -->
	<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
	<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="lib/rs-plugin/rs.home.js"></script>
	<!-- search-box js -->
    <script src="js/search-box.js"></script>
	<!-- scrollUp js -->
    <script src="js/jquery.scrollUp.js"></script>
	<!-- mobilemenu js -->
    <script src="js/jquery.meanmenu.js"></script>
	<!-- main js -->
    <script src="js/main.js"></script>
  </body>
</html>