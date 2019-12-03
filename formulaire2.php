<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css"/> 
	<meta charset="UTF-8"/>
	<title>Inscription</title>
</head>
<body>
	<div class = "haut">
    <h2>Inscription</h2>
<form method="POST" action="formulaireprexo3.php">
  <p>Entrer un nom :<input type="texte" name="nom"/></p>
    <p>Entrer un prenom:<input type="texte" name="prenom"/></p>
      <p>Entrer votre age :<input type="texte" name="age"/></p>
        <p>Selectioner le dommaine du metier :<select name="metier"/>
             <option value="PDG">PDG</option>
             <option value="Cadre">Cadre</option>
             <option value="Fonctionnaire">Fonctionnaire</option>
             <option value="Ouvrier">Ouvrier</option>
             </select></p>
          <p>selectioner votre pays :<select name="pays"/>
	             <option value="France">France</option>
               <option value="Angleterre">Angleterre</option>
	             <option value="Espagne">Espagne</option>
               <option value="Allemagne">Allemagne</option>
               </select></p>
      <input type="submit" value="valider"/>
    </form>
  </div>
  </body>
  </html>
