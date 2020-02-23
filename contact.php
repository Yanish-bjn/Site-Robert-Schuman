<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacter nous &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/site lycee/CSS/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/site lycee/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="/site lycee/CSS/magnific-popup.css">
    <link rel="stylesheet" href="/site lycee/CSS/jquery-ui.css">
    <link rel="stylesheet" href="/site lycee/CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="/site lycee/CSS/owl.theme.default.min.css">

    <link rel="stylesheet" href="/site lycee/CSS/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/site lycee/CSS/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/site lycee/CSS/aos.css">
    <link rel="stylesheet" href="/site lycee/CSS/rangeslider.css">

    <link rel="stylesheet" href="/site lycee/CSS/style.css">
<link rel="stylesheet" href="/site lycee/CSS/style2.css">
  </head>
  <body> <!------ liens pour le styles des templates ---------->

  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white h2 mb-0">Lycee Robert Schuman</a></h1>
            <img src="" alt=""/>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="acceuil/acceuil.php"><span>acceuil</span></a></li>
                <li class="has-children">
                  <a><span>Formation</span></a>
                  <ul class="dropdown arrow-to">
                    <li><a href="BTSSIO.php">BTS SIO</a></li>
                    <li><a href="BTSCPRP.php">BTS CPRP</a></li>
                    <li><a href="BACSTI2D.php">BAC STI2D</a></li>
                    <li><a href="BACPROSN.php">BAC PRO SN</a></li>
                    <li><a href="BACPROTU.php">BAC PRO TU</a></li>
                    <li><a href="BACPROMEI.php">BAC PRO MEI</a></li>
                    <li><a href="troisiemeprepapro.php">Troisième prepa pro</a></li>
                  </ul>
                </li>
                <li><a href="relationentreprise.php"><span>Relation professionnelle</span></a></li>
                <?php
                if (isset($_SESSION['login']) && isset ($_SESSION['mdp']) && $_SESSION['role'] == 'parent')
                { ?>
                    <li><a href="moncompte.php"><span>Mon compte parent</span></a></li>

                  <?php
                }
                  if (isset($_SESSION['login']) && isset ($_SESSION['mdp']) && $_SESSION['role'] == 'eleve')
                  {
                    ?>
                    <li><a href="moncompte.php"><span>Mon compte eleves</span></a></li>
                  <?php }
                  if (empty($_SESSION['role'])){
                      ?>
                    <li><a href="connexion.php"><span>Connexion</span></a></li>
                  <?php  }?>
                <li><a href="contact.php"><span>Contact</span></a></li>
                <li><a href="connexion_administration.php"><span>Administration</span></a></li>
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(photo/fond4.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1></h1>
                <p data-aos="fade-up" data-aos-delay="100">Contacter nous</p>
              </div>
            </div> <!------ code pour la nav bar ---------->


          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">



            <form action="formulairecontact.php" method="POST" class="p-5 bg-white" style="margin-top:;">


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Votre nom</label>
                  <input type="text" id="fname" name="nom" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Votre prenom</label>
                  <input type="text" id="lname" name="prenom" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Votre email</label>
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Sujet</label>
                  <input type="subject" id="subject" name="sujet" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="écriver votre message ici ..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Envoyer message" class="btn btn-primary btn-md text-white">
                </div>
              </div> <!------ formulaire de contact---------->


            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">

            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Addresse</p>
              <p class="mb-4">5 Avenue du Général de Gaulle, 93440 Dugny</p>

              <p class="mb-0 font-weight-bold">Numero de telephone</p>
              <p class="mb-4"><a>01 48 37 74 26</a></p>

              <p class="mb-0 font-weight-bold">adresse mail</p>
              <p class="mb-0"><a>administration@lyceerobertschuman.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Information</h3>
              <p>L’établissement a été créé en 1920 par quelques ingénieurs centraliens chrétiens qui fondèrent une association pour alphabétiser des jeunes gens en difficultés : c’était la naissance de « l’Entraide Éducative ». Plus tard, s’ajouteront différentes formations professionnelles pour devenir le Lycée privé Robert Schuman (Sous contrat d’association avec l’État).</p>
              <p><a href="acceuil.php" class="btn btn-primary px-4 py-2 text-white">en savoir plus</a></p>
            </div>

          </div>
        </div>
      </div>
    </div> <!------ case d'info sur l'ecole---------->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Liens rapide</h2>
                <ul class="list-unstyled">
                  <li><a href="https://0931573e.index-education.net/pronote/">Pronote</a></li>
                  <li><a href="https://fr-fr.facebook.com/pages/Lyc%C3%A9e-Priv%C3%A9-Robert-Schuman-%C3%A0-Dugny/388750161192043">Facebook</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Acces</h2>
                <ul class="list-unstyled">
                  <li><a>RER B (Le Bourget)</a></li>
                  <li><a>Bus 133 (Albert Chardavoine)</a></li>
                  <li><a>Tramway T11: arrêt Dugny-La Courneuve</a></li>
                  <li><a>Bus 249 (Albert Chardavoine)</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Lycee Robert Schuman</h2>
                <ul class="list-unstyled">
                  <li><a href="https://fr.wikipedia.org/wiki/Lyc%C3%A9e_Robert-Schuman_(homonymie)">Enseignement catholique sous contrat d'association avec l'Etat
  Etablissement habilité à percevoir la taxe d'apprentissage</a></li>
                  <li><a href="https://www.google.com/maps/place/Lyc%C3%A9e+Robert+Schuman/@48.9493004,2.415391,15z/data=!4m5!3m4!1s0x0:0xa35833adc1739e08!8m2!3d48.9493004!4d2.415391">5 avenue du Général de Gaulle - 93440 Dugny</a></li>
                  <li><a>Tel :01 48 37 74 26 FAX: 01 48 35 48 14</a></li>
                  <li><a>administration@lyceerobertschuman.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Nouveautés/Voyage/Sortie</h2>
            <p>Etre au courant des nouveautées</p>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div> <!------ code pied de page---------->

  <script src="/site lycee/js/jquery-3.3.1.min.js"></script>
  <script src="/site lycee/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/site lycee/js/jquery-ui.js"></script>
  <script src="/site lycee/js/popper.min.js"></script>
  <script src="/site lycee/js/bootstrap.min.js"></script>
  <script src="/site lycee/js/owl.carousel.min.js"></script>
  <script src="/site lycee/js/jquery.stellar.min.js"></script>
  <script src="/site lycee/js/jquery.countdown.min.js"></script>
  <script src="/site lycee/js/jquery.magnific-popup.min.js"></script>
  <script src="/site lycee/js/bootstrap-datepicker.min.js"></script>
  <script src="/site lycee/js/aos.js"></script>
  <script src="/site lycee/js/rangeslider.min.js"></script>

  <script src="/site lycee/js/main.js"></script>

  </body><!------ code pour le ava script des deux templates---------->
</html>
