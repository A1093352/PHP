<?php

require("DBconnected.php");

$email = $_POST["email"];
$uPwd = $_POST["uPwd"];
$uPwd1 = $_POST["uPwd1"];

$sql1 = "   SELECT *
            FROM user
            WHERE email = '$email'";
$result = mysqli_query($link, $sql1);
if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>";
    echo "alert('電子郵件信箱已被註冊過！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=enroll.php'>";
}else if($uPwd != $uPwd1){
    echo "<script type='text/javascript'>";
    echo "alert('兩次密碼輸入必須相同！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=enroll.php'>";
}else{
    $sql = "INSERT INTO user(uName, email, uPwd, uRole, uPhoto)
            VALUES ('善心人士', '$email','$uPwd', 'user', 'photo.jpg')
            ";
    if(mysqli_query($link, $sql)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗');";
        echo "</script>";
    }        
}




?>