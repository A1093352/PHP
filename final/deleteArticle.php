<?php

require("DBconnected.php");
$aNo=$_GET["aNo"];
$SQL="DELETE FROM article WHERE aNo='$aNo'";
mysqli_query($link, $SQL);

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=informationManagement.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=informationManagement.php'>";
}

?>