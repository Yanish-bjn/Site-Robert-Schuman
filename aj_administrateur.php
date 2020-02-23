<?php

	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];

var_dump($_POST);

	$req = $bdd->prepare('INSERT INTO inscription (Nom, Prenom, login, mdp, email) VALUES
(:nom, :prenom, :login, :mdp, :email)');
	$a = $req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'login' => $login,
		'mdp' => $mdp,
    'email' => $email,
	));

echo 'La personne a bien été ajouté ! Retour a la page administration';
echo'<a href="administration.php" >Administration</a>';


?>
<!------ traitement pour ajouter un admin---------->
