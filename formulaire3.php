<?php
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
  $metier=$_POST['metier'];
  $pays=$_POST['pays'];

    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root','');
   $req=$bdd->prepare('INSERT into client(Nom, Prenom, age, metier, pays) VALUES(:nom, :prenom, :age, :metier, :pays)');
   $a = $req->execute(array('nom'=>$nom,'prenom'=>$prenom,'age'=>$age, 'metier'=>$metier, 'pays'=>$pays));
    $donne=$req->fetch();
    var_dump($a);
    echo 'la personne a bien etait ajouter !'; 
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css"/>
	<meta charset="UTF-8"/>
	<title>Inscription reussis</title>
</head>
<body>
	<div class = "haut">
    <h2></h2>
<form action="formulaireprexo1.php" method="POST">
  <p>Choisir votre login (nom):<input type="texte" name="login"/></p>
  <p>Choisir votre mot de passe (prenom):<input type="password" name="mdp"/></p>
  <input type="submit" value="valider">
</form>
</div>
</body>
</html>
