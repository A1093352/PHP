<?php

require("DBconnect.php");

$pathpart=pathinfo($_FILES['newPhoto']['name']);
$extname=$pathpart['extension'];
$finalphoto='Photo_'.time().".".$extname;


$pNo=$_POST["pNo"];
$ppath=$finalphoto;
$pdate=time();


$sql = "UPDATE photo
        SET ppath='$ppath', pdate='$pdate'
        WHERE pNo='$pNo'"
        ;

if(copy($_FILES["newPhoto"]["tmp_name"], $finalphoto)){
    if(mysqli_query($link, $sql)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta httpp-equiv='Refresh' content='0; url=photolist.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta httpp-equiv='Refresh' content='0; url=photolist.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗');";
    echo "</script>";
    echo "<meta httpp-equiv='Refresh' content='0; url=photolist.php'>";
}





?>