<?php
    require("DBconnect.php");

    $new_email = $_POST["email"];
    $exist = 0;
    $SQL = "SELECT *
            FROM elist";
    
    if ( $result = mysqli_query($link, $SQL) ) {
        while( $row = mysqli_fetch_assoc($result) ){ 
            $email = $row["email"];
            if($new_email == $email){
                echo "<script type='text/javascript'>";
                echo "alert('您已訂閱過！');";
                echo "</script>";
                $exist = 1;
                break;
            }
        }
        if($exist == 0){
            $sql = "INSERT INTO elist(email)
                    VALUES ('$new_email')
                    ";
            if(mysqli_query($link, $sql)){       
                echo "<script type='text/javascript'>";
                echo "alert('成功加入訂閱！');";
                echo "</script>";
            }else{
                echo "<script type='text/javascript'>";
                echo "alert('訂閱失敗！');";
                echo "</script>";
            }
        }
    }


?>