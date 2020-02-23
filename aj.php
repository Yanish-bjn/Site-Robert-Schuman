<?php

	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];
$role = $_POST['role'];

var_dump($_POST);

	$req = $bdd->prepare('INSERT INTO inscription (Nom, Prenom, login, mdp, email, role) VALUES
(:nom, :prenom, :login, :mdp, :email, :role)');
	$a = $req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'login' => $login,
		'mdp' => $mdp,
    'email' => $email,
		'role' => $role
	));

echo 'La personne a bien été ajouté ! Retour a la page Mon compte ';
echo'<a href="moncompte.php" >Mon compte</a>';


?>
<!------ traitement pour aouter une personne ---------->
