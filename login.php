<?php
    session_start();
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        'nukim2022',  // 密碼
        'php');  // 預設使用的資料庫名稱
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


//date_default_timezone_set('Asia/Taipei');
//echo date("m-d-Y H:i:s", time());
//header("Refresh:5");


if(isset($_POST["userName"])){
    if($_POST["userName"]!=null){
        $uId = $_POST["userName"];
        $uPWD = $_POST["passwd"];

        $sql = "SELECT *
                FROM user
                WHERE uName='$uId' AND uPwd='$uPWD'";
        
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result)==1) {
            $_SESSION["login"]="Yes";
            setcookie("UID", $uId, time()+17820);
            header('Location: signUp.php');
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