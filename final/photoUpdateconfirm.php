<?php
    require("DBconnected.php");
    $uNo=$_POST["uNo"];
    $pathpart=pathinfo($_FILES['photo']['name']);
    $extname=$pathpart['extension'];
    $finalphoto="photo".$uNo.".".$extname;
    $file='./img/';

    if($_FILES['photo']['name'] != null){
        $SQL="UPDATE user SET uPhoto='$finalphoto' WHERE uNo='$uNo'";  
        if(mysqli_query($link, $SQL)){
            if(move_uploaded_file($_FILES['photo']['tmp_name'],$file.$finalphoto)){
                echo "<script type='text/javascript'>";
                echo "alert('照片更新成功');";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=userData.php'>";
            }else{
                echo "<script type='text/javascript'>";
                echo "alert('照片更新失敗');";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=userData.php'>";
            }
        }
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('照片更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=userData.php'>";
    }

?>
