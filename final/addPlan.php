<?php
    require("DBconnected.php");
    $pName=$_POST["pName"];
    $pDescription=$_POST["pDescription"];
    $pNPO = $_POST["pNPO"];
    $pTag = $_POST["pTag"];
    $pLink = $_POST["pLink"];

    $SQL="INSERT INTO plan(pName, pDescription, pNPO, pTag, pLink)
          VALUES('$pName', '$pDescription','$pNPO', '$pTag','$pLink')";

    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('新增成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=NPOManagement.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('新增失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=NPOManagement.php'>";
    }



?>