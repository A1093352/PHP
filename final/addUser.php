<?php

require("DBconnected.php");

$uName=$_POST['uName'];
$birthday=$_POST["birthday"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$uRole=$_POST["uRole"];

$sql1 = "   SELECT *
            FROM user
            WHERE email = '$email'";

$result = mysqli_query($link, $sql1);
if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>";
    echo "alert('電子郵件信箱已被註冊過！')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=accountManagement.php'>";
}else if(strcmp($uRole,'user') != 0 && strcmp($uRole,'admin') != 0){
    echo "<script type='text/javascript'>";
    echo "alert('使用者身份須為admin或user')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=accountManagement.php'>";
}else{
    $sql2 = "INSERT into user(uName, birthday, tel, email, uRole, uPhoto)
             VALUES('$uName','$birthday','$tel','$email','$uRole','photo.jpg')";
    mysqli_query($link, $sql2); 
    echo "<script type='text/javascript'>";
    echo "alert('新增成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=accountManagement.php'>";
}

?>