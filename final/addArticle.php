<?php
    require("DBconnected.php");
    $aTitle=$_POST["aTitle"];
    $aDate=$_POST["aDate"];
    $aNPO = $_POST["aNPO"];
    $aUrl = $_POST["aUrl"];

    $SQL="INSERT INTO article(aTitle, aNPO, aDate, aUrl)
          VALUES('$aTitle', '$aNPO','$aDate', '$aUrl')";

    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('新增成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=informationManagement.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('新增失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=informationManagement.php'>";
    }



?>