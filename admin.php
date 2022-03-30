<?php
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href = 'logout.php'>登出<a>";
        }
        else{
            echo "非法進入系統";
            exit();
        }
    }else{
        echo "非法進入系統";
        exit();
    }
    echo "<center><h1><b>Welcome to Admin!</b></h1></center>";

?>