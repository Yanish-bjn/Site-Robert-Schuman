<?php
session_start();
$login = $_POST['login'];
$mdp = md5($_POST['mdp']);

try {
  $bdd =  new PDO('mysql:host=localhost;dbname=lycee;charset=utf8','root','');
} catch (Exception $e) {
   die('Erreur:'.$e->getMessage());
}

$red = $bdd->prepare('SELECT * FROM inscription WHERE login=:login AND mdp=:mdp ');
$red->execute(array(
   'login'=> $login,
   'mdp'=> $mdp
 ));
$c = $red->fetch();
// prepare la requette, recupere la requette, affiche la requette //
if ($c == true) {
  $_SESSION['login'] = $_POST['login'];
  $_SESSION['mdp'] = $_POST['mdp'];
  header('Location: acceuil.php');


}
else {
  echo "Mauvais login veuillez réessayer !";
  //header('Location:connexion.php');
}
?><!------ traitement de la connexion d'un admin---------->
