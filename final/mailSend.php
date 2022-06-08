<?php
$email=$_POST["email"];
require("DBconnected.php");
$SQL1=" SELECT *
        FROM subscriber
        WHERE sEmail = '$email'";
if($result = mysqli_query($link, $SQL1)){
    if(mysqli_num_rows($result) == 1){
        echo "<script type='text/javascript'>";
        echo "alert('您已訂閱過！');";
        echo "</script>"; 
    }else{
        $SQL2="  INSERT INTO subscriber(sEmail)
                VALUES('$email')";
        mysqli_query($link, $SQL2);
        echo "<script type='text/javascript'>";
        echo "alert('訂閱成功');";
        echo "</script>";
    }
}
?>
<?php
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
    $mail->Username   = 'faya2022npo@gmail.com';                     //SMTP username
    $mail->Password   = 'bwewbleuwaborhzm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet ='UTF-8';

    //Recipients
    $mail->setFrom('faya2022npo@gmail.com', 'FAYA');
    $mail->addAddress($email);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "感謝您的訂閱！";
    $message="用戶您好，感謝您訂閱FAYA，今後我們將不定時向您傳送關於FAYA的最新資訊<br/>祝您有美好的一天！<br/>";
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
