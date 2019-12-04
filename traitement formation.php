<?php

$bdd = new PDO('mysql:host=localhost,dbname=lycee;charset=utf-8', 'root', '');

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];
$mail = $_GET['mail'];
$date_naissance = $_GET['date_naissance'];
$adresse = $_GET['adresse'];
$ancien_etablissement = $_GET['ancien_etablissement'];

$req = $bdd->prepare('INSERT INTO formation (nom, prenom, age, mail, date_naissance, adresse, ancien etablissement)
VALUES (:nom, :prenom, :age, :mail, :date_naissance, :adresse, :ancien_etablissement)');
$req->execute(array(
  'nom' => $nom,
  'prenom' => $prenom,
  'age' => $age,
  'mail' => $mail,
  'date_naissance' => $date_naissance,
  'adresse' = $adresse>,
  'ancien_etablissement' => $ancien_etablissement,
));

echo 'Merci d\'avoir rempli le formulaire.';
?>
