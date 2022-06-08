<?php

require("DBconnected.php");
$sNo=$_GET["sNo"];
$SQL="DELETE FROM subscriber WHERE sNo='$sNo'";
mysqli_query($link, $SQL);

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=subscribeManagement.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=subscribeManagement.php'>";
}

?>