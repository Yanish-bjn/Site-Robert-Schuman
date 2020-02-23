<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lycée Robert Schuman &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <!------ Lien pour le carousel---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!------ Lien pour le carousel ---------->
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

  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

  <link rel="stylesheet" href="css/style3.css" />
  <!------ liens pour le styles des deux templates---------->
  </head>
  <body>

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
            <img src="/logolycee" alt=""/>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="acceuil.php"><span>acceuil</span></a></li>
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
          </div> <!------ code pour la nav bar---------->


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
                <h1>Bienvenue</h1>
                <p data-aos="fade-up" data-aos-delay="100">Bienvenue sur le site du lycée Robert Schuman, situer a Dugny.</p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div> <!------ code pour la nav bar---------->




    <section class="trainer_area section_gap_top">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="main_title">
                <h2 class="mb-3">Relation professionnel</h2>
                <p>
                  professionnel et etudiant
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
              <div class="thumb d-flex justify-content-sm-center">
                <img class="img-fluid" src="photo/calendrier.png" alt="" />
              </div>
              <div class="meta-text text-sm-center">
                <h4>Calendrier</h4>
                <p class="designation">alternance</p>
                <div class="mb-4">
                  <p>
                    Consulter les calendrier de l'alternance.
                  </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                  <a href="calendrier.php"><i class="	fa fa-sign-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
              <div class="thumb d-flex justify-content-sm-center">
                <img class="img-fluid" src="photo/offre-emploi.png" alt="" />
              </div>
              <div class="meta-text text-sm-center">
                <h4>Offre d'emploi</h4>
                <p class="designation">Entrepreneur</p>
                <div class="mb-4">
                  <p>
                    Déposer une offre de stage ou d'alternance pour nos etudiant.
                  </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                  <a href="emploi.php"><i class="	fa fa-sign-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
              <div class="thumb d-flex justify-content-sm-center">
                <img class="img-fluid" src="photo/voyage.png" alt="" />
              </div>
              <div class="meta-text text-sm-center">
                <h4>Agenda et voyage</h4>
                <p class="designation">Consulter notre agenda</p>
                <div class="mb-4">
                  <p>
                    Consulter notre agenda et les voyage fait par nos etudiant
                  </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                  <a href="agenda.php"><i class="	fa fa-sign-in"></i></a>
                </div>
              </div>
            </div>

              </div>
            </div>
        </div>
      </section> <!------ consulter l'agenda, les offres de formation ou telecharger les calendrier de l'alternance---------->







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
  </div>
<!------ code pour le pied de page---------->
  <script src="/site lycee/jS/jquery-3.3.1.min.js"></script>
  <script src="/site lycee/jS/jquery-migrate-3.0.1.min.js"></script>
  <script src="/site lycee/jS/jquery-ui.js"></script>
  <script src="/site lycee/jS/popper.min.js"></script>
  <script src="/site lycee/jS/bootstrap.min.js"></script>
  <script src="/site lycee/jS/owl.carousel.min.js"></script>
  <script src="/site lycee/jS/jquery.stellar.min.js"></script>
  <script src="/site lycee/jS/jquery.countdown.min.js"></script>
  <script src="/site lycee/jS/jquery.magnific-popup.min.js"></script>
  <script src="/site lycee/jS/bootstrap-datepicker.min.js"></script>
  <script src="/site lycee/jS/aos.js"></script>
  <script src="/site lycee/jS/rangeslider.min.js"></script>

  <script src="/site lycee/jS/main.js"></script>



  <script src="/site lycee/jS/jquery-3.2.1.min.js"></script>
  <script src="/site lycee/jS/popper2.js"></script>
  <script src="/site lycee/jS/bootstrap2.min.js"></script>
  <script src="/site lycee/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="/site lycee/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/site lycee/jS/owl-carousel-thumb2.min.js"></script>
  <script src="/site lycee/jS/jquery2.ajaxchimp.min.js"></script>
  <script src="/site lycee/jS/mail-script2.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="/site lycee/jS/gmaps2.min.js"></script>
  <script src="/site lycee/jS/theme2.js"></script>
  </body>
  </html>
<!------  lien pour le java script des deux templates---------->
