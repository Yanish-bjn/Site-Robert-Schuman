<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lycée Robert Schuman &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!------ Lien pour le carousel---------->
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

<link rel="stylesheet" href="/site lycee/CSS/bootstrap.css" />
<link rel="stylesheet" href="/site lycee/CSS/flaticon.css" />
<link rel="stylesheet" href="/site lycee/CSS/themify-icons.css" />
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

  <link rel="stylesheet" href="/site lycee/CSS/style3.css" />

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
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header> <!------ code pour la nav bar ---------->




    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(photo/fond4.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Agenda</h1>
                <p data-aos="fade-up" data-aos-delay="100"></p>
              </div>
            </div>


          </div>
        </div>
      </div> <!------ code pour l'image de fond de la nav bar  ---------->



      <section class="blog_area section_gap">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="blog_left_sidebar">
                          <article class="row blog_item">
                              <div class="col-md-3">
                                  <div class="blog_info text-right">
                                      <div class="post_tag">
                                          <a>Angleterre ,</a>
                                          <a>Visite,</a>
                                          <a>Good Vibes,</a>
                                          <a>smile</a>
                                      </div>
                                      <ul class="blog_meta list">
                                          <li><a>Angleterre<i class="fa fa-plane"></i></a></li>
                                          <li><a>21 mars, 2019<i class="fa fa-calendar"></i></a></li>
                                          <li><a>#Friends<i class=" 	fa fa-group"></i></a></li>
                                          <li><a>#Chill<i class=" 	fa fa-smile-o"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="blog_post">
                                      <img src="photo/voyage1.png" alt="">
                                      <div class="blog_details">
                                          <a href="single-blog.html">
                                              <h2>Voyage vers l'Angleterre pour nos eleves de Terminal STI2D</h2>
                                          </a>
                                          <p>Ce matin nous avons visité la ville de Portsmouthn et ses monuments historiques ; nous avons voyagé à travers le temps dans la ville. Après, nous avons visité le HMS Victory. Nous avons appris beaucoup de choses sur son histoire et sur l’intérieur du navire. Nous avons remarqué que les passages étaient très bas de plafond. Nous avons fini par une séance shopping puis nous sommes rentrés. (Guillaume MERLIER, Minh TANG, Nathan GONCALVES, Loïc GUO)</p>
                                            <!------ Code pour un voyage  ---------->
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <article class="row blog_item">
                              <div class="col-md-3">
                                  <div class="blog_info text-right">
                                      <div class="post_tag">
                                          <a>Food,</a>
                                          <a class="active">Technology,</a>
                                          <a>Politics,</a>
                                          <a>Lifestyle</a>
                                      </div>
                                      <ul class="blog_meta list">
                                          <li><a>Normandie<i class="fa fa-plane"></i></a></li>
                                          <li><a>12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                          <li><a>#friends<i class=" 	fa fa-group"></i></a></li>
                                          <li><a>#classe<i class="fa fa-smile-o"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="blog_post">
                                      <img src="photo/Normandie.png" alt="">
                                      <div class="blog_details">
                                          <a href="single-blog.html">
                                              <h2>Voyage vers la Normandie pour nos eleves de ...</h2>
                                          </a>
                                          <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                              understand why you should have to spend money on boot camp when you can get
                                              the MCSE study materials yourself at a fraction.</p>
                                                <!------ code pour un voyage---------->
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <article class="row blog_item">
                              <div class="col-md-3">
                                  <div class="blog_info text-right">
                                      <div class="post_tag">
                                          <a>Food,</a>
                                          <a class="active">Technology,</a>
                                          <a>Politics,</a>
                                          <a>Lifestyle</a>
                                      </div>
                                      <ul class="blog_meta list">
                                          <li><a>Brighton<i class="fa fa-plane"></i></a></li>
                                          <li><a>12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                          <li><a>#friends<i class=" 	fa fa-group"></i></a></li>
                                          <li><a>#cool<i class="fa fa-smile-o"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="blog_post">
                                      <img src="photo/classe.png" alt="">
                                      <div class="blog_details">
                                          <a href="single-blog.html">
                                              <h2>Visite de Brighton</h2>
                                          </a>
                                          <p>Ce matin nous sommes partis à 8h en direction de Brighton. Ensuite nous avons pris des selfies devant des bâtiments puis nous avons mangé fish and chips pour le déjeuner. L’après-midi,  nous avons visité le pavillon royal et pour finir,  nous avons fait un tour dans le British Airways I360. (Jeremy Heber et Ludovic Lepecheur)</p>
                                          <!------ code pour un voyage---------->
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <article class="row blog_item">
                              <div class="col-md-3">
                                  <div class="blog_info text-right">
                                      <div class="post_tag">
                                          <a>Food,</a>
                                          <a class="active">Technology,</a>
                                          <a>Politics,</a>
                                          <a>Lifestyle</a>
                                      </div>
                                      <ul class="blog_meta list">
                                          <li><a>Les Carroz-d’Arâches<i class="fa fa-plane"></i></a></li>
                                          <li><a>12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                          <li><a>#friends<i class=" 	fa fa-group"></i></a></li>
                                          <li><a>#ski<i class=" 	fa fa-area-chart"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="blog_post">
                                      <img src="photo/ski.png" alt="">
                                      <div class="blog_details">
                                          <a href="single-blog.html">
                                              <h2>Sejour de Ski</h2>
                                          </a>
                                          <p>Petite semaine de ski pour nos eleves de TU</p>
                                          <!------ code pour un voyage---------->
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <article class="row blog_item">
                              <div class="col-md-3">
                                  <div class="blog_info text-right">
                                      <div class="post_tag">
                                          <a>Angleterre,</a>
                                          <a class="active">Portsmouth,</a>
                                          <a>Visite,</a>
                                          <a>Sejour</a>
                                      </div>
                                      <ul class="blog_meta list">
                                          <li><a>Portsmouth<i class="fa fa-plane"></i></a></li>
                                          <li><a>12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                          <li><a>#smile<i class="fa fa-group"></i></a></li>
                                          <li><a>#cool<i class="fa fa-smile-o"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="blog_post">
                                      <img src="photo/Normandie2.png" alt="">
                                      <div class="blog_details">

                                              <h2>Visite de Portsmouth</h2>
                                          </a>
                                          <p>Ce matin nous avons visité la ville de Portsmouth et ses monuments historiques ; nous avons voyagé à travers le temps dans la ville. Après, nous avons visité le HMS Victory. Nous avons appris beaucoup de choses sur son histoire et sur l’intérieur du navire. Nous avons remarqué que les passages étaient très bas de plafond. Nous avons fini par une séance shopping puis nous sommes rentrés. (Guillaume MERLIER, Minh TANG, Nathan GONCALVES, Loïc GUO)</p>
                                          <!------ code pour un voyage---------->
                                      </div>
                                  </div>
                              </div>
                          </article>

                      </div>
                  </div>



                  <div class="col-lg-4">
                      <div class="blog_right_sidebar">
                          <aside class="single_sidebar_widget author_widget">
                              <img class="author_img rounded-circle" src="photo/logolycee.png" alt="">
                              <h4>Evenements et Date</h4>
                              <div class="social_icon">
                                  <a href="https://fr-fr.facebook.com/pages/Lyc%C3%A9e-Priv%C3%A9-Robert-Schuman-%C3%A0-Dugny/388750161192043"><i class="fa fa-facebook"></i></a>
                                  <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                                  <a href="https://fr.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                  <a href="https://github.com/"><i class="fa fa-github"></i></a>
                              </div>
                              <p>Resumer des dates importantes et de l'ensemble des voyages fait dans notre établissement</p>
                              <div class="br"></div>
                          </aside>
                          <aside class="single_sidebar_widget popular_post_widget">
                              <h3 class="widget_title">Date importante</h3>
                              <div class="media post_item">

                                  <div class="media-body">

                                          <h3>Partiel BTS SIO SLAM</h3>
                                      </a>
                                      <p>Mercredi 18 et jeudi 19 décembre</p>
                                  </div>
                              </div>
                              <div class="media post_item">

                                  <div class="media-body">

                                          <h3>Partiel BTS SIO SISR</h3>
                                      </a>
                                      <p>02 Hours ago</p>
                                  </div>
                              </div>
                              <div class="media post_item">

                                  <div class="media-body">

                                          <h3>BAC Blanc</h3>
                                      </a>
                                      <p>03 Hours ago</p>
                                  </div>
                              </div>
                              <div class="media post_item">

                                  <div class="media-body">

                                          <h3>Rentrer scolaire</h3>
                                      </a>
                                      <p>Mardi 3 septembre 2019</p>
                                  </div>
                              </div>
                              <div class="br"></div>
                          </aside>
                          <aside class="single_sidebar_widget ads_widget">
                              <a><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                              <div class="br"></div>
                          </aside>
                          <aside class="single_sidebar_widget post_category_widget">
                              <h4 class="widget_title">Lieu</h4>
                              <ul class="list cat-list">
                                  <li>
                                      <a class="d-flex justify-content-between">
                                          <p>Angleterre</p>
                                          <p>3</p>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="d-flex justify-content-between">
                                          <p>Normandie</p>
                                          <p>1</p>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="d-flex justify-content-between">
                                          <p>les carroz d'araches</p>
                                          <p>2</p>
                                      </a>
                                  </li>
                              </ul>
                              <div class="br"></div>
                          </aside>

                          <aside class="single-sidebar-widget tag_cloud_widget">
                              <h4 class="widget_title">Tag</h4>
                              <ul class="list">
                                  <li><a>Technology</a></li>
                                  <li><a>Portsmouth</a></li>
                                  <li><a>Viste</a></li>
                                  <li><a>Fashion</a></li>
                                  <li><a>Food</a></li>
                                  <li><a>Angleterre</a></li>
                                  <li><a>Lifestyle</a></li>
                                  <li><a>Brigthon</a></li>
                                  <li><a>Adventure</a></li>
                                  <li><a>Normandie</a></li>
                                  <li><a>Lifestyle</a></li>
                                  <li><a>Montagne</a></li>
                              </ul>
                          </aside>
                      </div>
                  </div>
                </div>
                </div>
                </section>
<!------ code pour les dates importantes, les tags et les liens et les liens de l'ecole---------->



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
                </footer> <!------ code pour le pied de page---------->
</div>

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
<!------ liens pour le java script des deux templates---------->

</body>
</html>
