<?php
session_start ();

try {
  $bdd = new PDO('mysql:host=localhost;client=test;charset=utf8', 'root','');

}
catch (Exception $e)
{
    die('Erreur:'. $e->getMessage());


    if(isset($_POST['login'])&& isset($_POST['mdp'])){
    	if($value['nom'] == $_POST['login'] && $value['prenom'] == $_POST['mdp']){

    	$_session['login']= $_POST['login'];

      header('location: formulaireprexo4');
 }
else {
  echo '<body onload="alert(\'Nope\')">';

  echo '<meta http-equive="refresh" content="0;URL=formulaireprexo1.php">';
}
}

else{
  echo 'veuillez remplir les champs vides';

}
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css"/>
	<meta charset="UTF-8"/>
	<title>Connexion</title>
</head>
<body>
	<div class = "haut">
    <h2>Bienvenue connectez vous</h2>
<form action=formulaireprexo4.php method="POST">
<p>Choisir votre login :<input type="texte" name="Login"/></p>
<p>Choisir votre mot de passe :<input type="password" name="mdp"/></p>
    <input type="submit" value="valider"/>
    <a href="formulaireprexo2.php">S'inscrire</a>
</form>
</div>
</body>
</html>
