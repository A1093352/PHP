<?php
    require("DBconnect.php");
    $SQL = "SELECT *
            FROM elist";
    $i=0;
    if ( $result = mysqli_query($link, $SQL) ) {
        while( $row = mysqli_fetch_assoc($result) ){ 
            $email[$i] = $row["email"];
            $i++;
        }
    }
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'PHPMailer\PHPMailer-master\src\Exception.php';
    require 'PHPMailer\PHPMailer-master\src\PHPMailer.php';
    require 'PHPMailer\PHPMailer-master\src\SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'a1093352@mail.nuk.edu.tw';                     //SMTP username
        $mail->Password   = '254956328';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet ='UTF-8';

        //Recipients
        $mail->setFrom('a1093352@mail.nuk.edu.tw', 'YunShanHan');
        $i=0;
        if ( $result = mysqli_query($link, $SQL) ) {
            while($row = mysqli_fetch_assoc($result)){
                $mail->addAddress($email[$i]); 
                $i++;
            }
        }    //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "致每位訂戶";
        $message="感謝您的訂閱！<br>";
        $mail->Body    = $message;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '訊息已傳送';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    

?>