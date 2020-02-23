<?php

	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$login = $_GET['login'];
$mdp = $_GET['mdp'];
$email = $_GET['email'];
$role = $_GET['role'];
$id = $_GET['id'];

var_dump($_GET);

	$b = $req = $bdd->prepare('UPDATE inscription SET Nom = :nom, Prenom = :prenom, login = :login, Mdp = :mdp, email = :email,  role = :role WHERE id = :id');
	$a = $req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'login' => $login,
		'mdp' => $mdp,
		'email' => $email,
    'role' => $role,
    'id' => $id
	));



echo 'La personne a bien été ajouté ! Veillez vous connectez maintenant';
echo'<a href="admin.php" >Connexion</a>';
?> <!------ traitement pour modifier les donner d'une personne---------->
