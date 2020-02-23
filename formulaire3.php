<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';
//
$mail = new PHPMailer();

	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');

	  $nom=$_POST['nom'];
	  $prenom=$_POST['prenom'];
	  $email=$_POST['email'];
	  $role=$_POST['role'];
	  $login=$_POST['login'];
	  $mdp=md5($_POST['mdp']);
var_dump($_POST);

	    $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root','');
	   $req=$bdd->prepare('INSERT into inscription(nom, prenom, email, role, login, mdp) VALUES(:nom, :prenom, :email, :role, :login, :mdp)');
	   $a = $req->execute(array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email, 'role'=>$role, 'login'=>$login, 'mdp'=>$mdp));
// prepare la requette, recupere la requette, affiche la requette //
	    var_dump($a);
	    echo 'la personne a bien etait ajouter !';
	                    // Enable verbose debug output //
     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
     $mail->Password   = 'Tamere95';                               // SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to

     //Recipients
     $mail->setFrom('iliasverif@gmail.com', 'Mailer');
     $mail->addAddress('iliasverif@gmail.com', 'etudiant');     // Add a recipient //Recipients
		  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }

echo 'La personne a bien été ajouté ! Veuillez vous connectez maintenant';
echo'<a href="connexion.php" >Connexion</a>';

?>
<!------ traitement pour ajouter une personne lors de l'inscription au site---------->
