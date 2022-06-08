<?php

require("DBconnected.php");
$uNo=$_POST["uNo"];

$uName=$_POST["uName"];
if($uName != null){
    $sql = "UPDATE user
            SET uName='$uName'
            WHERE uNo='$uNo'"
            ;
    mysqli_query($link, $sql);      
}
$birthday=$_POST["birthday"];
if($birthday != null){
    $sql1 = "UPDATE user
            SET birthday='$birthday'
            WHERE uNo='$uNo'"
            ;
    mysqli_query($link, $sql1);  
}
$tel=$_POST["tel"];
if($tel != null){
    $sql2 = "UPDATE user
            SET tel='$tel'
            WHERE uNo='$uNo'"
            ;
    mysqli_query($link, $sql2);  
}

header('Location: userData.php');




?>