<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //include the autoloader
    require '../vendor/autoload.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $names = htmlspecialchars($_POST['names']);
        $email = htmlspecialchars($_POST['email']);
        $country = htmlspecialchars($_POST['country']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
    
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }
    
        // PHPMailer setup
        $mail = new PHPMailer(true);
    
        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'martin44line@gmail.com'; // Your email
            $mail->Password = 'oyza lsni iyqz tgdm'; // Your email password or app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
    
            // Email content
            $mail->setFrom($email, $names);
            $mail->addAddress('martin44line@gmail.com'); // Recipient email
            $mail->Subject = "De la Page Contact du Site Internet SFAN";
            $mail->Body = "Vous avez reçu un nouveau mail de $names.\n\n" .
                          "Pays : $country.\n\n" .
                          "Objet : $subject.\n\n" .
                          "Corps du Message :\n\n $message.\n\n";
    
            // Send email
            if ($mail->send()) {
                // Success Message
                echo "Votre message a été envoyé avec succès!";
            }
    
        } catch (Exception $e) {
            echo "Error: Le message n'a pas pu être envoyé. Erreur de Mailer: {$mail->ErrorInfo}";
        }
    }

    


    /*require 'connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $names = htmlspecialchars($_POST['names']);
        $email = htmlspecialchars($_POST['email']);
        $country = htmlspecialchars($_POST['country']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);


        //enail details
        $to = "martin44line@gmail.com";
        $subject = "De la Page Contact du Site Internet SFAN";
        $headers = "De : $email\r\n";
        $headers .= "Répondre à : $email\r\n";
        $headers .= "Type de Contenu : text/plain; charset=UTF-8\r\n";

        //le corps du mail
        $body = "Vous avez reçu un nouveau mail de $names.\n\n";
        $body .= "Pays : $country.\n\n";
        $body .= "Objet : $subject.\n\n";
        $body .= "Corps du Message :\n $message.\n\n";

        if(mail($to, $subject, $body, $headers)){
            echo "Votre message a été envoyé avec succès";
        }else{
            echo "Error, please try again later";
        }

    }*/



    /*require 'connection.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $names = htmlspecialchars($_POST['names']);
        $email = htmlspecialchars($_POST['email']);
        $country = htmlspecialchars($_POST['country']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
    
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }
    
        // Email details
        $to = "martin44line@gmail.com";
        $subject = "De la Page Contact du Site Internet SFAN";
    
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
        $body = "Vous avez reçu un nouveau mail de $names.\n\n";
        $body .= "Pays : $country.\n\n";
        $body .= "Objet : $subject.\n\n";
        $body .= "Corps du Message :\n $message.\n\n";
    
        // Send mail
        if (mail($to, $subject, $body, $headers)) {
            echo "Votre message a été envoyé avec succès";
        } else {
            $lastError = error_get_last();
            if ($lastError) {
                error_log($lastError['message']);
            } else {
                error_log("Unknown error occurred while sending mail.");
            }
            echo "Error, please try again later";
        }
    }*/

    
?>
