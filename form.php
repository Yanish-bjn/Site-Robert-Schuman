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

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];
$pays = $_GET['Pays'];
$email = $_GET['email'];


	$req = $bdd->prepare('INSERT INTO inscription_eleve (Nom, Prenom, Age , Pays, Mail) VALUES
(:nom, :prenom, :Age, :pays, :mail)');
	$a = $req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'Age' => $age,
		'pays' => $pays,
    'mail' => $email
	));


	                    // Enable verbose debug output
     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
     $mail->Password   = 'Tamere95';                               // SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to

     //Recipients
     $mail->setFrom('iliasverif@gmail.com', 'Mailer');
     $mail->addAddress('iliasverif@gmail.com', 'etudiant');     // Add a recipient
		  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }


echo 'La personne a bien été ajouté ! Veillez vous connectez maintenant';
echo'<a href="index.php" >Connexion</a>';


?>
