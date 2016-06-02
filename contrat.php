<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}





// insertion données bancaires
$sql = "INSERT INTO identite_bancaire (idIDENTITE_BANCAIRE, numeroCarte, dateExpiration, ccv, UTILISATEUR_idUTILISATEUR) VALUES ('', '".$_POST['cardNumber']."', '".$_POST['cardExpiry']."', '".$_POST['cardCVC']."', '".$_SESSION['id']."')";
$req = $bdd->prepare($sql);
$req->execute();

// insertion d'un contrat

$date = date("y-m-d");
$newDate = date('Y-m-d', strtotime($date. " + 6 months"));


foreach($_SESSION['produits'] as $prod) {
    $sql3 = "SELECT * FROM produit where idProduit = '" . $prod . "'";
    $req3 = $bdd->prepare($sql3);
    $req3->execute();
    $data = $req3->fetchAll(PDO::FETCH_ASSOC);


    foreach ($data as $produits) {
    }


}

$sql2 = "INSERT INTO contrat (idCONTRAT, date_debut_contrat, date_fin_contrat, AMAP_idAMAP, SAISON_idSAISON, UTILISATEUR_idUTILISATEUR, UTILISATEUR_idUTILISATEUR1) VALUES ('', '".$date."', '".$newDate."', '".$_SESSION['user']['AMAP_idAMAP']."', '".$produits['SAISON_idSAISON']."', '".$_SESSION['user']['idUTILISATEUR']."', '".$produits['UTILISATEUR_idUtilisateur']."')";
$req2 = $bdd->prepare($sql2);
$req2->execute();


//insertion d'un panier pour répertorier le prix et le numero du contrat
$sql5 = "SELECT * FROM contrat where UTILISATEUR_idUTILISATEUR = '".$_SESSION['user']['idUTILISATEUR']."' and UTILISATEUR_idUTILISATEUR1 = '".$produits['UTILISATEUR_idUtilisateur']."'";
$req5 = $bdd->prepare($sql5);
$req5->execute();
$data2 = $req5->fetchAll(PDO::FETCH_ASSOC);

foreach ($data2 as $contrat) {

}


$sql4 = "INSERT INTO panier (idPANIER, date_panier, lieu_panier, TYPE_PANIER_idTYPE_PANIER, CONTRAT_idCONTRAT, idConsomateur, idProducteur, prix, absent) VALUES ('', null, null, null, '".$contrat['idCONTRAT']."', '".$_SESSION['user']['idUTILISATEUR']."', '".$produits['UTILISATEUR_idUtilisateur']."', '".$_SESSION['total']."', false)";
$req4 = $bdd->prepare($sql4);
$req4->execute();


header("Location: /colibri/remerciement.php");