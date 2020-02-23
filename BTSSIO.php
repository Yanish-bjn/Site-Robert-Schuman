
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacter nous &mdash; Website Template by Colorlib</title>
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
<link rel="stylesheet" href="/site lycee/scss/_predefine.scss">

<link rel="stylesheet" href="css/flaticon.css" />
<link rel="stylesheet" href="css/themify-icons.css" />
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

  <link rel="stylesheet" href="css/style3.css" />
  <!------ style ---------->
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
            <img src="" alt=""/>
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
                    <li><a href="troisiemeprepapro.php">Troisieme prepa pro</a></li>
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
                <h1>BTS SIO</h1>
                <p data-aos="fade-up" data-aos-delay="100">Service informatique appliquer aux organisation.</p>
              </div>
            </div>


          </div> <!------ code de la nav bar---------->
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
              <img src="photo/ecran.png" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">BTS SIO</h2>
            <p> Le BTS Service informatique aux Organisations est un diplôme reconnu par l’État de niveau bac+2. En effet, cette formule répond aux attentes de la profession en matière de qualification. Le programme a évolué en fonction de la place et du rôle des TIC (Technologies d’information communication) et propose deux spécialités bien distinctes :  le BTS SIO SISR et le BTS SIO SLAM.</p>


            <ul class="ul-check list-unstyled succes">
              <li>Progrmmation</li>
              <li>Resaux</li>
              <li>Base de donnée</li>
            </ul>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section "  data-aos="fade">
      <div class="container">


        <div class="row mb-5">
          <div class="col-md-4 text-left border-primary">
            <h2 class="font-weight-light text-primary">Presentation des deux options :</h2>
            <p class="color-black-opacity-5">Il existe deux types d'options l'une axée sur la programation et le developement tandis que l'autre sur le resaux.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-5">
            <img src="photo/visite.png" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">BTS SIO SLAM</h3>
            <p class="caption text-primary">Option SLAM :</p>
            <p> Conception et développement d'applications : l'élève participera à la conception, au développement, ainsi qu'au déploiement et à la maintenance des composants logiciels d'une solution applicative. Il acquiert ainsi des compétences en conception et développement d'une solution applicative, en maintenance de celle-ci, mais aussi en bases de données et en gestion des données numériques.</p>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 mt-md-5">
            <img src="photo/assemblee.png" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">BTS SIO SISR</h3>
            <p class="caption text-primary">Option SISR :</p>
            <p>Administration des systèmes et des réseaux : le titulaire participera à l'administration des systèmes et du réseau, il sera capable de modifier ou d'adapter les solutions d'infrastructure ainsi que la qualité de service des équipements du réseau. Il acquiert ainsi les compétences pour concevoir une solution d'infrastructure réseau, l'installer, la tester et la déployer. L'élève apprend aussi à administrer et superviser ce réseau. </p>
          </div>
<!------ presentation de la formations---------->
          <div class="site-section "  data-aos="fade">
            <div class="container">


                <br/><br/><h1>BTS SIO</h1><br/><br/>

                  <h1>*Conditions d'admission</h1>
                    <ul>
                  <li><p>Prendre rendez-vous par téléphone afin d’être convoqué à un entretien au cours duquel seront évalués la motivation de l’étudiant ainsi que ses compétences et son projet professionnel. Un Curriculum Vitae ainsi qu’une lettre de motivation devront être envoyés avant l’entretien.<p></li>
                  <li><p>Pour tout contact : Jean-Marc Fizaine – Responsable de l’enseignement supérieur<p></li>
                      <p>Adresse email : jm.fizaine@lyceerobertschuman.com<p>
                      <p>Tél. : 01 48 37 95 09</p>
                  <p>Port. : 06 61 16 60 67</p>
                  </ul>
                  <p><h4>Un dossier devra être dûment constitué de pièces suivantes :</h4></p>
                  <ul>
                  <li>La fiche étudiante complétée et signée à télécharger et à remplir en ligne :</li>
                  <a href="http://www.lyceerobertschuman.com/wp-content/uploads/2019/02/Fiche-Etudiant-BTS-CPRP.pdf"
                download="lyceerobertschuman_CPRP">Téléchargement</a><br/>
                  <li>L’engagement de règlement du responsable payeur complété et signé à télécharger et à remplir en ligne :</li>
                      <a href="http://www.lyceerobertschuman.com/wp-content/uploads/2019/02/Engagement-de-R%C3%A8glement-BTS-CPRP.pdf"
                  download="lyceerobertschuman_reglement">Téléchargement</a><br/>
                <li>En cas d’option pour le prélèvement SEPA : RIB ou RIP IBAN.</li>
                  <li>Les frais de dossier à l’ordre du Lycée Robert Schuman 50€ (somme restant acquise à l’établissement en cas de désistement).</li>
                  <li>La copie de la carte d’identité ou du passeport pour les étudiants de nationalité Française.</li>
                  <li>La copie de la carte de séjour pour les étudiants de nationalité étrangère.
                  2 photos d’identité.</li>
                  <li>La copie de la carte vitale de l’étudiant.</li>
                  <li>L’extrait de casier judiciaire N°3 (à prévoir selon l’entreprise) : <a href="https://casier-judiciaire.justice.gouv.fr/mai-web-b3-presentation/pages/accueil.xhtml">Lien demande casier judiciaire national</a></li>
                  <li>Attestation de responsabilité civile couvrant l’élève pour l’année scolaire 2019 / 2020</li>
                </ul>
                  <p>Afin de prévoir la mise en place de l'apprentissage, l'ouverture d'un compte bancaire au nom de l'étudiant est nécessaire</p>
                <p><h3>Dès communication des résultats du Baccalauréat et au plus tard le 05/07/2019 :</h3></p>
                <ul>
                <li>La photocopie du bulletin du troisième trimestre de l’année en cours</li>
                <li>Le relevé de notes du Baccalauréat</li>
                </ul>

                <br/><br/><hr width="70%"/><br/><br/>

                <h1>Conditions financières</h1>
                    <br><center>Scolarité 2019-2020 : La contribution des familles pour l’année est de :</br>

                   <li>Formation en alternance</li>
                   <p>BTS CPRP (1ère année et 2e année) : Financement pris en charge par l'entreprise </p><br/>

                   <p>Demi-pension : le prix du repas est de 6.60€</p><br/><br/>
                   <center><p><h3>L'établissement est habileté à accueillir des élèves boursiers et à percevoir la Taxe d'Apprentissage</h3></p></center>

                     <br/><br/><hr width="70%"/><br/><br/>

                <center><h3>Etape 1</h3>
                <p>Prise de RDV:</p>
                <p>Par téléphone: 01 48 37 74 26</p>
                <p>Par mail: administration@lyceerobertschuman.com</p><br/>
                        <h3>Etape 2</h3>
                  <p>Entretien - Tests</p><br/>
                          <h3>Etape 3</h3>
                       <p>Validation de l'inscription</p><center><br/><br/><br/><br/><br/>
<!------ commisions---------->
          <section class="contact_area section_gap">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <div class="contact_info">
                    <div class="info_item">
                      <i class="	fa fa-share"></i>
                      <h6>Postuler a la formation</h6>
                      <p>BTS SIO </p>
                    </div>
                    <div class="info_item">
                      <i class="	fa fa-home"></i>
                      <h6><a>Lycee Robert Schuman</a></h6>
                      <p>5 avenue du Général de Gaulle - 93440 Dugny</p>
                    </div>
                    <div class="info_item">
                      <i class="	fa fa-phone-square"></i>
                      <h6><a>administration@lyceerobertschuman.com</a></h6>
                      <p>01 48 37 74 26</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <form form action="formulairepostuler.php" method="POST"
                    class="row contact_form"
                    action="contact_process.php"
                    method="post"
                    id="contactForm"
                    novalidate="novalidate"
                  >
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="nom"
                          name="nom"
                          placeholder="Entrer votre nom"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Entrer votre nom'"
                          required=""
                        />

                      </div>
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Entrer votre email"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Entrer votre email'"
                          required=""
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="formation"
                          name="formation"
                          placeholder="Nom de la formation"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Nom de la formation'"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          name="message"
                          id="message"
                          rows="1"
                          placeholder="Lettre de motivation"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = ' Lettre de Motivation'"
                          required=""
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-right">
                      <button type="submit" value="valider" class="btn primary-btn">
                        Envoyer
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section> <!------ postuler a la formation---------->








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
          </footer><!------ code pour le pied de page---------->
  </div>

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
</html><!------ code pour le ava script des deux templates---------->
