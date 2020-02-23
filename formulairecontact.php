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
	  $sujet=$_POST['sujet'];
	  $message=$_POST['message'];

	    $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root','');
	   $req=$bdd->prepare('INSERT into contact(nom, prenom, email, sujet, message) VALUES(:nom, :prenom, :email, :sujet, :message)');
	   $a = $req->execute(array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email, 'sujet'=>$sujet, 'message'=>$message));
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
     $mail->setFrom('iliasverif@gmail.com', $sujet);
     $mail->addAddress($email, 'Contact');     // Add a recipient //Recipients
		  $mail->Body    =  $message;
		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }

echo 'Votre message à bien était envoyé !';
echo'<a href="acceuil.php" >acceuil</a>';
?><!------ code pour etre contacter---------->
