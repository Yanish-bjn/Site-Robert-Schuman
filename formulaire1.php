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
  $_SESSION['login'] = $login;
  $_SESSION['mdp'] = $mdp;
  $_SESSION['role'] = $c['role'];
  $_SESSION['nom'] = $c['nom'];
  $_SESSION['prenom']=$c['prenom'];
  $_SESSION['email']=$c['email'];
  header('Location: administration.php');


}
else {
  echo "Mauvais login veuillez réessayer !";
  //header('Location:connexion.php');
}
?>
<!------ traitement pour ajouter une personne lors de l'inscription au site---------->
