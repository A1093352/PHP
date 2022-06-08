<?php
require("DBconnected.php");
$aNo=$_POST["aNo"];
$aTitle=$_POST["aTitle"];
$aDate=$_POST["aDate"];
$aNPO = $_POST["aNPO"];
$aUrl = $_POST["aUrl"];

$SQL="UPDATE article SET aTitle='$aTitle', aDate='$aDate', aNPO='$aNPO', aUrl='$aUrl' WHERE aNo='$aNo'";


if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=informationManagement.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=informationManagement.php'>";
}

?>