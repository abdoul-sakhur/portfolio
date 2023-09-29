<?php 
use PHPMailer\PHPMailer;


if(isset($_POST['nom']) && isset($_POST['email'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $commentaire=$_POST['commentaire'];
    
    require_once'PHPMailer/PHPMailer.php';
    require_once'PHPMailer/Exception.php';
    require_once'PHPMailer/SMTP.php';
    
    $mail = new PHPMailer(true);
    $mail->isSendmail();
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sarbaabdoulsacourou@gmail.com';
    $mail->Password = 'mansourou2002';
    $mail->SMTPSecure ='ssl';
    $mail->Port = 465;


    $mail->setFrom($email, $nom);
    $mail->addAddress('sarbaabdoulsacourou@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Commentaire';
    $mail->Body    = $commentaire;
    if( $mail->send()){
        echo "Message envoyé";
        header('Location:index.html');
    }else{
        echo "Message non envoyé";
        header('Location:index.html');
    }
   
   


}
?>