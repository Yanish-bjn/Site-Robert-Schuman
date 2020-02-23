<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/site lycee/CSS/style.css"/>
	<meta charset="UTF-8"/>
	<title>Modification</title>
</head>
<body>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ lien bootstrap ---------->

  <div class="container register">
                  <div class="row">
                      <div class="col-md-3 register-left">
                        <form action="moncompte.php">
                          <img src="photo/logolycee.png" alt=""/>
                          <h3>Lycee Robert Schuman</h3>
                          <p>Bienvenue veuillez remplire les champs suivant</p>
                          <input type="submit" name="" value="Mon compte"/><br/>
                        </form>
                      </div>
                      <div class="col-md-9 register-right">
                          <form action="modif.php" method="POST">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <h3 class="register-heading">Modification</h3>
                                  <div class="row register-form">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Nom *" name="nom" />
                                          </div>
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="prenom *" name="prenom" />
                                          </div>
                                          <div class="form-group">
                                              <input type="text" class="form-control"  placeholder="Login *" name="login" />
                                          </div>
                                          <div class="form-group">
                                              <input type="password" class="form-control" placeholder="Mot de passe *" name="mdp" />
                                          </div>
                                          <div class="form-group">
                                              <div class="maxl">
                                                  <label class="radio inline">
                                                      <input type="radio" name="role" value="parent" checked>
                                                      <span> Parent</span>
                                                  </label>
                                                  <label class="radio inline">
                                                      <input type="radio" name="role" value="eleves">
                                                      <span> Eleves</span>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <input type="email" class="form-control" placeholder="Votre Email *" name="email" />
                                          </div>

                                          <input type="submit" class="btnRegister"  value="Modifier"/>
<!------ formulaire pour modifer une personne---------->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
</form>
