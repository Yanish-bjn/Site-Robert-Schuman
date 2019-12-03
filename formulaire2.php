<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/site lycee/CSS/style.css"/>
	<meta charset="UTF-8"/>
	<title>Inscription</title>
</head>
<body>
	<div class = "haut">
    <h2>Inscription</h2>
<form method="POST" action="formulaire3.php">
  <p>Entrer un nom :<input type="texte" name="nom"/></p>
    <p>Entrer un prenom:<input type="texte" name="prenom"/></p>
      <p>Entrer votre email :<input type="texte" name="email"/></p>
      <p>selectioner votre role:<select name="role"/>
           <option value="administrateur">administrateur</option>
           <option value="parent">parent</option>
           <option value="eleve">eleve</option>
             </select></p>
             <p>Choisir votre login (nom):<input type="texte" name="login"/></p>
             <p>Choisir votre mot de passe (prenom):<input type="password" name="mdp"/></p>
      <input type="submit" value="valider"/>
    </form>
  </div>
  </body>
  </html>
