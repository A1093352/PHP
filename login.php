<?php
    session_start();
?>

<?php
    if(isset($_COOKIE["UID"])){
        $cookieID = $_COOKIE["UID"];
        echo "感謝".$cookieID."回到本系統";    
    }
    else
        echo "歡迎初次來到本系統！";
?>


<html>

<head>
    <title>登入或註冊！</title>
</head>

<body bgcolor = "#fbfeec">
   <div align = "center">
       <br/>
        <p><font size = "7"><b>用戶登入</b></font></p>
        <form action = "login.php" method = "post" style = "width: 80%;" enctype = "multipart/form-data">
            <br/><br/></br><br/>
            <font size = "6"><b>帳號：</b></font>
            <input type = "text" name = "userName" style="font-size:22px" placeholder="請輸入帳號" required>
            <br/>
            <br/>
            <br/>
            <br/>
            <font size = "6"><b>密碼：</b></font>
            <input type="password" name="passwd" style="font-size:22px" required>
            </br></br></br>
            <button type="submit">Login</button>
        </form>
    </div>


<?php

$a_admin = "admin";
$admin_PWD = "1234";
$a_user = "user";
$user_PWD = "1234";


//date_default_timezone_set('Asia/Taipei');
//echo date("m-d-Y H:i:s", time());
//header("Refresh:5");


if(isset($_POST["userName"])){
    if($_POST["userName"]!=null){
        $uId = $_POST["userName"];
        $uPWD = $_POST["passwd"];

        if($a_admin == $uId && $admin_PWD == $uPWD){
            setcookie("UID", $uId, time()+17820);
            header('Location: admin.php');
            $_SESSION["login"]="Yes";
        }
        else if($a_user == $uId && $user_PWD == $uPWD){
            setcookie("UID", $uId, time()+17820);
            header('Location: signUp.php');
            $_SESSION["login"]="Yes";
        }
        else
            echo "帳號或密碼錯誤！";
    }
    else
        echo "請重新輸入帳號及密碼！";
}
else
    echo "歡迎，請輸入帳號及密碼！";
?>



</body>
























</html>