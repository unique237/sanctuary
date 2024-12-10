<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //include the autoloader
    require '../vendor/autoload.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);
    
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
            $mail->setFrom($email);
            $mail->addAddress('martin44line@gmail.com'); // Recipient email
            $mail->Subject = "NOUVEL UTILISATEUR QUI SOUHAITERAIT SOUSCRIRE A LA NEWS LETTER DU SFAN";
            $mail->Body = "Vous avez reçu un nouveau mail de $email.\n\n" .
                          "$email SOUHAITE SOUSCRIRE A LA NEWSLETTER DU SFAN:\n\n VOUS AVEZ LE DROIT DE LUI ENVOYEZ DES MESSAGES.\n\n";
    
            // Send email
            if ($mail->send()) {
                // Success Message
                echo "Votre message a été envoyé avec succès!";
            }
    
        } catch (Exception $e) {
            echo "Error: Le message n'a pas pu être envoyé. Erreur de Mailer: {$mail->ErrorInfo}";
        }
    }

    


   
?>
