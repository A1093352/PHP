<?php

require("DBconnected.php");

$uNo = $_GET["uNo"];
echo $uNo;
$sql = "DELETE FROM user
        WHERE uNo='$uNo'";

if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=accountManagement.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=accountManagement.php'>";
}

?>