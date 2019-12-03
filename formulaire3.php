<?php
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $login=$_POST['login'];
  $mdp=$_POST['mdp'];

    $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root','');
   $req=$bdd->prepare('INSERT into inscription(nom, prenom, email, role, login, mdp) VALUES(:nom, :prenom, :email, :role, :login, :mdp)');
   $a = $req->execute(array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email, 'role'=>$role, 'login'=>$login, 'mdp'=>$mdp));

    var_dump($a);
    echo 'la personne a bien etait ajouter !';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/site lycee/CSS/style.css"/>
	<meta charset="UTF-8"/>
	<title>Inscription reussis</title>
</head>
<body>
	<div class = "haut">
    <h2>Inscription reussis veuillez vous connectez</h2>
    <form action="formulaire1.php">
      <input type="submit" value="page d'acceuile"/>
    </form>
</div>
</body>
</html>
