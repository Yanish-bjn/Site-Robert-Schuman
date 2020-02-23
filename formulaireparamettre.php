<?php
$bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];


  $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root','');
 $req=$bdd->query('select*from inscription where nom=nom');
  $donne=$req->fetchall();
  for each[$donne as $a]
  echo '$a[nom].''.$a[prenom].''.$a[email]';
?>
