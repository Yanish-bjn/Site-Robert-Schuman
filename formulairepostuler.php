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
	  $email=$_POST['email'];
	  $formation=$_POST['formation'];
		$message=$_POST['message'];

	    $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root','');
	   $req=$bdd->prepare('INSERT into postuler(nom, email, formation, message) VALUES(:nom, :email, :formation, :message)');
	   $a = $req->execute(array('nom'=>$nom,'email'=>$email,'formation'=>$formation, 'message'=>$message));

	    var_dump($a);
	                    // prepare la requette, recupere la requette, affiche la requette //
     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
     $mail->Password   = 'Tamere95';                               // SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to

     //Recipients
     $mail->setFrom('iliasverif@gmail.com', $formation);
     $mail->addAddress($email, 'Candidature');     // Add a recipient //Recipients
		  $mail->Body    = $message;
		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }

echo 'Votre candidature a bien était Envoyer, nous vous contacterons dans les plus bref delais !';
echo'<a href="acceuil.php" >acceuil</a>';
?> <!------ code pour postuler a la formations---------->
