<?php

require("DBconnected.php");

$uNo = $_POST['uNo'];
$authnum = $_POST['authnum'];
$authnum1 = $_POST['authnum1'];
$newPwd = $_POST["newPwd"];
$newPwd1 = $_POST["newPwd1"];



$sql = "SELECT * 
        FROM user
        WHERE uNo='$uNo'";

if(mysqli_query($link, $sql)&&($newPwd == $newPwd1)&&($authnum == $authnum1)){
    $sql1 = "UPDATE user
             SET uPwd='$newPwd'
             WHERE uNo='$uNo'";
    if(mysqli_query($link, $sql1)){
        echo "<script type='text/javascript'>";
        echo "alert('密碼更新成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('密碼更新失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=forgetPassword.php'>";
    }
}else if(($authnum != $authnum1)){
    echo "<script type='text/javascript'>";
    echo "alert('驗證碼錯誤！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=forgetPassword.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('兩次輸入密碼必須相同！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=forgetPassword.php'>"; 
}





?>