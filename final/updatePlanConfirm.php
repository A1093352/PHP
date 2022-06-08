<?php
require("DBconnected.php");
$pNo = $_POST["pNo"];
$pName = $_POST["pName"];
$pDescription = $_POST["pDescription"];
$pNPO = $_POST["pNPO"];
$pLink = $_POST["pLink"];

if($pName != null){
    $SQL1="UPDATE plan SET pName='$pName' WHERE pNo='$pNo'";
    mysqli_query($link, $SQL1);
}
if($pDescription != null){
    $SQL2="UPDATE plan SET pDescription='$pDescription' WHERE pNo='$pNo'";
    mysqli_query($link, $SQL2);
}
if($pNPO != null){
    $SQL3="UPDATE plan SET pNPO='$pNPO' WHERE pNo='$pNo'";
    mysqli_query($link, $SQL3);
}
if($pLink != null){
    $SQL4="UPDATE plan SET pLink='$pLink' WHERE pNo='$pNo'";
    mysqli_query($link, $SQL4);
}
header('Location: NPOManagement.php');





?>