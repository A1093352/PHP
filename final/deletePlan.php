<?php

require("DBconnected.php");
$pNo=$_GET["pNo"];
$SQL="DELETE FROM plan WHERE pNo='$pNo'";
mysqli_query($link, $SQL);

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=NPOManagement.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=NPOManagement.php'>";
}

?>