<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['nom']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $commentaire = $_POST['commentaire'];

    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sarbaabdoulsacourou@gmail.com'; // Votre adresse Gmail
        $mail->Password = 'aglf uhhq kzig jyix'; // Votre mot de passe Gmail
        $mail->SMTPSecure = 'tls'; // Utilisez TLS
        $mail->Port = 587; // Port TLS de Gmail

        // Destinataire et expéditeur
        $mail->setFrom($email, $nom);
        $mail->addAddress('sarbaabdoulsacourou@gmail.com'); // Adresse de destination
        $mail->isHTML(true);

        // Sujet et contenu de l'e-mail
        $mail->Subject = 'important';
        $mail->Body = $commentaire;

        $mail->send();
        echo "Message envoyé";
        header('Location: index.php');
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/images/laptop-device-computer-screen-monitor-16-28624.png">
  <title>Sarba Abdoul-sacourou</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free-6.2.0-web/css/all.css">
</head>

<body>
 <!-- <style >

body {
            background-color: rgb(25, 25, 25);
            color: white; /* Pour définir la couleur du texte en blanc */
        }
        #row1{
          background-color: rgb(25, 25, 25);
        }
          #navA {
          color: #fff;
        }
        #nav_element a{
          color: #fff;
        }
        #btn_download{
          background-color: #fff;
        }
        #envoiEmail{
          background-color: #fff;
        }
</style> -->







  <nav class="navbar navbar-expand-lg " id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" id="navA" href="#"><strong>S</strong>ARBA <strong>A</strong>BDOUL-<strong>S</strong>ACOUROU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav" id="nav_element">
          <a class="nav-link active" aria-current="page" href="#accueil"><strong>A</strong>ccueil</a>
          <a class="nav-link" href="#apropos"><strong>A</strong> propos </a>
          <a class="nav-link" href="#competences"><strong>C</strong>ompétences</a>
          <a class="nav-link" href="#containerServices"><strong>S</strong>ervices</a>
          <a class="nav-link" href="#contact"><strong>C</strong>ontacts</a>
      


        </div>
      </div>
    </div>
  </nav>

  <div class="container text-center" id="accueil">
    <div class="row" id="row1">
      <div class="col-md-6 col-sm-1 col-xs-1 col-lg-6" id="container_left">
        <!-- icone social media -->

        <div class="social">
          <button href="" class="btn btn-light" id="un"> <a
              href="https://www.linkedin.com/in/abdoul-sacourou-sarba-92799228b"><img src="assets/images/linkedin.svg"
                alt="" srcset="" class="imgSOCIAL"></a></button>
          <button href="" class="btn btn-light" id="deux"><a
              href="https://github.com/abdoul-sakhur/restaurant-.git"><img src="assets/images/github.svg" alt=""
                srcset="" class="imgSOCIAL"></a></button>
          <button href="" class="btn btn-light" id="trois"><a href=""><img src="assets/images/mail-line.svg" alt=""
                srcset="" class="imgSOCIAL"></a></button>
          <button href="" class="btn btn-light" id="quatre"><a href="tel:+2250170998499"><img
                src="assets/images/whatsapp.svg" alt="" srcset="" class="imgSOCIAL"></a></button>
          <button href="" class="btn btn-light" id="cinq"><a
              href="https://us05web.zoom.us/j/2345539225?pwd=JXvsXTWkUyBMhax0ku1OMJ32GUVklz.1"><img
                src="assets/images/zoom-in.svg" alt="" srcset="" class="imgSOCIAL"></a></button>
        </div>

        <!-- description -->

        <div class="description">

          <span class="span-presentation"><strong>Salut, </strong>je suis</span> <br>
          <span class="span-presentation"><strong>S</strong>arba
            <strong>A</strong>bdoul-<strong>S</strong>acourou</span><br>
          <span>Developpeur Web (Fullstack).</span>
          <p> &nbsp; &nbsp;Ma passion réside dans le développement informatique et tout ce qui concerne l'utilisation d'un ordinateur.</p>
          <button id="btn_download" class="btn "><a id="lienTelcharger" href="assets/CV sarba abdoul.pdf"
              download>Telecharger mon CV</a> <img src="assets/images/download-line.svg" id="imgDownload"> </button>
        </div>
      </div>
      <div class=" col-md-6 text-center" id="imagcontainerPrincipale">

        <img src="assets/images/IMG-20211124-WA0006 (1).jpg" class="rounded" id="conatinerimg">
      </div>

      <h1 class="text-center"><strong>A</strong> propos</h1>



      <div class=" col-md-6 text-center" id="apropos">

        <img src="assets/images/IMG-20211124-WA0006 (1).jpg" class="rounded" id="image_left">
      </div>

      <div class="col-md-6 col-sm-1 col-xs-1 col-lg-6">
        <h3 class="introduction">Introduction</h3>
        <p class="aproposMOi">
          Guidé par une passion profonde pour le domaine de la
          programmation et animé par une détermination
          inébranlable à devenir un développeur d'applications
          compétent, je suis actuellement en quête d'opportunités
          pour mettre en pratique mes compétences techniques. Mon
          ardent désir d'acquérir de nouvelles connaissances et
          d'évoluer constamment dans ce secteur s'accompagne
          d'une ferme volonté de développer une expertise en réseau,
          ce qui me positionne comme un candidat polyvalent et
          adaptable.
          
        </p>

        <div class="social_2">
          <ul>
            <li> <button class="btn btn-light" id="user"><img src="assets/images/user-fill.svg" alt="" srcset=""
                  class="imgSOCIAL"></button> SARBA ABDOUL-SACOUROU</li>
            <li> <button class="btn btn-light" id="deux"><img src="assets/images/phone.svg" alt="" srcset=""
                  class="imgSOCIAL"></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 002250170998499
            </li>
            <li> &nbsp; &nbsp; <button class="btn btn-light" id="trois"><img src="assets/images/mail-line.svg" alt=""
                  srcset="" class="imgSOCIAL"></button><b>sarbaabdoulsacourou@gmail.com</b></li>
          </ul>

          <button id="btn_download" class="btn "><a id="lienTelcharger" href="assets/CV sarba abdoul.pdf"
              download>Telecharger mon CV</a> <img src="assets/images/download-line.svg" id="imgDownload"> </button>
          <br>
          <br>
        </div>
      </div>


      <br>
      <br>

      <h1 class="text-center" id="competences"><strong>C</strong>ompétences</h1>


      <div class="col-md-6 col-sm-1 col-xs-1 col-lg-6">
        <h4 id="nom_competence">HTML</h4>
        <div class="progress">
          <div class="progress-bar " id="progress" role="progressbar" style="width:70%" aria-valuenow="25"
            aria-valuemin="0" aria-valuemax="50"> </div>
        </div>
        <h4 id="nom_competence">CSS</h4>
        <div class="progress">
          <div class="progress-bar " id="progress" role="progressbar" style="width: 60%" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="50"></div>
        </div>
        <h4 id="nom_competence">BOOTSTRAP</h4>
        <div class="progress">
          <div class="progress-bar " id="progress" role="progressbar" style="width: 60%" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="50"></div>
        </div>
        <h4 id="nom_competence">JAVASCRIPT</h4>
        <div class="progress">
          <div class="progress-bar " id="progress" role="progressbar" style="width: 50%" aria-valuenow="75"
            aria-valuemin="0" aria-valuemax="50"></div>
        </div>
        <h4 id="nom_competence">PHP</h4>
        <div class="progress">
          <div class="progress-bar " id="progress" role="progressbar" style="width: 40%" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="50"></div>
        </div>

      </div>


      <div class=" col-md-6 text-center">

        <img src="assets/images/IMG-20211124-WA0006 (1).jpg" class="rounded" id="image_left">
      </div>

    </div>

    <br>
    <br>


    <section class="sction1">
      <h1 class="text-center" id="containerServices"><strong>S</strong>ervices</h1>
      <div class="row row-cols-1 row-cols-md-2 g-4" id="containerGENERALE">

        <div class="col">

          <div class="card" id="card">
            <i id="icones" class="fa-solid fa-code" style="color: #000000;"> </i>
            <h5 class="card-title">Développement Front-End</h5>

            <div class="card-body">
              <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal"
                id="btn_download">
                Lire plus
              </button>
              <!-- Button trigger modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#000;">Développement Front-End
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="box-shadow:none; "></button>
                    </div>
                    <div class="modal-body">
                      <p style="color:#000;"> En combinant Bootstrap, CSS et JavaScript, les développeurs front-end
                        peuvent créer des sites web élégants, réactifs et fonctionnels. Bootstrap fournit une base
                        solide avec des composants prédéfinis, tandis que CSS offre un contrôle total sur la mise en
                        forme et le style, et JavaScript permet d'ajouter des fonctionnalités interactives pour
                        améliorer l'expérience de l'utilisateur. Ensemble, ces trois éléments forment un ensemble
                        puissant pour concevoir et développer des interfaces utilisateur web modernes et engageantes.
                      </p>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" id="card">
            <i id="icones" class="fa-solid fa-server" style="color: #000000;"></i>
            <h5 class="card-title">Développement Back-End</h5>

            <div class="card-body">
              <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal2"
                id="btn_download">
                Lire plus
              </button>
              <!-- Button trigger modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel2" style="color:#000;">Développement Back-End
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="box-shadow:none; "></button>
                    </div>
                    <div class="modal-body">
                      <p style="color:#000;">
                        le développement back-end en PHP et MySQL est un élément clé de la création d'applications web
                        interactives et
                        fonctionnelles. Ces technologies permettent de gérer efficacement les données, de répondre aux
                        demandes des
                        utilisateurs et de garantir la sécurité et la performance de l'application.
                      </p>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" id="card">
            <i id="icones" class="fa-brands fa-android" style="color: #000000;"></i>

            <h5 class="card-title">Développement Mobiles</h5>

            <div class="card-body">
              <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal3"
                id="btn_download">
                Lire plus
              </button>
              <!-- Button trigger modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel3" style="color:#000;">Développement Mobiles
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="box-shadow:none; "></button>
                    </div>
                    <div class="modal-body">
                      <p style="color:#000;">
                        le développement mobile en Flutter est une approche puissante pour créer des applications
                        mobiles multiplateformes
                        avec une UI attrayante et des performances élevées. La combinaison de Dart, de la bibliothèque
                        de widgets Flutter et
                        de la fonctionnalité "Hot Reload" en fait une option populaire pour les développeurs mobiles.
                      </p>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" id="card">
            <i id="icones" class="fa-solid fa-network-wired" style="color: #000000;"></i>

            <h5 class="card-title">Réseaux </h5>

            <div class="card-body">
              <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal4"
                id="btn_download">
                Lire plus
              </button>
              <!-- Button trigger modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel4" style="color:#000;">Réseaux</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="box-shadow:none; "></button>
                    </div>
                    <div class="modal-body">
                      <p style="color:#000;">
                        concevoir des réseaux, installer et configurer des équipements, assurer la maintenance et
                        résoudre les problèmes réseau, et mettre en place des mesures de sécurité,telles sont compétences
                        fondamentales et essentielles pour gérer efficacement les infrastructures réseau et garantir
                        la connectivité et la sécurité des données au sein des organisations.
                      </p>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>

      <br>
      <br>

      <h1 class="text-center" id="contact"><strong>C</strong>onctats</h1>
      <form action="" method="post" name="myForm" onsubmit="return validateForm()">
        <div class="col-md-6 offset-md-3">
          <label for="exampleFormControlInput1" class="form-label">Entrez votre nom </label>
          <input type="text" class="form-control" placeholder="" id="inputContact" name="nom">
        </div>
        <div class="col-md-6 offset-md-3">
          <label for="exampleFormControlInput1" class="form-label">Entrez votre adresse Email</label>
          <input type="email" class="form-control" placeholder="nom@example.com" id="inputContact" name="email">
        </div>
        <div class="col-md-6 offset-md-3">
          <label for="exampleFormControlTextarea1" class="form-label">Commentaires</label>
          <textarea class="form-control" id="inputContact" rows="3" name="commentaire"></textarea>
        </div>


        <button type="submit" id="envoiEmail" class="btn" name="envoyer">Envoyer<i class="fa-regular fa-paper-plane" style="color: #000000;"></i></button>
      </form>



    </section>

    <div class="social_suivi">
      <br>
      <h1 class="text-center"><strong>S</strong>uivez moi également sur</h1>

      <i hre="" class="fa-brands fa-github" style="color: #585757;"></i>
      <i hre="" class="fa-brands fa-discord" style="color: #585757;"></i>
      <i hre="" class="fa-brands fa-telegram" style="color: #585757;"></i>
      <i hre="" class="fa-brands fa-pinterest" style="color: #585757;"></i>
      <i hre="" class="fa-brands fa-linkedin" style="color: #585757;"></i>
    </div>
  </div>

  </div>


  <br>
  <br>






  <footer>

    <p class="text-center">Tous droits reservés | Sarba Abdoul-sacourou</p>
  </footer>

  <script>
    // Fonction de validation du formulaire
    function validateForm() {
      // Récupération des valeurs des champs
      var nom = document.forms["myForm"]["nom"].value;
      var email = document.forms["myForm"]["email"].value;
      var commentaire = document.forms["myForm"]["commentaire"].value;
  
      // Validation du champ nom (il ne doit pas être vide)
      if (nom == "") {
        alert("Veuillez entrer votre nom.");
        return false;
      }
  
      // Validation du champ email (il doit être une adresse email valide)
      if (!isValidEmail(email)) {
        alert("Veuillez entrer une adresse email valide.");
        return false;
      }
  
      // Validation du champ commentaire (il ne doit pas être vide)
      if (commentaire == "") {
        alert("Veuillez entrer un commentaire.");
        return false;
      }
  
      // Si toutes les validations passent, le formulaire est valide
      return true;
    }
  
    // Fonction pour valider une adresse email
    function isValidEmail(email) {
      var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      return pattern.test(email);
    }
  </script>
  
  <script src="assets/fontawesome-free-6.2.0-web/js/all.js"></script>
  <script src="assets/fontawesome-free-6.2.0-web/js/all.min.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="assets/bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>