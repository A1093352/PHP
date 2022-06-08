<?php
    session_start();
    require("DBconnected.php");
    if($_POST["email"] == null){
        echo "<script type='text/javascript'>";
        echo "alert('電子郵件信箱不得為空');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
    }else {
        $email = $_POST['email'];
        $SQL = "SELECT *
                FROM user
                WHERE email = '$email'";
        $result = mysqli_query($link, $SQL);
        if (mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_assoc($result);
            $uNo = $row['uNo'];
            $_SESSION['uNo']=$uNo;
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('電子郵件信箱不存在！');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=login.php'>"; 
        }
    }
    srand((double)microtime()*1000000);
    $_SESSION['authnum']=""; 
    while(($authnum=rand()%100000)<10000); 
    $_SESSION['authnum']=$authnum; 
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
    $mail->Subject = "獲取您的驗證碼！";
    $message="用戶您好，您的驗證碼為<b>".$authnum."</b><br/>";
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('Location: forgetPassword.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}