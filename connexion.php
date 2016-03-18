<?php
/**
 * Created by PhpStorm.
 * User: matthiaslecomte
 * Date: 18/03/2016
 * Time: 11:07
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=colibri;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


// Hachage du mot de pass
//$password_hache = sha1($_POST['password']);
$password_hache = $_POST['password'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM UTILISATEUR WHERE mail = :mail AND password = :password');
$req->execute(array(
    'mail' => $_POST['mail'],
    'password' => $password_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['idUTILISATEUR'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['user'] = $resultat;

    echo 'Vous êtes connecté !';
}
header("Location: /colibri/index.php");
//var_dump($_SESSION['user']['nom_utilisateur']);