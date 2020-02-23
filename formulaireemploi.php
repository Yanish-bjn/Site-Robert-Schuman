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

	  $entreprise=$_POST['entreprise'];
	  $poste=$_POST['poste'];
	  $ville=$_POST['ville'];
	  $profil=$_POST['profil'];
	  $email=$_POST['email'];

	    $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root','');
	   $req=$bdd->prepare('INSERT into offre(entreprise, poste, ville, profil, email) VALUES(:entreprise, :poste, :ville, :profil, :email)');
	   $a = $req->execute(array('entreprise'=>$entreprise,'poste'=>$poste,'ville'=>$ville, 'profil'=>$profil, 'email'=>$email));
// prepare la requette, recupere la requette, affiche la requette //
	    var_dump($a);
	                    // Enable verbose debug output //
     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
     $mail->Password   = 'Tamere95';                               // SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to

     //Recipients
     $mail->setFrom('iliasverif@gmail.com', 'Nous avons bien recu votre depo offre, merci de votre confiance');
     $mail->addAddress($email, 'Offre');     // Add a recipient //Recipients
		  $mail->Body    =  $poste;
		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }

echo 'Votre offre à bien était envoyé !';
echo'<a href="acceuil.php" >acceuil</a>';
?><!------ code pour postuler envoyer une offre de formation---------->
