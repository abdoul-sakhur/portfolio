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
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sarbaabdoulsacourou@gmail.com'; 
        $mail->Password = 'aglf uhhq kzig jyix'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; 

        $mail->setFrom($email, $nom);
        $mail->addAddress('sarbaabdoulsacourou@gmail.com'); 
        $mail->isHTML(true);

       
        $mail->Subject = $nom;
        $mail->Body = $commentaire;

        $mail->send();
        echo "<script>
        console.log('Email envoyé');
        alert('Email envoyé');
    </script>";
        header('Location: index.html');
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
    }
}
?>
