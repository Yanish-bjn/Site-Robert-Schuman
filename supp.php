<?php

	// On se connecte à MySQL

  $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');

$nom = $_POST['nom'];



	$b = $req = $bdd->prepare('DELETE FROM inscription WHERE Nom = :nom');
	$a = $req->execute(array(
    'nom' => $nom
	));



echo 'La personne a bien été supprimer !';
echo'<a href="admin.php" >Connexion</a>';
?>
<!------ traitement pour supprimer un individue---------->
