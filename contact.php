<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=htmlspecialchars($_POST['name']);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone=htmlspecialchars($_POST['phone']);
    $message=htmlspecialchars($_POST['message']);
    if (empty($name) || empty($email) || empty($phone) || empty($message)){
        die('veuillez remplir tout les champs');
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        die('email invalide');
    }

         $to = "sarbaabdoulsacourou@gmail.com"; 
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $email_subject = "Message de $name concernant: $subject";
        $email_message = "Nom: $name\n";
        $email_message .= "Email: $email\n\n";
        $email_message .= "Message:\n$message\n";
        if (mail($to, $email_subject, $email_message, $headers)) {
            echo "Votre message a été envoyé avec succès.";
        } else {
            echo "Une erreur s'est produite lors de l'envoi de votre message.";
        }
}




?>