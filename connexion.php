<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/site lycee/CSS/style.css"/>
	<meta charset="UTF-8"/>
	<title>Connexion</title>
</head>
<body>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ liens pour le bootstrap---------->

  <div class="container login-container">
              <div class="row">
                  <div class="col-md-6 login-form-1">
                      <h3>Parent</h3>
                      <form action="formulaire1.php" method="POST">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Votre login *" name="login" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Votre mot de passe *" name="mdp" />
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btnSubmit" value="Valider" />
                          </div>
                          <div class="form-group">
                              <a href="#" class="ForgetPwd">Mot de passe oublier ?</a>
                              <a href="inscription.php"><b>S'inscrire</b></a>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-6 login-form-2">
                      <h3>Eleves</h3>
                      <form action="formulaire1.php" method="POST">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Votre login *" name="login" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Votre mot de passe *" name="mdp" />
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btnSubmit" value="Valider" />
                          </div>
                          <div class="form-group">

                              <a href="#" class="ForgetPwd" value="Login">Mot de passe oublier ?</a>
                              <a href="inscription.php"><b>S'inscrire</b></a>
                          </div> <!------ formulaire pour se connecter---------->
                      </form>
                  </div>
              </div>
          </div>
</body>
