<?php

require("DBconnected.php");

$uNo = $_POST["uNo"];
$uPwd = $_POST["uPwd"];
$newPwd = $_POST["newPwd"];
$newPwd1 = $_POST["newPwd1"];


$sql = "SELECT * 
        FROM user
        WHERE uNo='$uNo' AND uPwd='$uPwd'";

$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)==1&($newPwd == $newPwd1)){
    $sql1 = "UPDATE user
             SET uPwd='$newPwd'
             WHERE uNo='$uNo'";
    if(mysqli_query($link, $sql1)){
        echo "<script type='text/javascript'>";
        echo "alert('修改成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=userData.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('修改失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=changePassword.php'>";
    }
}else if(mysqli_num_rows($result)!=1){
    echo "<script type='text/javascript'>";
    echo "alert('密碼錯誤！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=changePassword.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('兩次輸入密碼必須相同！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=changePassword.php'>"; 
}





?>